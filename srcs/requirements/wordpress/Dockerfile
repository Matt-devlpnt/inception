# syntax=docker/dockerfile:1
# escape=\

FROM alpine@sha256:695ae78b4957fef4e53adc51febd07f5401eb36fcd80fff3e5107a2b4aa42ace

RUN apk update && apk upgrade && apk add vim php82-fpm

RUN wget https://fr.wordpress.org/wordpress-6.5.3-fr_FR.tar.gz
RUN tar -xzvf wordpress-6.5.3-fr_FR.tar.gz && rm -rf wordpress-6.5.3-fr_FR.tar.gz

RUN mkdir -p /sites/mcordes.42.fr
RUN chown -R root:root wordpress
RUN rm wordpress/wp-config-sample.php
#RUN mv wordpress/* /sites/mcordes.42.fr && rmdir wordpress
RUN mv wordpress /sites/mcordes.42.fr

COPY ./conf/wp-config.php /sites/mcordes.42.fr/wordpress/wp-config.php
RUN mv /sites/mcordes.42.fr/wordpress/index.php /sites/mcordes.42.fr/

RUN adduser -D -g "www-data" www-data -G www-data
COPY ./conf/www.conf /etc/php82/php-fpm.d/www.conf

COPY ./tools/init_wordpress.sh /tmp/init_wordpress.sh
RUN chmod +x /tmp/init_wordpress.sh

EXPOSE 9000

CMD ["/tmp/init_wordpress.sh"]
