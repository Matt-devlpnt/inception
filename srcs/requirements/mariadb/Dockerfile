# syntax=docker/dockerfile:1
# escape=\

FROM alpine@sha256:695ae78b4957fef4e53adc51febd07f5401eb36fcd80fff3e5107a2b4aa42ace

RUN apk update && apk upgrade && apk add openrc vim mariadb mariadb-client

# Activate openrc command
RUN openrc
RUN touch /run/openrc/softlevel

# Create new database
RUN /etc/init.d/mariadb setup

COPY ./tools/initializer.sh /tmp/initializer.sh
RUN chmod +x /tmp/initializer.sh

EXPOSE 3306

CMD ["/tmp/initializer.sh"]
