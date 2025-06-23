# Stage 2: Runtime stage with official PHP image for maximum compatibility
FROM php:8.3-cli

# Install runtime dependencies (including libargon2 and libsodium)
RUN apt-get update && apt-get install -y \
    libargon2-1 libsodium23 libzip-dev libicu-dev libxml2 libpng-dev libjpeg62-turbo libfreetype6 \
    unzip zip curl git libpq5 \
    && rm -rf /var/lib/apt/lists/*

# Copy PHP config, extensions, PHP binary, and composer from builder
COPY --from=builder /usr/local/etc/php /usr/local/etc/php
COPY --from=builder /usr/local/lib/php/extensions /usr/local/lib/php/extensions
COPY --from=builder /usr/local/bin/php /usr/local/bin/php
COPY --from=builder /usr/bin/composer /usr/bin/composer

# Copy the fully prepared app directory from builder (including migrations)
COPY --from=builder /app /var/www

WORKDIR /var/www

# Ensure var/cache and var/log directories exist and are writable by www-data (user 33)
RUN mkdir -p var/cache var/log && chown -R www-data:www-data var

# Make Symfony console executable
RUN chmod +x bin/console

# Expose port for Symfony dev server
EXPOSE 8000

# Run Symfony built-in PHP server as www-data user for security
USER www-data

CMD ["php", "-S", "0.0.0.0:8000", "-t", "public"]
