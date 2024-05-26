# syntax=docker/dockerfile:1
# escape=\

FROM alpine@sha256:695ae78b4957fef4e53adc51febd07f5401eb36fcd80fff3e5107a2b4aa42ace

# Install utils
RUN apk update && apk upgrade && apk add openssl curl ca-certificates vim

# Install nginx
RUN printf "%s%s%s\n" \
	"http://nginx.org/packages/alpine/v" \
	`egrep -o '^[0-9]+\.[0-9]+' /etc/alpine-release` \
	"/main" \
	| tee -a /etc/apk/repositories
RUN curl -o /tmp/nginx_signing.rsa.pub https://nginx.org/keys/nginx_signing.rsa.pub
RUN openssl rsa -pubin -in /tmp/nginx_signing.rsa.pub -text -noout
RUN mv /tmp/nginx_signing.rsa.pub /etc/apk/keys/
RUN apk add nginx

# Create keys for TLS connect
RUN mkdir /etc/nginx/ssl
RUN openssl req -x509 -nodes \
	-out /etc/nginx/ssl/mcordes_42_fr.pem \
	-keyout /etc/nginx/ssl/mcordes_42_fr.key \
	-subj "/C=FR/P=Alpes\ Maritimes/L=Nice/O=Ecole\ 42/OU=Ecole/CN=mcordes.42.fr/E=mcordes@student.42nice.fr"

# Create a target volume for website repo
RUN mkdir -p /sites/mcordes.42.fr

# nginx config
COPY ./conf/mcordes_42_fr.conf /etc/nginx/conf.d/mcordes_42_fr.conf
COPY ./conf/default.conf /etc/nginx/conf.d/default.conf

# Script to init container
COPY ./tools/init_nginx.sh /tmp/init_nginx.sh
RUN chmod +x /tmp/init_nginx.sh

EXPOSE 443

CMD ["/tmp/init_nginx.sh"]
