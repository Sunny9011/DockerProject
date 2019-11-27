FROM alpine

RUN \
 apk add --no-cache \
    apache2 \
  apache2-proxy \
  apache2-ssl \
  apache2-utils \
  curl \
  git \
  logrotate \
  nano \
  openssl \
  php5 \
  php5-apache2 \
  php5-cli \
  php5-curl \
  php5-fpm

COPY root/ /

RUN mkdir /run/apache2


RUN \
 cp /defaults/httpd.conf /etc/apache2/httpd.conf && \
 cp /defaults/php-fpm.conf /etc/php5/php-fpm.conf

CMD ["-D","FOREGROUND"]
ENTRYPOINT ["/usr/sbin/httpd"]

EXPOSE 80