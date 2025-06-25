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
    libcurl4-openssl-dev \
    && rm -rf /var/lib/apt/lists/*

# ✅ Manually install Xdebug (PECL is unreliable)
ENV XDEBUG_VERSION=3.3.2
RUN curl -fsSL https://xdebug.org/files/xdebug-${XDEBUG_VERSION}.tgz -o xdebug.tgz \
    && mkdir -p /tmp/xdebug \
    && tar -xf xdebug.tgz -C /tmp/xdebug --strip-components=1 \
    && cd /tmp/xdebug \
    && phpize \
    && ./configure \
    && make -j$(nproc) \
    && make install \
    && docker-php-ext-enable xdebug \
    && rm -rf /tmp/xdebug xdebug.tgz

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

# Create needed directories for Symfony
RUN mkdir -p migrations var/cache var/log var/coverage var/junit
RUN chmod -R 775 var && chown -R www-data:www-data var

# Install PHP dependencies (skip auto-scripts for build speed)
RUN composer install --no-interaction --optimize-autoloader --no-scripts

# Make entrypoint executable
RUN chmod +x docker-entrypoint.sh

# Expose app port
EXPOSE 8000
