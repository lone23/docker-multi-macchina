FROM php:8.3-apache

RUN docker-php-ext-install mysqli pdo pdo_mysql

WORKDIR /var/www/html

COPY website/ .

RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html


