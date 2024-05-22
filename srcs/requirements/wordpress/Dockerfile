# syntax=docker/dockerfile:1
# escape=\

FROM alpine@sha256:695ae78b4957fef4e53adc51febd07f5401eb36fcd80fff3e5107a2b4aa42ace

RUN apk update && apk upgrade && apk add vim gettext-envsubst

RUN wget https://fr.wordpress.org/wordpress-6.5.3-fr_FR.tar.gz
RUN tar -xzvf wordpress-6.5.3-fr_FR.tar.gz && rm -rf wordpress-6.5.3-fr_FR.tar.gz

RUN mkdir -p /sites/mcordes.42.fr
RUN mv wordpress /sites/mcordes.42.fr

RUN rm /sites/mcordes.42.fr/wordpress/wp-config-sample.php
COPY ./conf/wp-config.php /sites/mcordes.42.fr/wordpress/tmp

RUN chown -R root:root /sites/mcordes.42.fr/wordpress

EXPOSE 9000
