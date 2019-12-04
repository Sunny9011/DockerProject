FROM alpine:3.6

RUN apk --no-cache add \
        apache2 \
        php5-apache2 \
        curl \
        php5-json \
        php5-phar \
        php5-openssl \
        php5-curl \
        php5-mcrypt \
        php5-pdo_mysql \
        php5-xml \
        php5-dom \
        php5-iconv \
    && mkdir /run/apache2

EXPOSE 8080

COPY httpd.conf /app/httpd.conf
COPY data /app/data

CMD [ "/usr/sbin/httpd", "-D", "FOREGROUND", "-f", "/app/httpd.conf" ]
