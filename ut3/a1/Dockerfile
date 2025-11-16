FROM debian:12

RUN apt update && apt install -y curl gnupg2 ca-certificates lsb-release debian-archive-keyring
RUN apt install -y build-essential imagemagick libpcre3 libpcre3-dev libmagickwand-dev
RUN curl -fsSL https://nginx.org/keys/nginx_signing.key | gpg --dearmor -o /usr/share/keyrings/nginx.gpg
RUN echo "deb [signed-by=/usr/share/keyrings/nginx.gpg] http://nginx.org/packages/debian $(lsb_release -sc) nginx" \
    > /etc/apt/sources.list.d/nginx.list
RUN apt update && apt install -y nginx

COPY images /usr/share/nginx/html/images
COPY index.html /usr/share/nginx/html/

RUN chmod -R 777 /usr/share/nginx/html

EXPOSE 80

CMD ["nginx", "-g", "daemon off;"]
