#!/bin/sh

sleep 10

php82 /usr/local/bin/wp config create --allow-root --dbname="$MYSQL_DATABASE_NAME" --dbuser="$MYSQL_USER" --dbpass="$MYSQL_PASSWORD" --dbhost=mariadb:3306 --path="/sites/$DOMAIN_NAME"

php82 /usr/local/bin/wp core install --url=$DOMAIN_NAME --title='My website' --admin_user='root' --admin_password=$MYSQL_ROOT_PASSWORD --admin_email="root@$DOMAIN_NAME" --path="/sites/$DOMAIN_NAME"

php82 /usr/local/bin/wp user create $MYSQL_USER $MYSQL_USER@$DOMAIN_NAME --user_pass=$MYSQL_PASSWORD --role=author --path="/sites/$DOMAIN_NAME"

php-fpm82 -F
