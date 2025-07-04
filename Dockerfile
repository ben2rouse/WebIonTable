FROM php:8.2-apache

# Enable Apache mod_rewrite (optional, for pretty URLs)
RUN a2enmod rewrite

# Copy all project files to the Apache document root
COPY . /var/www/html/

# Set permissions (optional, for development)
RUN chown -R www-data:www-data /var/www/html

# Expose port 80
EXPOSE 80
