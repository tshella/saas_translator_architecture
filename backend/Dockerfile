# Stage 1: Builder with official PHP image to build extensions, install composer and dependencies
FROM php:8.3-cli AS builder

# Accept DATABASE_URL as build argument and set as environment variable
ARG DATABASE_URL
ENV DATABASE_URL=${DATABASE_URL}

# Install system dependencies needed for building extensions and your app
RUN apt-get update && apt-get install -y \
    git unzip zip curl libpq-dev libzip-dev libsodium-dev libonig-dev libicu-dev libxml2-dev \
    libpng-dev libjpeg-dev libfreetype6-dev libxslt1-dev libssl-dev pkg-config build-essential autoconf \
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

# Stage 2: Runtime stage with official PHP image for maximum compatibility
FROM php:8.3-cli

# Install runtime dependencies (including libargon2 and libsodium)
RUN apt-get update && apt-get install -y \
    libargon2-1 libsodium23 libzip-dev libicu-dev libxml2 libpng16-16 libjpeg62-turbo freetype2 \
    unzip zip curl git libpq5 \
    && rm -rf /var/lib/apt/lists/*

# Copy PHP config, extensions, PHP binary, and composer from builder
COPY --from=builder /usr/local/etc/php /usr/local/etc/php
COPY --from=builder /usr/local/lib/php/extensions /usr/local/lib/php/extensions
COPY --from=builder /usr/local/bin/php /usr/local/bin/php
COPY --from=builder /usr/bin/composer /usr/bin/composer

# Copy the fully prepared app directory from builder (including migrations)
COPY --from=builder /app /var/www

WORKDIR /var/www

# Ensure var/cache and var/log directories exist and are writable by www-data (user 33)
RUN mkdir -p var/cache var/log && chown -R www-data:www-data var

# Make Symfony console executable
RUN chmod +x bin/console

# Expose port for Symfony dev server
EXPOSE 8000

# Run Symfony built-in PHP server as www-data user for security
USER www-data

CMD ["php", "-S", "0.0.0.0:8000", "-t", "public"]
