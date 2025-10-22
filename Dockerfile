FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copier uniquement composer files d'abord pour installer les dépendances
COPY composer.json composer.lock /var/www/html/

RUN composer install --no-dev --optimize-autoloader

# Puis copier le reste du code
COPY . /var/www/html

EXPOSE 80