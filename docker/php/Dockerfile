FROM php:8.2-fpm

# System deps
RUN apt-get update && apt-get install -y \
    git zip unzip libzip-dev libonig-dev libicu-dev libpq-dev default-mysql-client \
    libpng-dev libjpeg62-turbo-dev libfreetype6-dev libxml2-dev

# PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip intl

# Install Composer
COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer

# Install node (optional for frontend build)
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
 && apt-get install -y nodejs

WORKDIR /var/www/html

# Create settings for laravel user
RUN useradd -G www-data,root -u 1000 -d /home/laravel laravel
RUN mkdir -p /var/www/html && chown -R laravel:laravel /var/www/html

USER laravel

# Expose for debugging
EXPOSE 9000
