# # Use an official PHP image as a base
# FROM php:7.4-apache

# # Set the working directory to /var/www/html
# WORKDIR /var/www/html

# # Install dependencies
# RUN  libapache2-mod-php7.4

# # Copy the Apache configuration file
# COPY apache.conf /etc/apache2/sites-available/

# # Enable the Apache configuration file
# RUN a2ensite apache.conf

# # Copy the PHP application code
# COPY . /var/www/html/

# # Expose the Apache port
# EXPOSE 80

# # Start Apache when the container starts
# CMD ["apache2ctl", "-D", "FOREGROUND"]

# Use an official PHP image as a base
# Use the official PHP Apache image
# Use the official PHP Apache image
FROM php:7.4-apache

# Set the working directory
WORKDIR /var/www/html

# Copy the CodeIgniter project files to the container
COPY . /var/www/html

# Install dependencies and enable required PHP extensions
RUN apt-get update && \
    apt-get install -y \
        libpng-dev \
        libjpeg-dev \
        libonig-dev \
        libfreetype6-dev \
        libxml2-dev \
        zip \
        unzip \
        && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd mysqli \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd

# Enable mod_rewrite
RUN a2enmod rewrite

# Expose port 80
EXPOSE 80

# Start Apache server
CMD ["apache2-foreground"]