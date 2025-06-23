#!/bin/bash
set -e

echo "🚀 Starting Docker containers (clean build)..."
docker-compose down -v
docker-compose up -d --build

echo "⌛ Waiting for Symfony app container to be ready..."
sleep 10

echo "🔧 Fixing permissions (composer.lock, cache/logs)..."
docker exec -it symfony_app chown -R www-data:www-data /var/www
docker exec -it symfony_app chmod -R 775 /var/www

echo "📦 Running Composer install (with optimized autoloader)..."
docker exec -u www-data symfony_app composer install --no-interaction --optimize-autoloader

echo "✅ Creating database if not exists..."
docker exec -u www-data symfony_app php bin/console doctrine:database:create --if-not-exists

echo "🧬 Running migrations..."
docker exec -u www-data symfony_app php bin/console doctrine:migrations:migrate --no-interaction

echo "🎉 Setup complete! App should be available on http://localhost:8000"
