# Turn on maintenance mode
php artisan down

# Pull the latest changes from the git repository
git reset --hard
git clean -df
git pull origin main

# Install/update composer dependencies
composer install --no-interaction --prefer-dist --optimize-autoloader --no-dev

# Run database migrations
php artisan migrate --force

# Clear caches
php artisan cache:clear

# Clear expired password reset tokens
php artisan auth:clear-resets

# Clear and cache routes
php artisan route:clear
php artisan route:cache

# Clear and cache config
php artisan config:cache
php artisan config:clear

php artisan view:clear

# Install node modules
npm install

# Build assets using Laravel Mix
npm run prod

# Turn off maintenance mode
php artisan up
