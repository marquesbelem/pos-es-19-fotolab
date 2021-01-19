FROM php:7.4-fpm-alpine

ADD ./ /var/www

# Copy composer.lock and composer.json
COPY composer.lock composer.json /var/www/
COPY .env.docker.example /var/www/.env

# Set working directory
WORKDIR /var/www

# Install extensions
RUN apk add --no-cache libzip-dev composer
RUN docker-php-ext-configure zip
RUN docker-php-ext-install pdo zip pdo_mysql exif pcntl

RUN composer install
RUN php artisan key:generate
RUN php artisan optimize