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

# 🔍 Debug : trouver qui charge un 2e MPM
RUN grep -R "LoadModule" -n /var/www/html || true

RUN a2dismod mpm_event mpm_worker || true \
    && a2enmod mpm_prefork

RUN echo "=== APACHE MODULES ===" \
&& apachectl -M \
&& echo "=== APACHE CONFIG FILES ===" \
&& find /etc/apache2 -type f -maxdepth 3

EXPOSE 80