FROM php:8.2-fpm

# Installer les packages nécessaires pour MySQL
RUN apt-get update && apt-get install -y \
    default-mysql-client \
    libonig-dev \
    libxml2-dev \
    && docker-php-ext-install mysqli pdo pdo_mysql \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Créer le dossier de l'application
WORKDIR /var/www/html
COPY src/ .

EXPOSE 9000
CMD ["php-fpm"]
