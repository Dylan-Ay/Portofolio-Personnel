FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY . /var/www/html

# Installer les dépendances PHP (PHPMailer sera inclus ici)
RUN composer install --no-dev --optimize-autoloader

EXPOSE 80