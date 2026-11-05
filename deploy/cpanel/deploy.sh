#!/bin/bash
set -euo pipefail

NAMA="sadan-tobarana"
APP_SUBDIR=""

PHP="${PHP:-/usr/local/bin/php}"
REPO="$HOME/$NAMA"
APP="$REPO${APP_SUBDIR:+/$APP_SUBDIR}"
DOCROOT="$HOME/public_html/$NAMA"
COMPOSER="$HOME/composer.phar"

echo "== $(date '+%Y-%m-%d %H:%M:%S') deploy commit $(git -C "$REPO" rev-parse --short HEAD)"

if [ ! -f "$COMPOSER" ]; then
    echo "-- mengunduh composer.phar"
    "$PHP" -r "copy('https://getcomposer.org/download/latest-stable/composer.phar', '$COMPOSER');"
fi

echo "-- composer install"
cd "$APP"
COMPOSER_HOME="$HOME/.composer" "$PHP" -d memory_limit=-1 "$COMPOSER" install \
    --no-dev --optimize-autoloader --no-interaction --no-progress --no-scripts

"$PHP" artisan package:discover --no-ansi

echo "-- menyalin file publik ke $DOCROOT"
mkdir -p "$DOCROOT"
cp -R "$APP/public/." "$DOCROOT/"
sed "s#__APP_PATH__#$APP#" "$REPO/deploy/cpanel/index.php" > "$DOCROOT/index.php"
cp "$REPO/deploy/cpanel/user.ini" "$DOCROOT/.user.ini"

if [ ! -L "$DOCROOT/storage" ] && [ ! -e "$DOCROOT/storage" ]; then
    ln -s "$APP/storage/app/public" "$DOCROOT/storage"
fi

chmod 711 "$REPO"

if [ ! -f "$APP/.env" ]; then
    echo "!! $APP/.env belum ada: migrate & cache dilewati. Buat .env lalu deploy ulang."
    exit 0
fi

chmod 600 "$APP/.env"

if ! grep -q '^APP_KEY=base64:' "$APP/.env"; then
    echo "-- membuat APP_KEY"
    "$PHP" artisan key:generate --force
fi

echo "-- migrate"
"$PHP" artisan migrate --force

echo "-- cache konfigurasi, rute, view"
"$PHP" artisan config:cache
"$PHP" artisan route:cache
"$PHP" artisan view:cache

echo "== selesai"

