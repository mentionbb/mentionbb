ARG SERVER
ARG PHP_VERSION

FROM php:${PHP_VERSION}-${SERVER}

ARG SERVER
ARG TIMEZONE

COPY ./php.ini /usr/local/etc/php/conf.d/docker-php-config.ini
COPY ./opcache-jit.ini /usr/local/etc/php/conf.d/opcache-jit.ini

RUN mkdir -p /usr/local/var/log /usr/local/var/log/archive && chown www-data:www-data /usr/local/var/log /usr/local/var/log/archive
COPY ./docker-php-entrypoint.sh /usr/local/bin/docker-php-entrypoint.sh
RUN chmod +x /usr/local/bin/docker-php-entrypoint.sh
ENTRYPOINT ["/usr/local/bin/docker-php-entrypoint.sh"]

RUN if [ "${SERVER}" = "apache" ] ; then \
        a2enmod rewrite; \
    fi

RUN apt-get update && apt-get install -y \
    sshpass \
    nano \
    gnupg \
    g++ \
    procps \
    openssl \
    git \
    unzip \
    zlib1g-dev \
    libzip-dev \
    libicu-dev \
    libxslt1-dev \
    libpq-dev \
    libonig-dev \
    acl \
    libjpeg-dev \
    libpng-dev \
    libfreetype6-dev \
    libwebp-dev \
    libavif-dev

RUN docker-php-ext-configure gd --with-jpeg --with-freetype --with-webp --with-avif \
    && docker-php-ext-install gd 

RUN docker-php-ext-install pdo pdo_mysql
RUN docker-php-ext-install \
    zip xsl intl exif mbstring

# Set timezone
RUN ln -snf /usr/share/zoneinfo/${TIMEZONE} /etc/localtime && echo ${TIMEZONE} > /etc/timezone \
    && printf '[PHP]\ndate.timezone = "%s"\n', ${TIMEZONE} > /usr/local/etc/php/conf.d/tzone.ini \
    && "date"

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /workspace
