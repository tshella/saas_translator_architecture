# Stage 1: Builder
FROM php:8.3-cli AS builder

RUN apt-get update && apt-get install -y git unzip zip curl libpq-dev libzip-dev libsodium-dev libonig-dev libicu-dev libxml2-dev libpng-dev libjpeg-dev libfreetype6-dev libxslt1-dev libssl-dev netcat-openbsd autoconf pkg-config build-essential && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-configure gd --with-freetype --with-jpeg && docker-php-ext-install -j$(nproc) pdo_mysql pdo_pgsql zip intl opcache sodium bcmath sockets gd xsl && docker-php-ext-enable sodium

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app
COPY . .

RUN mkdir -p migrations
RUN composer install --no-interaction --optimize-autoloader

# Stage 2: Runtime
FROM php:8.3-cli

RUN apt-get update && apt-get install -y libargon2-1 libsodium23 libzip-dev libicu-dev libxml2 libpng-dev libjpeg62-turbo libfreetype6 unzip zip curl git libpq5 && rm -rf /var/lib/apt/lists/*

COPY --from=builder /usr/local/etc/php /usr/local/etc/php
COPY --from=builder /usr/local/lib/php/extensions /usr/local/lib/php/extensions
COPY --from=builder /usr/local/bin/php /usr/local/bin/php
COPY --from=builder /usr/bin/composer /usr/bin/composer

COPY --from=builder /app /var/www

WORKDIR /var/www

RUN mkdir -p var/cache var/log && chown -R www-data:www-data var
RUN chmod +x bin/console

EXPOSE 8000

CMD ["php", "-S", "0.0.0.0:8000", "-t", "public"]
