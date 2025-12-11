#!/bin/bash
# Désactiver tous les MPM sauf prefork
a2dismod mpm_event mpm_worker || true
a2enmod mpm_prefork

# Lancer Apache en mode foreground
exec apache2-foreground