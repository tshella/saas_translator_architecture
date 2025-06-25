# Makefile for saas_translator_architecture

# Variables (can be overridden from environment or command line)
APP_NAME ?= saas_translator_app
COMPOSE_FILE ?= docker-compose.yml
DATABASE_URL ?= mysql://user:password@db:3306/dbname
CONTAINER_NAME ?= $(APP_NAME)
NLLB_CONTAINER ?= nllb-mini

.PHONY: all build up down restart logs shell migrate seed cache-clear clean worker help \
        nllb-build nllb-up nllb-logs nllb-shell nllb-health

.DEFAULT_GOAL := help

## Build the Docker images
build:
	@echo "Building Docker images..."
	docker build --build-arg DATABASE_URL=$(DATABASE_URL) -t $(APP_NAME) ./backend

## Start Docker containers (detached)
up:
	@echo "Starting Docker containers..."
	docker compose up -d

## Stop Docker containers
down:
	@echo "Stopping Docker containers..."
	docker compose down -v --remove-orphans

## Restart Docker containers
restart: down up
	@echo "Restarted Docker containers."

## View logs for all containers
logs:
	@echo "Showing logs..."
	docker compose logs -f

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

## NLLB: Build the nllb-mini service
nllb-build:
	@echo "Building NLLB-Mini container..."
	docker compose build nllb-mini

## NLLB: Start nllb-mini in isolation
nllb-up:
	@echo "Starting NLLB-Mini only..."
	docker compose up -d nllb-mini

## NLLB: Show logs
nllb-logs:
	@echo "NLLB-Mini Logs:"
	docker compose logs -f nllb-mini

## NLLB: Open shell inside NLLB container
nllb-shell:
	@echo "Opening shell inside '$(NLLB_CONTAINER)'..."
	docker exec -it $(NLLB_CONTAINER) /bin/bash

## NLLB: Check if NLLB-Mini is healthy
nllb-health:
	@curl --silent --fail http://localhost:5001/translate || echo "❌ NLLB-Mini not healthy"

## Help: Display this help message
help:
	@echo "Usage: make [target]"
	@echo ""
	@echo "Targets:"
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | \
	awk 'BEGIN {FS = ":.*?## "}; {printf "  %-20s %s\n", $$1, $$2}'
