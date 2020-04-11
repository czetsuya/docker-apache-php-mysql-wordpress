#https://hub.docker.com/_/httpd

LABEL maintainer="czetsuya@gmail.com"

FROM httpd:2.4.43-alpine
RUN apk update; \
    apk upgrade;

COPY ./httpd.conf /usr/local/apache2/conf/httpd.conf

