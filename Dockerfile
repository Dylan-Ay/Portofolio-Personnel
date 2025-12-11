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

# Configurer Apache pour forcer MPM prefork
RUN a2dismod mpm_event mpm_worker || true \
    && a2enmod mpm_prefork

# Copier le script d'entrée qui force MPM prefork au runtime
COPY docker-entrypoint.sh /usr/local/bin/
RUN chmod +x /usr/local/bin/docker-entrypoint.sh

# Remplacer l'entrypoint pour forcer prefork
ENTRYPOINT ["docker-entrypoint.sh"]

# Exposer le port Apache
EXPOSE 80