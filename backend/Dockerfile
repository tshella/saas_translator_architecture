FROM php:8.3-cli AS builder

ARG DATABASE_URL
ENV DATABASE_URL=${DATABASE_URL}

# Install system packages
RUN apt-get update && apt-get install -y \
    git unzip zip curl libpq-dev libzip-dev libsodium-dev libonig-dev libicu-dev libxml2-dev \
    libpng-dev libjpeg-dev libfreetype6-dev libxslt1-dev libssl-dev netcat-openbsd \
    autoconf pkg-config build-essential \
    && rm -rf /var/lib/apt/lists/*

# PHP extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) pdo_mysql pdo_pgsql zip intl opcache sodium bcmath sockets gd xsl \
    && docker-php-ext-enable sodium

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app
COPY . .

RUN mkdir -p migrations

# Set DATABASE_URL env var explicitly for composer install
RUN DATABASE_URL=${DATABASE_URL} composer install --no-interaction --optimize-autoloader
