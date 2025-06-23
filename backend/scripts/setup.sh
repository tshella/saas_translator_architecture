#!/bin/bash
set -e

CONTAINER="symfony_app"
MIGRATE_SCRIPT="./backend/scripts/migrate.sh"

echo "🚀 Stopping and removing existing containers and volumes..."
docker-compose down -v

echo "🚀 Starting Docker containers with fresh build..."
docker-compose up -d --build

echo "⌛ Waiting for Symfony app container to be ready..."
sleep 15  # Adjust as needed for your environment

echo "🔧 Fixing permissions for /var/www directory inside container '$CONTAINER'..."
docker exec -it $CONTAINER chown -R www-data:www-data /var/www
docker exec -it $CONTAINER chmod -R 775 /var/www

echo "📦 Installing PHP dependencies with optimized autoloader inside container '$CONTAINER'..."
docker exec -u www-data $CONTAINER composer install --no-interaction --optimize-autoloader

echo "✅ Creating database if it does not exist inside container '$CONTAINER'..."
docker exec -u www-data $CONTAINER php bin/console doctrine:database:create --if-not-exists

echo "🧬 Running database migrations using migrate.sh script..."
bash $MIGRATE_SCRIPT

echo "🎉 Setup complete! Application should be accessible at http://localhost:8000"
