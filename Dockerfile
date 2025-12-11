# Stage 1: Base PHP Apache
FROM php:8.2-apache

# Installer les dépendances
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    && rm -rf /var/lib/apt/lists/*

# Copier Composer depuis l'image officielle
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Définir le dossier de travail
WORKDIR /var/www/html

# Copier les fichiers Composer et installer les dépendances
COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader

# Copier le reste de l'application
COPY . /var/www/html

# Désactiver tous les MPM et activer prefork
RUN a2dismod mpm_event mpm_worker mpm_prefork || true \
    && a2enmod mpm_prefork

# Supprimer tous les fichiers de configuration MPM activés pour éviter les conflits
RUN rm -f /etc/apache2/mods-enabled/mpm_*.load

# Afficher les modules Apache pour debug (optionnel)
RUN echo "=== APACHE MODULES ===" && apachectl -M && echo "=== APACHE CONFIG FILES ===" && find /etc/apache2 -type f -maxdepth 3

# Lancer Apache en foreground
CMD ["apache2-foreground"]