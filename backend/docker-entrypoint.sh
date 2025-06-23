#!/bin/bash

set -e

echo "🏁 Running entrypoint script..."

# Wait for DB to be ready (MySQL default port)
echo "⏳ Waiting for database..."
until nc -z db 3306; do
  echo "⏳ Waiting for db to be available..."
  sleep 2
done

# Run Doctrine commands
echo "📦 Installing dependencies..."
composer install --no-interaction

echo "🧬 Running migrations..."
php bin/console doctrine:database:create --if-not-exists
php bin/console doctrine:migrations:migrate --no-interaction

# Optional: seed data (uncomment if needed)
# echo "🌱 Seeding database..."
# php bin/console app:seed

# Start Symfony server or PHP process
echo "🚀 Starting Symfony app"
exec php -S 0.0.0.0:8000 -t public
