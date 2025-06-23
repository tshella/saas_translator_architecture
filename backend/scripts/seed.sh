#!/bin/bash

echo "🌱 Seeding database..."
docker exec -it symfony_app php bin/console app:seed

echo "✅ Seed complete."
