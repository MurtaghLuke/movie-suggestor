#!/bin/bash

cd /home/site/wwwroot

chmod -R 755 storage bootstrap/cache

php artisan config:cache
php artisan route:cache
php artisan view:cache
