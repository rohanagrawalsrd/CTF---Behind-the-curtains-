FROM php:8.1-apache

RUN docker-php-ext-install mysqli

RUN mkdir -p /var/hidden \
 && echo "FLAG{pure_lfi_medium_level}" > /var/hidden/real_flag.txt

RUN a2enmod rewrite

WORKDIR /var/www/html
