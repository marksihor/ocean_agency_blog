# Use PHP 8.0 with FPM
FROM php:8.0-fpm

# Set working directory
WORKDIR /var/www

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    git curl unzip libpq-dev libzip-dev zip \
    && docker-php-ext-install pdo pdo_pgsql zip

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer

# Copy Laravel code into container
COPY . .

# Install Laravel dependencies
# RUN composer install

# Expose port for Laravel dev server
EXPOSE 8000
