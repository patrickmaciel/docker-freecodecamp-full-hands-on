FROM php:7.4-fpm-alpine

RUN apk update --no-cache \
&& apk add \
icu-dev \
oniguruma-dev \
tzdata

RUN docker-php-ext-install intl pcntl mbstring pdo_mysql

RUN rm -rf /var/cache/apk/*

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer

RUN mkdir -p /var/www/html
COPY . /var/www/html

EXPOSE 8000

CMD php -S 0.0.0.0:8000 -t /var/www/html/
