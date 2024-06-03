@echo off
REM Clear Laravel caches
php artisan route:clear
php artisan config:clear
php artisan cache:clear
php artisan view:clear
echo All caches cleared!
