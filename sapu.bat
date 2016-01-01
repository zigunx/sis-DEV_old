@ECHO OFF
 artisan cache:clear &&  artisan config:clear && artisan view:clear && artisan route:clear && artisan clear-compiled && composer dump-autoload && artisan optimize && artisan config:cache && echo Selesai
