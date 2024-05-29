# syntax=docker/dockerfile:1
# escape=\

FROM alpine@sha256:695ae78b4957fef4e53adc51febd07f5401eb36fcd80fff3e5107a2b4aa42ace

# Install utils
RUN apk update && apk upgrade && apk add vim php82 php82-fpm php82-mysqli mariadb-client

# Install wordpress
RUN wget https://fr.wordpress.org/wordpress-6.5.3-fr_FR.tar.gz
RUN tar -xzvf wordpress-6.5.3-fr_FR.tar.gz && rm -rf wordpress-6.5.3-fr_FR.tar.gz

# Create repo for website
RUN mkdir -p /sites/mcordes.42.fr
RUN chown -R root:root wordpress
RUN rm wordpress/wp-config-sample.php
RUN mv wordpress/* /sites/mcordes.42.fr && rmdir wordpress

# wordpress config
COPY ./conf/wp-config.php /sites/mcordes.42.fr/wp-config.php

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
