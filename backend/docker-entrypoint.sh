#!/bin/bash
set -e

echo "🏁 Running entrypoint script..."

echo "⏳ Waiting for database..."
while ! nc -z db 3306; do
  echo "⏳ Waiting for db to be available..."
  sleep 2
done

cd /var/www

echo "📁 Ensuring directories exist..."
mkdir -p migrations var/cache var/log public
chown -R www-data:www-data var migrations public

echo "🚀 Running composer scripts (post-install-cmd)..."
composer run-script post-install-cmd || true

echo "🧬 Creating database if not exists..."
php bin/console doctrine:database:create --if-not-exists || true

# Check for existing migration files
MIGRATION_FILES=$(ls migrations/*.php 2>/dev/null || true)

if [ -z "$MIGRATION_FILES" ]; then
  echo "🧬 No migration files found. Generating initial migration..."
  php bin/console make:migration || true
else
  echo "🧬 Existing migration files detected. Skipping generation."
fi

echo "🚀 Running migrations..."
php bin/console doctrine:migrations:migrate --no-interaction --allow-no-migration || true

echo "🚀 Starting Symfony app on 0.0.0.0:8000..."
exec php -S 0.0.0.0:8000 -t public
