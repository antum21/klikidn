FROM php:8.4-apache
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    curl \
    && docker-php-ext-install pdo pdo_mysql

# Install Node.js + npm
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs

# 2. Ambil Composer resmi dari image composer resmi
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 3. Aktifkan modul rewrite Apache
RUN a2enmod rewrite

# 4. Ubah Document Root Apache ke /var/www/html/public
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# 5. Tentukan working directory
WORKDIR /var/www/html

# 6. Salin semua file project dan set kepemilikannya ke www-data
COPY --chown=www-data:www-data . /var/www/html

# 7. Jalankan Composer Install
RUN composer install --no-interaction --optimize-autoloader --no-dev

# 8. Install npm dependencies & build Tailwind
RUN npm install && npm run build

# 9. Pastikan permission folder storage & cache sudah tepat
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache