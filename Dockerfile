FROM php:5.6-apache


RUN apt-get update && DEBIAN_FRONTEND=noninteractive apt-get install -y --no-install-recommends\
  apt-utils \
&& rm -rf /var/lib/apt/lists/*

RUN rm /etc/apache2/mods-available/php5.load

RUN apt-get update && DEBIAN_FRONTEND=noninteractive apt-get install -y  --no-install-recommends\
  php5-mysql \
  php5-gd \
 libapache2-mod-php5 \
 php5-mcrypt \
 git \
 zip \
 unzip \
 libmcrypt-dev \
 wget

RUN wget https://getcomposer.org/download/1.2.0/composer.phar -P /usr/bin
RUN mv /usr/bin/composer.phar /usr/bin/composer
RUN chmod 777 /usr/bin/composer

RUN php5enmod mcrypt 

RUN docker-php-ext-install mcrypt
RUN docker-php-ext-install pdo pdo_mysql

RUN a2dissite 000-default.conf

RUN echo "<VirtualHost *:80>"  > /etc/apache2/sites-available/vtel.conf 
RUN echo "ServerAdmin webmaster@localhost"  >> /etc/apache2/sites-available/vtel.conf 
RUN echo "DocumentRoot /var/www/html/public"  >> /etc/apache2/sites-available/vtel.conf 
RUN echo "<Directory /var/www/html/public>"  >> /etc/apache2/sites-available/vtel.conf 
RUN echo "AllowOverride All "  >> /etc/apache2/sites-available/vtel.conf 
RUN echo "</Directory>"  >> /etc/apache2/sites-available/vtel.conf 
RUN echo "ErrorLog ${APACHE_LOG_DIR}/error.log"  >> /etc/apache2/sites-available/vtel.conf 
RUN echo "CustomLog ${APACHE_LOG_DIR}/access.log combined"  >> /etc/apache2/sites-available/vtel.conf 
RUN echo "</VirtualHost>"  >> /etc/apache2/sites-available/vtel.conf 


RUN a2ensite vtel.conf
RUN a2enmod rewrite