#!/bin/sh

set -eo pipefail

# Install php libraries.
echo "Start the update and the install"
composer install --no-interaction --optimize-autoloader

# Copy over testing configuration.
touch .env
#cp .env.testing .env

# Generate an application key. Re-cache.
echo "Run artisan"
php artisan key:generate
php artisan optimize
php artisan config:cache

# Run database migrations.
echo "Run migration & Seeds"
php artisan migrate --seed

# Run the tests.
echo "Run the tests"
php vendor/bin/phpunit --colors