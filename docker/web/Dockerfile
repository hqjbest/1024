FROM php:7.1-apache

#在国内开启，加快速度
COPY sources.list /etc/apt/sources.list

RUN apt-get update -yqq

RUN apt-get upgrade -yqq

RUN echo "Asia/Shanghai" > /etc/timezone

RUN apt-get install -y mysql-client vim git python wget

# PDO
RUN docker-php-ext-install pdo pdo_mysql mysqli

RUN touch /usr/local/etc/php/conf.d/xdebug.ini; \
    echo xdebug.remote_enable=1 >> /usr/local/etc/php/conf.d/xdebug.ini; \
    echo xdebug.profiler_enable=1 >> /usr/local/etc/php/conf.d/xdebug.ini; \
    echo xdebug.remote_host="10.0.1.1" >> /usr/local/etc/php/conf.d/xdebug.ini; \
    echo xdebug.remote_port=9000 >> /usr/local/etc/php/conf.d/xdebug.ini; \
    echo xdebug.remote_log=/tmp/php-xdebug.log >> /usr/local/etc/php/conf.d/xdebug.ini; \
    echo xdebug.idekey=PHPSTORM >> /usr/local/etc/php/conf.d/xdebug.ini;

RUN pecl install xdebug-2.5.5
RUN docker-php-ext-enable xdebug

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin \
    && mv /usr/local/bin/composer.phar /usr/local/bin/composer

# Install adminer
RUN wget "http://www.adminer.org/latest.php" -O /var/www/adminer.php \
    && echo "AliasMatch ^/adminer(\.php)?$ /var/www/adminer.php" | tee /etc/apache2/conf-available/adminer.conf \
    && a2enconf adminer.conf

RUN curl -sS https://bootstrap.pypa.io/get-pip.py | python && pip install awsebcli awscli

# Mail
RUN apt-get update && apt-get install -y sendmail

# Enable rewrite rules (ie. to route all requests to index.php)
RUN a2enmod rewrite

COPY php.ini /usr/local/etc/php

RUN echo ServerName 127.0.0.1 >> /etc/apache2/apache2.conf

RUN service apache2 restart