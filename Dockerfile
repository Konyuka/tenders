FROM php:8.0-apache

# Install necessary dependencies
RUN apt-get update && \
    apt-get install -y git unzip libicu-dev libzip-dev libpng-dev libonig-dev libxml2-dev && \
    docker-php-ext-install pdo_mysql gd zip exif intl bcmath && \
    pecl install xdebug && \
    docker-php-ext-enable xdebug && \
    a2enmod rewrite
    
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf


# Install Node.js and npm
RUN curl -sL https://deb.nodesource.com/setup_14.x | bash -
RUN apt-get install -y nodejs

# Install MongoDB extension
RUN pecl install mongodb && \
    docker-php-ext-enable mongodb

# Install Tailwind CSS
RUN npm install -g tailwindcss

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set the working directory
WORKDIR /var/www/html

# Copy the Laravel files to the container
COPY . .

# Install Laravel dependencies
RUN composer install --no-dev

# Create a .env file
RUN cp .env.example .env

# Expose the port
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]
