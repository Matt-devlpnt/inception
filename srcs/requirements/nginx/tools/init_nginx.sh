#!/bin/sh

sed -i "s/\${DOMAIN_NAME}/$DOMAIN_NAME/g" /etc/nginx/conf.d/mcordes_42_fr.conf
sed -i "s/\${DOMAIN_NAME}/$DOMAIN_NAME/g" /etc/nginx/conf.d/default.conf

nginx -g 'daemon off;'
