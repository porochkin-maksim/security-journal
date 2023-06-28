FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
      nano \
      apt-utils \
      libpq-dev \
      libpng-dev \
      libzip-dev \
      zip unzip \
      git && \
      docker-php-ext-install gd && \
      docker-php-ext-install pdo_mysql && \
      docker-php-ext-install bcmath && \
      docker-php-ext-install gd && \
      docker-php-ext-install zip && \
      apt-get clean && \
      rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd

# Install composer
ENV COMPOSER_ALLOW_SUPERUSER=1
RUN curl -sS https://getcomposer.org/installer | php -- \
    --filename=composer \
    --install-dir=/usr/local/bin

RUN mkdir -p /var/www/tmp
RUN mkdir -p /var/www/storage/logs
RUN mkdir -p /var/www/storage/logs/mysql & \
    mkdir -p /var/www/storage/logs/nginx & \
    mkdir -p /var/www/storage/logs/php

# tzdata for timzone
RUN apt-get update -y
RUN apt-get install -y tzdata

# timezone env with default
ENV TZ=europe/moscow

USER 1000

WORKDIR /var/www
