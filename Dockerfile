FROM php:8.1-apache
COPY src/ /var/www/html/
RUN mkdir -p /var/hidden && echo "FLAG{pure_lfi_medium_level}" > /var/hidden/real_flag.txt
EXPOSE 80
