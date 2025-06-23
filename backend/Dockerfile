# Use PHP CLI image with Composer
FROM php:8.2-cli

# Set working directory
WORKDIR /var/www

# Install system dependencies
RUN apt-get update && apt-get install -y \
    libpq-dev \
    git \
    unzip \
    zip \
    curl \
    libzip-dev \
    netcat-openbsd \
    && docker-php-ext-install pdo pdo_mysql zip

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy application files
COPY . .

# Copy and set permissions for entrypoint script
COPY docker-entrypoint.sh /usr/local/bin/docker-entrypoint.sh
RUN chmod +x /usr/local/bin/docker-entrypoint.sh

# Install PHP dependencies
RUN composer install --no-interaction --optimize-autoloader

# Expose port for Symfony built-in server
EXPOSE 8000

# Entrypoint script
ENTRYPOINT ["/usr/local/bin/docker-entrypoint.sh"]
