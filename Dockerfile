FROM php:8.2-apache
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN a2enmod rewrite
COPY . /var/www/html
WORKDIR /var/www/html
RUN composer install --ignore-platform-reqs --no-dev --optimize-autoloader
RUN sed -i 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf
EXPOSE 80
