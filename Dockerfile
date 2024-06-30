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
FROM php:7.4-apache

RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable pdo_mysql

# Set the working directory to /var/www/html
WORKDIR /var/www/html


# Copy the Apache configuration file
COPY apache.conf /etc/apache2/sites-available/

# Enable the Apache configuration file
RUN a2ensite apache.conf
# Copy the PHP application code
COPY . /var/www/html/

# Expose the Apache port
EXPOSE 80

# Start Apache when the container starts
CMD ["apache2ctl", "-D", "FOREGROUND"]