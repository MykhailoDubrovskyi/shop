FROM php:8.2-fpm-alpine

WORKDIR /var/www/laravel

RUN docker-php-ext-install mysqli pdo pdo_mysql

RUN apk add --no-cache libpng libjpeg-turbo libwebp freetype

CMD ["php-fpm"]