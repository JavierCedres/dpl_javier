FROM debian:stable

MAINTAINER javier06 1.0

RUN apt update 
RUN apt install -y nginx
RUN apt install -y php8.4-fpm

COPY calculadora.php /var/www/html/
COPY styles.css /var/www/html/
COPY calculadora.png /var/www/html/
COPY default.conf /etc/nginx/sites-available/default

RUN chmod -R 777 /var/www/html/calculadora.php

EXPOSE 80

CMD service php8.4-fpm start && nginx -g "daemon off;"
