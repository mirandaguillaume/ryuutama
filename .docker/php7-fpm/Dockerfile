
# See https://github.com/docker-library/php/blob/master/7.1/fpm/Dockerfile
FROM php:7.2-fpm-alpine

LABEL maintainer="Guillaume MIRANDA <guillaume11miranda@gmail.com>"

RUN echo http://dl-cdn.alpinelinux.org/alpine/edge/community/ >> /etc/apk/repositories
RUN apk add --update --no-cache openssl git unzip icu-dev libxml2-dev shadow lua

RUN echo 'alias sf="php app/console"' >> ~/.bashrc && \
    echo 'alias sf3="php bin/console"' >> ~/.bashrc

# Set timezone
ARG TIMEZONE
RUN ln -snf /usr/share/zoneinfo/${TIMEZONE} /etc/localtime && echo ${TIMEZONE} > /etc/timezone && \
    printf '[PHP]\ndate.timezone = "%s"\n', ${TIMEZONE} > /usr/local/etc/php/conf.d/tzone.ini

# Type docker-php-ext-install to see available extensions
RUN docker-php-ext-install intl pdo_mysql zip

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer && \
    composer --version

WORKDIR /var/www/app

RUN usermod -u 1000 www-data && \
    chown -R 1000:1000 /var/www/app
