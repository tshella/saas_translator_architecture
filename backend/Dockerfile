FROM php:8.3-cli AS builder

ARG DATABASE_URL
ENV DATABASE_URL=${DATABASE_URL}

RUN apt-get update && apt-get install -y \
    git unzip zip curl libpq-dev libzip-dev libonig-dev libicu-dev libxml2-dev \
    libpng-dev libjpeg-dev libfreetype6-dev libxslt1-dev libssl-dev netcat-openbsd \
    autoconf pkg-config build-essential \
    && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
 && docker-php-ext-install -j$(nproc) pdo_mysql pdo_pgsql zip intl opcache bcmath sockets gd xsl

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app
COPY . .

RUN mkdir -p migrations

RUN composer install --no-interaction --optimize-autoloader --no-scripts
