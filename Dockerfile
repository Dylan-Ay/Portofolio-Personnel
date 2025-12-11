# Étape 1 : image PHP + Apache
FROM php:8.2-apache

# Installer les outils nécessaires
RUN apt-get update && apt-get install -y \
        git \
        unzip \
    && rm -rf /var/lib/apt/lists/*

# Copier Composer depuis l'image officielle
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Définir le répertoire de travail
WORKDIR /var/www/html

# Copier les fichiers Composer pour installer les dépendances
COPY composer.json composer.lock ./

# Installer les dépendances PHP
RUN composer install --no-dev --optimize-autoloader

# Copier tout le code source
COPY . /var/www/html

# Configurer Apache : forcer l'utilisation du MPM prefork
RUN a2dismod mpm_event mpm_worker mpm_prefork || true \
    && rm -f /etc/apache2/mods-enabled/mpm_*.load \
    && a2enmod mpm_prefork

# Afficher les modules et la config Apache pour debug
RUN echo "=== APACHE MODULES ===" \
    && apachectl -M \
    && echo "=== APACHE CONFIG FILES ===" \
    && find /etc/apache2 -type f -maxdepth 3