#!/bin/bash

set -e

echo "🏁 Running entrypoint script..."

# Wait for DB to be ready (MySQL default port)
echo "⏳ Waiting for database..."
until nc -z db 3306; do
  echo "⏳ Waiting for db to be available..."
  sleep 2
done

# Move to Symfony project directory
cd /var/www

# Set permissions for var/
mkdir -p var/cache var/log
chown -R www-data:www-data var

# Install PHP dependencies
echo "📦 Installing dependencies..."
composer install --no-interaction --optimize-autoloader || true

# Run Doctrine commands
echo "🧬 Creating and migrating database..."
php bin/console doctrine:database:create --if-not-exists || true
php bin/console doctrine:migrations:migrate --no-interaction || true

# Optional: seed data
# echo "🌱 Seeding database..."
# php bin/console app:seed

# Start Symfony app
echo "🚀 Starting Symfony app..."
exec php -S 0.0.0.0:8000 -t public
