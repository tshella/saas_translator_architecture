# Stage 1: Symfony PHP 8.2 CLI setup
FROM php:8.2-cli AS symfony

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
    netcat \
    && docker-php-ext-install \
        pdo_mysql \
        zip \
        intl \
        opcache \
        sodium \
        bcmath \
        sockets

# Install Composer globally from composer image
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy Symfony project files
COPY . .

# Set correct permissions
RUN mkdir -p var/cache var/log && chown -R www-data:www-data var

# Run Composer install (again for final image)
RUN composer install --no-interaction --optimize-autoloader

# Make Symfony CLI script executable
RUN chmod +x bin/console

# Entry point
ENTRYPOINT ["./docker-entrypoint.sh"]
