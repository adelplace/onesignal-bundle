FROM php:5.6-cli

RUN apt-get update \
    && apt-get install -y zlib1g-dev wget git \
    && docker-php-ext-install zip

RUN wget https://getcomposer.org/composer.phar \
    && chmod +x composer.phar \
    && mv composer.phar /usr/bin/composer
