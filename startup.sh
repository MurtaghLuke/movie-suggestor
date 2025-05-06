#!/bin/bash

# Navigate to the Laravel public folder and serve it
cd /home/site/wwwroot

# Ensure vendor is installed
if [ ! -d "vendor" ]; then
  composer install --no-dev --optimize-autoloader
fi

# Start PHP server from the public directory
php -S 0.0.0.0:8080 -t public
