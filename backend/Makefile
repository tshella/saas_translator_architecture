# Makefile for Symfony Backend Project

.PHONY: jwt-keys migrate db-seed install run

# 🔐 Generate JWT key pair for authentication
jwt-keys:
	@mkdir -p config/jwt
	@openssl genrsa -out config/jwt/private.pem 4096
	@openssl rsa -pubout -in config/jwt/private.pem -out config/jwt/public.pem
	@echo "🔐 JWT keypair generated in config/jwt/"

# 🧱 Run Doctrine migrations (creates DB if needed)
migrate:
	@php bin/console doctrine:database:create --if-not-exists
	@php bin/console doctrine:migrations:migrate --no-interaction

# 🌱 Seed the database with sample or required data
db-seed:
	@php bin/console app:seed || echo "No seeder command found."

# 📦 Install PHP dependencies with optimized autoloader
install:
	@composer install --no-interaction --optimize-autoloader

# 🚀 Run Symfony's built-in local web server
run:
	@php -S 0.0.0.0:8000 -t public
