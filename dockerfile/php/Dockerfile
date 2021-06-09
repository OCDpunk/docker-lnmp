ARG PHP_VERSION


From php:${PHP_VERSION}-fpm

ARG AMQP_VERSION
ARG REDIS_VERSION
ARG XDEBUG_VERSION
ARG SWOOLE_VERSION
ARG MONGODB_VERSION
#维护者信息
MAINTAINER ocdpunk admin@ocdpunk.com
#时区
ENV TZ Asia/Shanghai
RUN date -R
#RUN docker-php-ext-install bcmath dom fileinfo filter ftp gd gmp hash iconv imap json mbstring mysqli odbc opcache pdo pdo_mysql pdo_odbc phar reflection session snmp soap sockets zip
#RUN docker-php-ext-install mysqli opcache pdo_mysql
WORKDIR /working
RUN apt-get update --fix-missing && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev libzip-dev librabbitmq-dev \
    && docker-php-ext-configure gd --with-freetype=/usr/include --with-jpeg=/usr/include/jpeg \
    && docker-php-ext-install gd mysqli opcache pdo_mysql zip sockets

RUN pecl install redis-${REDIS_VERSION} \
    && pecl install xdebug-${XDEBUG_VERSION} \
    && pecl install swoole-${SWOOLE_VERSION} \
    && pecl install mongodb-${MONGODB_VERSION} \
#    && pecl install amqp-${AMQP_VERSION} \
    && docker-php-ext-enable redis xdebug swoole mongodb
    #amqp
# install composer new
# https://getcomposer.org/installer | https://install.phpcomposer.com/installer
 RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
     && php composer-setup.php \
     && php -r "unlink('composer-setup.php');" \
     && mv composer.phar /usr/local/bin/composer \
     && composer config -g repo.packagist composer https://packagist.laravel-china.org
RUN apt-get install -y git
# clear
RUN rm -rf /var/cache/apt/* \
    && rm -rf /var/lib/apt/lists/*
RUN mkdir /var/lib/sessions \
    && chmod o=rwx -R /var/lib/sessions
#容器启动时执行指令
CMD ["php-fpm"]