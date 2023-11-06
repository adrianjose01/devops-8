FROM php:7.4-apache

# Habilita el módulo MySQLi
RUN docker-php-ext-install mysqli

COPY ./index.php /var/www/html/
