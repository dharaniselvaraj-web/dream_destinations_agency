FROM php:8.2-apache

# Copy project files to Apache server
COPY . /var/www/html/

# Enable Apache mod_rewrite (optional but useful)
RUN a2enmod rewrite

# Set correct permissions
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
