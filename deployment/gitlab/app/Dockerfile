FROM php:8.1-fpm

RUN apt-get update && apt-get install -y \
      apt-utils \
      libpq-dev \
      libpng-dev \
      libzip-dev \
      zip unzip \
      git && \
      docker-php-ext-install pdo && \
      docker-php-ext-install pdo_mysql && \
      docker-php-ext-install pdo_pgsql && \
      docker-php-ext-install bcmath && \
      docker-php-ext-install gd && \
      docker-php-ext-install zip && \
      apt-get clean && \
      rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

COPY ./deployment/app/php.ini /usr/local/etc/php/conf.d/php.ini

COPY app            /var/www/app
COPY bootstrap      /var/www/bootstrap
COPY config         /var/www/config
COPY database       /var/www/database
COPY public         /var/www/public
COPY resources      /var/www/resources
COPY routes         /var/www/routes
COPY storage        /var/www/storage
COPY artisan        /var/www/artisan
#COPY package.json   /var/www/package.json
#COPY webpack.mix.js /var/www/webpack.mix.js

COPY composer.*  ./

# Install composer
ENV COMPOSER_ALLOW_SUPERUSER=1
RUN curl -sS https://getcomposer.org/installer | php -- \
    --filename=composer \
    --install-dir=/usr/local/bin
# alias
RUN echo "alias a='artisan'" >> /root/.bashrc

RUN curl -sL https://deb.nodesource.com/setup_18.x | bash -
RUN apt-get install -y nodejs
