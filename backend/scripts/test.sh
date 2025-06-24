#!/bin/bash
set -e

CONTAINER="symfony_app"

echo "🧪 Running unit tests inside container '$CONTAINER'..."
docker exec -u www-data $CONTAINER ./vendor/bin/phpunit --testdox

echo "✅ All tests passed!"
