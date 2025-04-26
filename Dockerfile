FROM php:8.3-cli

WORKDIR /app

RUN apt-get update && apt-get install -y \
    git unzip libicu-dev zlib1g-dev libzip-dev \
    && docker-php-ext-install intl zip

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY . /app

RUN composer install

CMD ["php", "-S", "0.0.0.0:8000", "-t", "public"]
