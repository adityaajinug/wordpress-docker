FROM php:8.2-apache

WORKDIR /var/www/html

# Install necessary extensions
RUN apt-get update && \
    apt-get install -y libpng-dev && \
    docker-php-ext-install pdo pdo_mysql gd mysqli && \
    docker-php-ext-enable mysqli

# Install Redis extension
RUN pecl install redis && docker-php-ext-enable redis

EXPOSE 80

CMD ["apache2-foreground"]
