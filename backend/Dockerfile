FROM php:8.3-cli AS builder

# Pass database URL as build-time argument and environment variable
ARG DATABASE_URL
ENV DATABASE_URL=${DATABASE_URL}

# Install required system libraries
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    curl \
    libpq-dev \
    libzip-dev \
    libonig-dev \
    libicu-dev \
    libxml2-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libxslt1-dev \
    libssl-dev \
    libsodium-dev \
    netcat-openbsd \
    autoconf \
    pkg-config \
    build-essential \
    && rm -rf /var/lib/apt/lists/*

# Configure and install PHP extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
 && docker-php-ext-install -j$(nproc) \
    pdo_mysql \
    pdo_pgsql \
    zip \
    intl \
    opcache \
    bcmath \
    sockets \
    gd \
    xsl \
    sodium

# Add Composer from official Composer image
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy project files
COPY . .

# Create needed directories
RUN mkdir -p migrations

# Install PHP dependencies (skip composer scripts for now)
RUN composer install --no-interaction --optimize-autoloader --no-scripts

# Make entrypoint executable
RUN chmod +x docker-entrypoint.sh

EXPOSE 8000
