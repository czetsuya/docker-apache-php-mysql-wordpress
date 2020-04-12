FROM httpd:2.4.43-alpine

LABEL maintainer="czetsuya@gmail.com"

RUN apk update; \
    apk upgrade;

COPY local.apache.conf /usr/local/apache2/conf/local.apache.conf

RUN echo "Include /usr/local/apache2/conf/local.apache.conf" \
    >> /usr/local/apache2/conf/httpd.conf
