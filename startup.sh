#!/bin/bash

cd /home/site/wwwroot_old

# Set permissions so Laravel can write to these folders
chmod -R 755 storage bootstrap/cache

# Laravel caching steps
php artisan config:cache
php artisan route:cache
php artisan view:cache
