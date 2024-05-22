rc-service mariadb start

mariadb -e "CREATE DATABASE IF NOT EXISTS \`${MYSQL_DATABASE_NAME}\`;"
mariadb -e "CREATE USER IF NOT EXISTS \`${MYSQL_USER}\`@'%' IDENTIFIED BY '${MYSQL_PASSWORD}';"
mariadb -e "GRANT ALL PRIVILEGES ON \`${MYSQL_DATABASE_NAME}\`.* TO \`${MYSQL_USER}\`@'%';"
mariadb -e "FLUSH PRIVILEGES;"
mariadb -e "ALTER USER 'root'@'localhost' IDENTIFIED BY '${MYSQL_ROOT_PASSWORD}';"

mysqladmin -u root -p$MYSQL_ROOT_PASSWORD shutdown

/usr/bin/mysqld_safe
