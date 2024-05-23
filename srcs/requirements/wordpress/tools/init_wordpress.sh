#!/bin/sh

sed -i "s/\${MYSQL_DATABASE_NAME}/$MYSQL_DATABASE_NAME/g" /sites/mcordes.42.fr/wp-config.php
sed -i "s/\${MYSQL_USER}/$MYSQL_USER/g" /sites/mcordes.42.fr/wp-config.php
sed -i "s/\${MYSQL_PASSWORD}/$MYSQL_PASSWORD/g" /sites/mcordes.42.fr/wp-config.php
sed -i "s/\${DOMAIN_NAME}/$DOMAIN_NAME/g" /sites/mcordes.42.fr/wp-config.php
sed -i "s/\${AUTH_KEY}/$AUTH_KEY/g" /sites/mcordes.42.fr/wp-config.php
sed -i "s/\${SECURE_AUTH_KEY}/$SECURE_AUTH_KEY/g" /sites/mcordes.42.fr/wp-config.php
sed -i "s/\${LOGGED_IN_KEY}/$LOGGED_IN_KEY/g" /sites/mcordes.42.fr/wp-config.php
sed -i "s/\${NONCE_KEY}/$NONCE_KEY/g" /sites/mcordes.42.fr/wp-config.php
sed -i "s/\${AUTH_SALT}/$AUTH_SALT/g" /sites/mcordes.42.fr/wp-config.php
sed -i "s/\${SECURE_AUTH_SALT}/$SECURE_AUTH_SALT/g" /sites/mcordes.42.fr/wp-config.php
sed -i "s/\${LOGGED_IN_SALT}/$LOGGED_IN_SALT/g" /sites/mcordes.42.fr/wp-config.php
sed -i "s/\${NONCE_SALT}/$NONCE_SALT/g" /sites/mcordes.42.fr/wp-config.php

php-fpm82 -F
