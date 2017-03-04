FROM php:7.1.2-apache

RUN apt-get update && apt-get install -y \ 
      && docker-php-ext-install mysqli

RUN a2enmod rewrite expires
