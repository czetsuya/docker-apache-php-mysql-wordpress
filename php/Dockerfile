FROM php:7.2-fpm-alpine3.11

LABEL maintainer="czetsuya@gmail.com"i

RUN apk update; \
    apk upgrade;
RUN docker-php-ext-install mysqli
