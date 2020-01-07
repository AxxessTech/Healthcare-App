FROM php:7.3-fpm

RUN apt-get update \
    && apt-get install -y \
        git \
        nginx \
        supervisor \
        unzip \
    && docker-php-ext-install bcmath \
    && docker-php-ext-install pdo_mysql

COPY docker/default /etc/nginx/sites-enabled/default
COPY docker/supervisord.conf /etc/supervisor/conf.d/supervisord.conf
COPY docker/composer /usr/local/bin/composer

COPY project /var/www/html
RUN chown -R www-data:www-data /var/www/html

RUN cd /var/www/html \
    && composer install --optimize-autoloader --no-dev --no-interaction

CMD [ "/usr/bin/supervisord" ]
EXPOSE 80
