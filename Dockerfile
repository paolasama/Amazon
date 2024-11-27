# Usa la imagen oficial de PHP como base
FROM php:8.2-fpm

# Instala dependencias necesarias
RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg-dev libfreetype6-dev zip git && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install gd pdo pdo_mysql

# Configura el directorio de trabajo en el contenedor
WORKDIR /var/www

# Copia los archivos de tu proyecto al contenedor
COPY . .

# Instala Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Exponer el puerto 9000 para acceder al servicio
EXPOSE 9000

# Comando para iniciar PHP-FPM
CMD ["php-fpm"]
