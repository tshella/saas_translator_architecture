#!/bin/bash
set -e

CONTAINER="symfony_app"
MIGRATE_SCRIPT="./backend/scripts/migrate.sh"

echo "🚀 Stopping and removing existing containers and volumes..."
docker-compose down -v

echo "🚀 Starting Docker containers with fresh build..."
docker-compose up -d --build

echo "⌛ Waiting for Symfony app container to be ready..."
sleep 15

echo "🔧 Fixing permissions inside container '$CONTAINER'..."
docker exec -it $CONTAINER chown -R www-data:www-data /var/www
docker exec -it $CONTAINER chmod -R 775 /var/www

echo "📦 Installing Composer dependencies..."
docker exec -u www-data $CONTAINER composer install --no-interaction --optimize-autoloader

echo "✅ Creating database..."
docker exec -u www-data $CONTAINER php bin/console doctrine:database:create --if-not-exists

echo "🧬 Running migrations..."
bash $MIGRATE_SCRIPT

echo ""
echo "=============================="
echo "🧪 Running PHPUnit Unit Tests"
echo "=============================="
docker exec -u www-data $CONTAINER ./vendor/bin/phpunit --testdox --colors=always || true

echo ""
echo "============================"
echo "  T R A N S L A T E ! 🌍 "
echo "============================"
echo ""

echo "🎉 Setup complete! Visit http://localhost:8000"
