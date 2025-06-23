# Stage 1: Builder with official PHP image (Debian-based, slim)
FROM php:8.3-cli-bullseye AS builder

# Install system dependencies needed for building PHP extensions
RUN apt-get update && apt-get install -y --no-install-recommends \
    git unzip zip curl libpq-dev libzip-dev libsodium-dev libonig-dev libicu-dev libxml2-dev \
    libpng-dev libjpeg-dev libfreetype6-dev libxslt1-dev libssl-dev netcat \
    autoconf pkg-config build-essential \
    && rm -rf /var/lib/apt/lists/*

# Configure and install PHP extensions (gd with freetype and jpeg)
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) pdo_mysql pdo_pgsql zip intl opcache sodium bcmath sockets gd xsl \
    && docker-php-ext-enable sodium

# Install Composer globally
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory and copy project files
WORKDIR /app
COPY . .

# Install PHP dependencies with optimized autoloader
RUN composer install --no-interaction --optimize-autoloader

# Stage 2: Runtime stage with lightweight Debian slim
FROM debian:bullseye-slim

# Install only runtime dependencies for PHP and your extensions
RUN apt-get update && apt-get install -y --no-install-recommends \
    php8.3-cli php8.3-pgsql php8.3-mbstring php8.3-opcache php8.3-bcmath php8.3-sockets php8.3-gd php8.3-intl php8.3-zip php8.3-xsl \
    libsodium23 git unzip zip curl libpq5 oniguruma1 freetype2 libjpeg62-turbo libpng16-16 libxml2 openssl netcat \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Copy PHP config, extensions, PHP binary, and Composer from builder
COPY --from=builder /usr/local/etc/php /usr/local/etc/php
COPY --from=builder /usr/local/lib/php/extensions /usr/local/lib/php/extensions
COPY --from=builder /usr/local/bin/php /usr/local/bin/php
COPY --from=builder /usr/bin/composer /usr/bin/composer

# Copy the fully prepared app directory from builder
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
