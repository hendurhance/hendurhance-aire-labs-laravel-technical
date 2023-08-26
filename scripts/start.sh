#!/bin/bash


# Install Composer dependencies
composer install

# Copy the .env.example file to .env
cp .env.example .env

# Generate the application key
php artisan key:generate

# Serve the application
read -p "Enter a port number (default is 8000): " port
port=${port:-8000}
php artisan serve --port=$port