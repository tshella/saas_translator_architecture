# Use official PHP CLI image as base
FROM php:8.2-cli

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    curl \
    libpq-dev \
    libzip-dev \
    libsodium-dev \
    libonig-dev \
    libicu-dev \
    libxml2-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libxslt1-dev \
    libssl-dev \
    netcat-openbsd \
    && docker-php-ext-install pdo_mysql zip intl opcache sodium bcmath sockets \
    && docker-php-ext-enable sodium \
    && rm -rf /var/lib/apt/lists/*

# Install Composer globally
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory inside container
WORKDIR /var/www

# Copy all project files including bin/console
COPY . .

# Fix permissions for var/cache and var/log (Symfony expects writable)
RUN mkdir -p var/cache var/log && chown -R www-data:www-data var

# Make bin/console executable
RUN chmod +x bin/console

# Install PHP dependencies with optimized autoloader, no interaction
RUN composer install --no-interaction --optimize-autoloader

# Expose port 8000 for Symfony built-in server
EXPOSE 8000

# Default command to run Symfony built-in PHP server
CMD ["php", "-S", "0.0.0.0:8000", "-t", "public"]
