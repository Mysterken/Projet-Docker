FROM php:7.2-apache
COPY php/src/ /var/www/html/
VOLUME /var/www/html/