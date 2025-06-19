FROM php:8.2-apache

# Install PHP extensions and system packages
RUN apt-get update && apt-get install -y \
    git unzip curl zip libpng-dev libonig-dev libxml2-dev \
    npm nodejs gnupg

# Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Active mod_rewrite pour Laravel
RUN a2enmod rewrite

# Crée un dossier Laravel
WORKDIR /var/www/html

# Cloner le projet (si tu veux builder depuis le Docker directement)
# RUN git clone https://github.com/ton-repo/laravel-projet.git .

# Copie tous les fichiers (si tu build localement)
COPY . .

# Dépendances PHP
RUN composer install

# Permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage

# PORT
EXPOSE 80
