# Stage 1: Build PHP app with dependencies
FROM php:8.2-cli AS symfony

# Install system dependencies
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
    && docker-php-ext-install \
        pdo_mysql \
        zip \
        intl \
        opcache \
        sodium \
        bcmath \
        sockets

# Install Composer globally
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Create working directory
WORKDIR /var/www

# Copy project files
COPY . .

# Set proper permissions for cache/logs
RUN mkdir -p var/cache var/log && chown -R www-data:www-data var

# Install PHP dependencies
RUN composer install --no-interaction --optimize-autoloader

# Ensure bin/console is executable
RUN chmod +x bin/console

# Default command
CMD ["php", "-S", "0.0.0.0:8000", "-t", "public"]
