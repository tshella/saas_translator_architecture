#!/bin/bash
set -e

CONTAINER="symfony_app"
MIGRATIONS_DIR="/var/www/migrations"

echo "📁 Ensuring migrations directory exists inside container '$CONTAINER'..."
docker exec -it $CONTAINER mkdir -p $MIGRATIONS_DIR

echo "🔍 Checking for existing migration files..."
MIGRATION_COUNT=$(docker exec $CONTAINER bash -c "ls -1 $MIGRATIONS_DIR/*.php 2>/dev/null | wc -l")

if [ "$MIGRATION_COUNT" -eq 0 ]; then
  echo "🧬 No migrations found. Generating initial migration..."
  docker exec -u www-data $CONTAINER php bin/console make:migration
else
  echo "🧬 Found $MIGRATION_COUNT migration(s). Checking for new changes..."
  docker exec -u www-data $CONTAINER php bin/console doctrine:migrations:diff || true
fi

echo "🚀 Running migrations..."
docker exec -u www-data $CONTAINER php bin/console doctrine:migrations:migrate --no-interaction --allow-no-migration

echo "✅ Migration process complete."
