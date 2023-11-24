# Utilisez l'image officielle WordPress
FROM wordpress:latest

# Exposez le port sur lequel WordPress s'exécute par défaut
EXPOSE 80

# Optionnel : définissez des variables d'environnement pour la configuration de WordPress
ENV WORDPRESS_DB_HOST=localhost \
    WORDPRESS_DB_NAME=mywordpress \
    WORDPRESS_DB_USER=admin \
    WORDPRESS_DB_PASSWORD=password

# Optionnel : copiez vos fichiers personnalisés, thèmes, plugins, etc.
# COPY ./wp-content /var/www/html/wp-content
