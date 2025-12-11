FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader

COPY . /var/www/html

# 🛠️ FIX Railway – Empêche le chargement multiple des MPM
RUN a2dismod mpm_event mpm_worker || true \
    && a2enmod mpm_prefork

EXPOSE 80