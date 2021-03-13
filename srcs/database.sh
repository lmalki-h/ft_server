service mysql start
echo "CREATE DATABASE wordpress;" | mysql -u root
echo "CREATE USER 'admin' identified by '1234';" | mysql -u root
echo "GRANT USAGE ON wordpress.* TO 'admin'@'localhost' identified by '1234';" | mysql -u root
echo "GRANT ALL PRIVILEGES ON wordpress.* TO 'admin'@'localhost' identified by '1234';" | mysql -u root
echo "FLUSH PRIVILEGES;" | mysql -u root
