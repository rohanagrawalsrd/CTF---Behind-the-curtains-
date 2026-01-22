FROM php:7.4-apache

# Copy website files
COPY ./site/ /var/www/html/

# Set correct permissions
RUN chown -R www-data:www-data /var/www/html

# Create flag outside web root
RUN mkdir /flag \
 && echo "lnmhacks{srd_is_the_future}" > /flag/flag.txt \
 && chmod 444 /flag/flag.txt

EXPOSE 80
