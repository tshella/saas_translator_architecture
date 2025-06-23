#!/bin/bash
set -e

echo "📁 Ensuring migrations directory exists..."
docker exec -it symfony_app mkdir -p /var/www/migrations

echo "🧬 Generating migration..."
docker exec -it symfony_app php bin/console make:migration

echo "🚀 Running migration..."
docker exec -it symfony_app php bin/console doctrine:migrations:migrate --no-interaction --allow-no-migration

echo "✅ Migration complete."
