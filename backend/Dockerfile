# Stage 1: Builder with official PHP image to build extensions, install composer and dependencies
FROM php:8.3-cli AS builder

# Accept DATABASE_URL as build argument and set as environment variable
ARG DATABASE_URL
ENV DATABASE_URL=${DATABASE_URL}

# Install system dependencies needed for building extensions and your app
RUN apt-get update && apt-get install -y \
    git unzip zip curl libpq-dev libzip-dev libsodium-dev libonig-dev libicu-dev libxml2-dev \
    libpng-dev libjpeg-dev libfreetype6-dev libxslt1-dev libssl-dev netcat-openbsd \
    autoconf pkg-config build-essential \
    && rm -rf /var/lib/apt/lists/*

# Configure and install PHP extensions (gd with freetype and jpeg) including pdo_mysql and pdo_pgsql
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) pdo_mysql pdo_pgsql zip intl opcache sodium bcmath sockets gd xsl \
    && docker-php-ext-enable sodium

# Install Composer globally
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory and copy project files including migrations folder
WORKDIR /app
COPY . .

# Make sure migrations directory exists (fixes doctrine error)
RUN mkdir -p migrations

# Install PHP dependencies with optimized autoloader, now with DATABASE_URL available for cache clear
RUN composer install --no-interaction --optimize-autoloader

# Stage 2: Runtime stage with Fedora base image
FROM fedora:39

# Install runtime dependencies only (no dev packages)
RUN dnf -y install \
    php-cli php-pgsql php-mbstring php-opcache php-bcmath php-sockets php-gd php-intl php-zip php-xsl \
    libsodium git unzip zip curl libpq oniguruma freetype libjpeg-turbo libpng libxml2 openssl nmap-ncat \
    && dnf clean all

# Copy PHP config, extensions, PHP binary, and composer from builder
COPY --from=builder /usr/local/etc/php /usr/local/etc/php
COPY --from=builder /usr/local/lib/php/extensions /usr/local/lib/php/extensions
COPY --from=builder /usr/local/bin/php /usr/local/bin/php
COPY --from=builder /usr/bin/composer /usr/bin/composer

# Copy the fully prepared app directory from builder (including migrations)
COPY --from=builder /app /var/www

WORKDIR /var/www

# Ensure var/cache and var/log directories exist and are writable by user ID 1000
RUN mkdir -p var/cache var/log && chown -R 1000:1000 var

# Make Symfony console executable
RUN chmod +x bin/console

# Expose port for Symfony dev server
EXPOSE 8000

# Default command to start Symfony built-in PHP server (for development)
CMD ["php", "-S", "0.0.0.0:8000", "-t", "public"]
