#!/bin/bash

cd /home/site/wwwroot

# Set permissions if needed
chmod -R 755 storage bootstrap/cache

# Start Laravel from public folder
php artisan config:cache
php artisan route:cache
php artisan view:cache


