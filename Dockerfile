FROM php:8.2-apache

# Installer git et unzip (nécessaires pour composer)
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    && rm -rf /var/lib/apt/lists/*

# Installer composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copier ton projet
COPY . /var/www/html/

WORKDIR /var/www/html/

# Installer PHPMailer via composer
RUN composer require phpmailer/phpmailer

EXPOSE 80
