#!/bin/bash

echo "🧬 Generating migration..."
docker exec -it symfony_app php bin/console make:migration

echo "🚀 Running migration..."
docker exec -it symfony_app php bin/console doctrine:migrations:migrate --no-interaction

echo "✅ Migration complete."
