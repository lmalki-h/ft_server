FROM debian:buster

MAINTAINER lmalki-h@student.42.fr

# Update and install services
RUN apt-get update && apt-get -y upgrade
RUN apt-get -y install nginx
RUN apt-get -y install mariadb-server
RUN apt-get -y install wget
RUN apt-get -y install php-fpm php-mysql
RUN apt-get -y install openssl

# Nginx configurations
RUN mkdir /var/www/localhost
RUN chmod -R 755 /var/www/*
COPY srcs/nginx-conf /etc/nginx/sites-available/localhost
COPY srcs/autoindex_switch.sh ./
RUN chmod +x autoindex_switch.sh
RUN ln -s /etc/nginx/sites-available/localhost /etc/nginx/sites-enabled/

# Configure MySQL
COPY srcs/database.sh ./
RUN sh database.sh

# Install and configure wordpress
COPY srcs/wp-config.php /var/www/localhost/
RUN cd /tmp && wget https://wordpress.org/latest.tar.gz && tar xzvf latest.tar.gz 
RUN mv /tmp/wordpress/* /var/www/localhost/
RUN chown -R www-data:www-data /var/www/*
RUN rm /tmp/latest.tar.gz

# Install and configure PhpMyAdmin
RUN mkdir /var/www/phpmyadmin
RUN cd /tmp && wget https://files.phpmyadmin.net/phpMyAdmin/4.9.0.1/phpMyAdmin-4.9.0.1-english.tar.gz  && tar xzf phpMyAdmin-4.9.0.1-english.tar.gz --strip-components=1 -C /var/www/phpmyadmin

# SSL
RUN mkdir /etc/nginx/ssl
RUN openssl req -x509 -newkey rsa:4096 -sha256 -nodes -keyout /etc/nginx/ssl/localhost_key.pem -out /etc/nginx/ssl/localhost.pem -days 3650 -subj "/C=FR/ST=IDF/L=PARIS/O=42/OU=lm-h/CN=localhost"
ENTRYPOINT service nginx start && service mysql restart && service php7.3-fpm start && /bin/bash
