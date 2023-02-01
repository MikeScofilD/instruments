FROM php:8.0.10-fpm

RUN apt-get update && apt-get install -y --no-install-recommends \
    libz-dev \
    libpq-dev \
    libjpeg-dev \
    libpng-dev \
    libssl-dev \
    libzip-dev \
    unzip \
    zip \
    && apt-get clean \
    && docker-php-ext-configure gd \
    && docker-php-ext-install gd exif pdo_mysql pdo_pgsql pgsql pcntl zip \
    && pecl install redis xdebug \
    && docker-php-ext-enable redis;

# Clean up
RUN apt-get clean && \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* && \
    rm /var/log/lastlog /var/log/faillog

# Set working directory
WORKDIR /var/www

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]
