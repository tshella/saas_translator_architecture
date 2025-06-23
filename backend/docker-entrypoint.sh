#!/bin/bash
set -e

echo "🏁 Running entrypoint script..."

echo "⏳ Waiting for database..."
until nc -z db 3306; do
  echo "⏳ Waiting for db to be available..."
  sleep 2
done

cd /var/www

echo "📁 Ensuring migrations directory exists..."
mkdir -p migrations
chown -R www-data:www-data migrations

mkdir -p var/cache var/log
chown -R www-data:www-data var

echo "📦 Installing dependencies..."
composer install --no-interaction --optimize-autoloader || true

echo "🧬 Creating database if not exists..."
php bin/console doctrine:database:create --if-not-exists || true

echo "🧬 Running migrations..."
php bin/console doctrine:migrations:migrate --no-interaction --allow-no-migration || true

echo "🚀 Starting Symfony app..."
exec php -S 0.0.0.0:8000 -t public
