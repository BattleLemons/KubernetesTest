# Dockerfile
FROM php:8.1-apache
COPY index.php /var/www/html/
COPY test-db.php /var/www/html/
