FROM php:8.2-apache

# Install extension pdo_mysql for connect MySQL
RUN docker-php-ext-install pdo pdo_mysql

# Copy code to container
WORKDIR /var/www/html

COPY . .

EXPOSE 80
