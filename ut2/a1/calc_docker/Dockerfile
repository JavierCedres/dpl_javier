FROM debian:stable

MAINTAINER javier06 1.0

RUN apt update && apt install -y nginx php8.4-fpm

COPY calculadora.php /var/www/html/
COPY styles.css /var/www/html/
COPY calculadora.png /var/www/html/
COPY default.conf /etc/nginx/sites-available/default

RUN chmod -R 777 /var/www/html

EXPOSE 80

CMD service php8.4-fpm start && nginx -g "daemon off;"
