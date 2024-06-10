# syntax=docker/dockerfile:1
# escape=\

FROM alpine@sha256:695ae78b4957fef4e53adc51febd07f5401eb36fcd80fff3e5107a2b4aa42ace

# Install utils
RUN apk update && apk upgrade && apk add vim curl php82 php82-fpm php82-mysqli php82-phar php82-mbstring mariadb-client

# Install wpcli
RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
RUN chmod +x wp-cli.phar
RUN mv wp-cli.phar /usr/local/bin/wp

# wordpress config
RUN mkdir -p /sites/mcordes.42.fr
WORKDIR /sites/mcordes.42.fr
RUN php82 /usr/local/bin/wp core download --path='/sites/mcordes.42.fr'

# php-fpm config
RUN adduser -D -g "www-data" www-data -G www-data
COPY ./conf/www.conf /etc/php82/php-fpm.d/www.conf

# Change the right of web site files
RUN chown -R www-data:www-data /sites && chmod -R 755 /sites

# Script to init container
COPY ./tools/init_wordpress.sh /tmp/init_wordpress.sh
RUN chmod +x /tmp/init_wordpress.sh

EXPOSE 9000

CMD ["/tmp/init_wordpress.sh"]
