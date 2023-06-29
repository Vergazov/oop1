FROM composer

COPY /composer.json /app/composer.json

RUN composer dump-autoload

