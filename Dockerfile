FROM php:8.2-apache

# Installer git et unzip (nécessaires pour composer)
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    && rm -rf /var/lib/apt/lists/*

# Installer composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html/

# Copier les fichiers du projet
COPY . /var/www/html/

# Installer les dépendances PHP (dont PHPMailer) à partir de composer.json
RUN composer install --no-dev --optimize-autoloader

EXPOSE 80
