FROM php:8.2-fpm-alpine

RUN apk update && apk upgrade --no-cache

RUN apk add --no-cache freetype-dev libjpeg-turbo-dev libpng-dev imagemagick-dev libwebp-dev

RUN docker-php-ext-configure opcache --enable-opcache \
    && docker-php-ext-install opcache

RUN docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp
RUN docker-php-ext-install -j$(nproc) gd

RUN apk add --no-cache icu-dev \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl \
    && docker-php-ext-enable intl

RUN apk add --no-cache ${PHPIZE_DEPS} imagemagick imagemagick-dev
RUN pecl install -o -f imagick \
    &&  docker-php-ext-enable imagick

RUN docker-php-ext-install mysqli pdo pdo_mysql

RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"
RUN echo 'memory_limit = 512M' >> /usr/local/etc/php/conf.d/docker-php-memlimit.ini;
RUN echo 'upload_max_filesize = 128M' >> /usr/local/etc/php/conf.d/docker-php-upload-max-filesize.ini;
RUN echo 'post_max_size = 128M' >> /usr/local/etc/php/conf.d/post-max-size.ini;


RUN apk add --no-cache shadow

RUN addgroup www-data ;exit 0
RUN adduser www-data --system --ingroup www-data ;exit 0
RUN groupmod -g 7777 www-data
RUN usermod -u 7777 www-data