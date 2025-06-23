FROM php:8.2-cli

WORKDIR /var/www

RUN apt-get update && apt-get install -y \
    libpq-dev \
    libsodium-dev \
    git \
    unzip \
    zip \
    curl \
    libzip-dev \
    netcat-openbsd \
    && docker-php-ext-install pdo pdo_mysql zip sodium

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY . .

COPY docker-entrypoint.sh /usr/local/bin/docker-entrypoint.sh
RUN chmod +x /usr/local/bin/docker-entrypoint.sh

RUN composer install --no-interaction --optimize-autoloader

EXPOSE 8000
ENTRYPOINT ["/usr/local/bin/docker-entrypoint.sh"]
