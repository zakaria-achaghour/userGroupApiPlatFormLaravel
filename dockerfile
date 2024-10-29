# Use the official PHP 8.2 image with FPM (FastCGI Process Manager)
FROM php:8.2-fpm

# Install system dependencies, including the MySQL client
RUN apt-get update && apt-get install -y \
    curl \
    zip \
    unzip \
    git \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    default-mysql-client \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Install Composer globally
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set the working directory inside the container
WORKDIR /var/www

# Copy the Laravel project into the container
COPY . .

# Set permissions for Laravel's storage and cache directories
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Expose port 9000 for PHP-FPM to communicate with NGINX
EXPOSE 9000

# Start PHP-FPM as the default command
CMD ["php-fpm"]
