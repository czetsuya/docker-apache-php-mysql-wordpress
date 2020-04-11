# https://hub.docker.com/_/php

LABEL maintainer="czetsuya@gmail.com"

FROM php:7.2-zts-alpine3.10
RUN apk update; \
    apk upgrade;
RUN docker-php-ext-install mysqli