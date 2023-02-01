# Dockerfile PHP 7.4
FROM php:7.4-fpm-alpine

WORKDIR /projeto

# Install apk
RUN apk update --no-cache \
&& apk add \
icu-dev \
oniguruma-dev \
tzdata \
zlib-dev \
libpng-dev \
vim

# Install extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd intl

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer

# Clear cache
RUN rm -rf /var/cache/apk/*

ARG PORT=8000
ENV PORT $PORT
EXPOSE $PORT
