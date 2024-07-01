# Module 49

MVC-фреймворк на PHP

## Развертывание проекта

### Требования

- Ubuntu 24
- Apache2
- PHP
- php-gd
- libapache2-mod-php
- php-fpm

### Настройка Apache

1. Установите необходимые пакеты, если не установлены:

    ```bash
    sudo apt-get update
    sudo apt-get install apache2 php php-gd libapache2-mod-php php-fpm
    ```

2. Склонируйте репозиторий с проектом в директорию `/var/www/module49.local`:

    ```bash
    sudo git clone https://github.com/slowsleep/module49.git /var/www/module49.local
    ```

3. Создайте конфигурационный файл сайта по пути `/etc/apache2/sites-available/module49.local.conf`:

    ```conf
    <VirtualHost *:80>
        ServerName module49.local
        DocumentRoot /var/www/module49.local

        ErrorLog /var/log/apache2/module49.local/error.log
        CustomLog /var/log/apache2/module49.local/access.log combined

        <IfModule dir_module>
            DirectoryIndex index.php
        </IfModule>

        <Directory /var/www/module49.local>
            Options Indexes FollowSymLinks
            AllowOverride All
            Require all granted
        </Directory>
    </VirtualHost>
    ```

4. Активируйте модуль rewrite:

    ```bash
    sudo a2enmod rewrite
    ```

5. Перезапустите Apache для применения изменений:

    ```bash
    sudo systemctl restart apache2
    ```

Далее можете получить содержимое сайта по адресу [http://module49.local/](http://module49.local/)
