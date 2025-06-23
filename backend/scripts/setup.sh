#!/bin/bash

echo "🚀 Starting Docker containers..."
docker-compose up -d --build

echo "⌛ Waiting for containers to be ready..."
sleep 10

echo "✅ Containers up. Creating database if not exists..."
docker exec -it symfony_app php bin/console doctrine:database:create --if-not-exists

echo "🧬 Running migrations..."
docker exec -it symfony_app php bin/console doctrine:migrations:migrate --no-interaction

echo "🎉 Setup complete!"
