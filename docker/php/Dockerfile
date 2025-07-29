# Dockerfile
FROM php:8.3-fpm

# Installe les dépendances système
RUN apt-get update && apt-get install -y \
    git unzip libicu-dev libpq-dev libzip-dev zip libpng-dev \
    && docker-php-ext-install intl pdo pdo_mysql opcache zip

RUN curl -sS https://get.symfony.com/cli/installer | bash \
    && mv /root/.symfony*/bin/symfony /usr/local/bin/symfony

# Installe Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Configuration PHP (optimisation dev)
COPY docker/php/php.ini /usr/local/etc/php/conf.d/custom.ini

WORKDIR /var/www/html
