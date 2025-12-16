#!/bin/sh

LOG_FILE="/usr/local/var/log/php-errors.log"
ARCHIVE_DIR="/usr/local/var/log/archive"

export TZ="Europe/Istanbul"

TODAY=$(date +%d-%m-%Y)

TIMESTAMP=$(date +%H-%M-%S)

mkdir -p "$ARCHIVE_DIR/$TODAY"

if [ -f "$LOG_FILE" ]; then
    cp "$LOG_FILE" "$ARCHIVE_DIR/$TODAY/php-errors-$TIMESTAMP.log"
    > "$LOG_FILE"
fi

cat /proc/self/fd/2 >> "$LOG_FILE" &

php-fpm
