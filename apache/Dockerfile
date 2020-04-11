FROM httpd:2.4.43-alpine

LABEL maintainer="czetsuya@gmail.com"

RUN apk update; \
    apk upgrade;

COPY ./httpd.conf /usr/local/apache2/conf/httpd.conf

