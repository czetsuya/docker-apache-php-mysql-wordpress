FROM php:7.2-zts-alpine3.10

LABEL maintainer="czetsuya@gmail.com"

RUN apk update; \
    apk upgrade;
RUN docker-php-ext-install mysqli
