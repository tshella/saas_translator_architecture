# Stage 1: Builder with official PHP image to build extensions, install composer and dependencies
FROM php:8.3-cli AS builder

# Accept DATABASE_URL as build argument and set as environment variable
ARG DATABASE_URL
ENV DATABASE_URL=${DATABASE_URL}

# Install system dependencies needed for building extensions and your app
RUN apt-get update && apt-get install -y \
    git unzip zip curl libpq-dev libzip-dev libsodium-dev libonig-dev libicu-dev libxml2-dev \
    libpng-dev libjpeg-dev libfreetype6-dev libxslt1-dev libssl-dev netcat-openbsd \
    autoconf pkg-config build-essential \
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
RUN
