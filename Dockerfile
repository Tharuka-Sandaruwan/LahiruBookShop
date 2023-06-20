# Use the official PHP image as the base image
FROM php:7.4-apache

# Set the working directory in the container
WORKDIR /var/www/html

# Copy the project files to the container
COPY . /var/www/html

# Install PHP extensions and other dependencies
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libpq-dev \
    && docker-php-ext-install -j$(nproc) gd mysqli pdo_mysql

# Enable Apache rewrite module
RUN a2enmod rewrite

# Set ServerName directive
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Expose port 80 for Apache web server
EXPOSE 80

# Start the Apache web server
CMD ["apache2-foreground"]
