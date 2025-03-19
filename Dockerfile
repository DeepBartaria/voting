# Use official PHP image with Apache
FROM php:8.2-apache

# Enable necessary PHP extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy project files to the container
COPY . /var/www/html/

# Set permissions for Apache
RUN chown -R www-data:www-data /var/www/html

# Expose port 80 for web traffic
EXPOSE 80
