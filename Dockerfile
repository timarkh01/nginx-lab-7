FROM php:8.2-fpm

RUN apt-get update && apt-get install -y git unzip curl

# Устанавливаем Composer
RUN curl -sS https://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer

WORKDIR /var/www/html

COPY composer.json /var/www/html/
RUN composer install

COPY ./www /var/www/html/

CMD ["php-fpm"]