# Makefile for saas_translator_architecture

# Variables
APP_NAME = saas_translator_app
COMPOSE_FILE = docker-compose.yml
DATABASE_URL ?= mysql://user:password@db:3306/dbname

.PHONY: all build up down logs shell migrate seed cache-clear clean help

all: help

## Build the Docker images
build:
	@echo "Building Docker images..."
	docker build --build-arg DATABASE_URL=$(DATABASE_URL) -t $(APP_NAME) ./backend

## Start Docker containers (detached)
up:
	@echo "Starting Docker containers..."
	docker-compose -f $(COMPOSE_FILE) up -d

## Stop Docker containers
down:
	@echo "Stopping Docker containers..."
	docker-compose -f $(COMPOSE_FILE) down

## View logs for all containers
logs:
	@echo "Showing logs..."
	docker-compose -f $(COMPOSE_FILE) logs -f

## Run shell inside backend container
shell:
	@echo "Opening shell inside backend container..."
	docker exec -it $(APP_NAME) /bin/bash

## Run Symfony migrations
migrate:
	@echo "Running database migrations..."
	docker exec -it $(APP_NAME) php bin/console doctrine:migrations:migrate --no-interaction

## Seed database with sample data
seed:
	@echo "Seeding database..."
	docker exec -it $(APP_NAME) ./scripts/seed.sh

## Clear Symfony cache
cache-clear:
	@echo "Clearing Symfony cache..."
	docker exec -it $(APP_NAME) php bin/console cache:clear

## Clean up Docker environment and remove images
clean: down
	@echo "Removing Docker images..."
	docker rmi $(APP_NAME) || true

## Help: Display this help message
help:
	@echo "Usage: make [target]"
	@echo ""
	@echo "Targets:"
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "  %-15s %s\n", $$1, $$2}'
