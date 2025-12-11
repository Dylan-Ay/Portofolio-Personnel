#!/bin/bash
# Désactiver tous les MPM sauf prefork
a2dismod mpm_event mpm_worker || true
a2enmod mpm_prefork

# Optionnel : éviter le warning ServerName
echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Lancer Apache en mode foreground
exec apache2-foreground