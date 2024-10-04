# Use PHP 8.2 as base image
FROM php:8.2-fpm

# Install common php extension dependencies
RUN apt-get update && apt-get install -y \
    libfreetype-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    zlib1g-dev \
    libzip-dev \
    unzip \
    nginx \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install zip

# Set the working directory
COPY . /var/www/html
WORKDIR /var/www/html

# Set permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage

# Install Composer
COPY --from=composer:2.6.5 /usr/bin/composer /usr/local/bin/composer

# Copy composer.json to workdir & install dependencies
COPY composer.json ./
RUN composer install

# Expose port 9000 for PHP-FPM
EXPOSE 9000

# Set the default command to run php-fpm
CMD ["php-fpm"]
