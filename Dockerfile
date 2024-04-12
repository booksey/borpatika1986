# Use an official PHP runtime as a parent image
FROM php:7.4-apache

RUN a2enmod rewrite

# Set the working directory in the container
WORKDIR /var/www/html


# Install PHP extensions and other dependencies
RUN apt-get update && \
    apt-get install -y libpng-dev zip unzip && \
    docker-php-ext-install pdo pdo_mysql gd

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer


RUN useradd -ms /bin/sh -u 1001 booksey
USER booksey

# Copy your PHP application code into the container
COPY --chown=booksey:booksey . .
COPY .env.dist .env

RUN composer install

# Expose the port Apache listens on
EXPOSE 80

# Start Apache when the container runs
CMD ["apache2-foreground"]

