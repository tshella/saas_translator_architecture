#!/bin/bash

set -e

echo "🏁 Running entrypoint script..."

# Wait for DB to be ready (MySQL default port)
echo "⏳ Waiting for database..."
until nc -z db 3306; do
  echo "⏳ Waiting for db to be available..."
  sleep 2
done

# Move to working directory
cd /var/www

# Run Composer
echo "📦 Installing dependencies..."
composer install --no-interaction --optimize-autoloader

# Run Doctrine commands
echo "🧬 Creating and migrating database..."
php bin/console doctrine:database:create --if-not-exists
php bin/console doctrine:migrations:migrate --no-interaction

# Optional: seed data (uncomment to enable)
# echo "🌱 Seeding database..."
# php bin/console app:seed

# Start Symfony built-in server
echo "🚀 Starting Symfony app..."
exec php -S 0.0.0.0:8000 -t public
