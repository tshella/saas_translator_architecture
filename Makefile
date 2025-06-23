# Makefile for saas_translator_architecture

# Variables (can be overridden from environment or command line)
APP_NAME ?= saas_translator_app
COMPOSE_FILE ?= docker-compose.yml
DATABASE_URL ?= mysql://user:password@db:3306/dbname
CONTAINER_NAME ?= $(APP_NAME)

.PHONY: all build up down restart logs shell migrate seed cache-clear clean worker help

.DEFAULT_GOAL := help

## Build the Docker images
build:
	@echo "Building Docker images..."
	docker build --build-arg DATABASE_URL=$(DATABASE_URL) -t $(APP_NAME) ./backend

## Start Docker containers (detached)
up:
	@echo "Starting Docker containers..."
	docker compose $(COMPOSE_FILE) up -d

## Stop Docker containers
down:
	@echo "Stopping Docker containers..."
	docker compose $(COMPOSE_FILE) down -v --remove-orphans

## Restart Docker containers
restart: down up
	@echo "Restarted Docker containers."

## View logs for all containers
logs:
	@echo "Showing logs..."
	docker compose $(COMPOSE_FILE) logs -f

## Run shell inside backend container
shell:
	@echo "Opening shell inside backend container '$(CONTAINER_NAME)'..."
	docker exec -it $(CONTAINER_NAME) /bin/bash

## Run Symfony migrations
migrate:
	@echo "Running database migrations inside container '$(CONTAINER_NAME)'..."
	docker exec -it $(CONTAINER_NAME) php bin/console doctrine:migrations:migrate --no-interaction

## Seed database with sample data
seed:
	@echo "Seeding database inside container '$(CONTAINER_NAME)'..."
	docker exec -it $(CONTAINER_NAME) ./scripts/seed.sh

## Clear Symfony cache
cache-clear:
	@echo "Clearing Symfony cache inside container '$(CONTAINER_NAME)'..."
	docker exec -it $(CONTAINER_NAME) php bin/console cache:clear

## Run translation worker (async queue consumer)
worker:
	@echo "Starting translation worker in container '$(CONTAINER_NAME)'..."
	docker exec -it $(CONTAINER_NAME) php bin/console app:consume-translations

## Clean up Docker environment and remove images
clean: down
	@echo "Removing Docker images..."
	docker rmi $(APP_NAME) || true

## Help: Display this help message
help:
	@echo "Usage: make [target]"
	@echo ""
	@echo "Targets:"
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | \
	awk 'BEGIN {FS = ":.*?## "}; {printf "  %-15s %s\n", $$1, $$2}'
