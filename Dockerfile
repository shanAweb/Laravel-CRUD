# Use PHP 8.2
FROM php:8.2-fpm

# Install system dependencies
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

# Copy Nginx configuration file
COPY ./nginx.conf /etc/nginx/nginx.conf

# Set the working directory to the Laravel app
WORKDIR /var/www/html

# Copy all files into the working directory
COPY . /var/www/html

# Ensure proper permissions for Laravel storage and cache
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage \
    && chmod -R 775 /var/www/html/bootstrap/cache

# Install composer
COPY --from=composer:2.6.5 /usr/bin/composer /usr/local/bin/composer

# Install PHP dependencies via composer
RUN composer install

# Expose port 80 for Nginx
EXPOSE 80

# Start PHP-FPM and Nginx
CMD service nginx start && php-fpm
