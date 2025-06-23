#!/bin/bash
set -e

echo "🚀 Stopping and removing existing containers and volumes..."
docker-compose down -v

echo "🚀 Starting Docker containers with fresh build..."
docker-compose up -d --build

echo "⌛ Waiting for Symfony app container to be ready..."
sleep 15  # Adjust based on container startup time

echo "🔧 Fixing permissions for /var/www directory..."
docker exec -it symfony_app chown -R www-data:www-data /var/www
docker exec -it symfony_app chmod -R 775 /var/www

echo "📦 Installing PHP dependencies with optimized autoloader..."
docker exec -u www-data symfony_app composer install --no-interaction --optimize-autoloader

echo "✅ Creating database if it does not exist..."
docker exec -u www-data symfony_app php bin/console doctrine:database:create --if-not-exists

echo "🧬 Running database migrations..."
docker exec -u www-data symfony_app php bin/console doctrine:migrations:migrate --no-interaction

echo "🎉 Setup complete! Application should be accessible at http://localhost:8000"
