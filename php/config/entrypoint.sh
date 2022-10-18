#!/usr/bin/env bash

chown -R www-data:www-data /var/www
chown -R www-data:www-data ${COMPOSER_HOME:="/var/lib/composer"}

/usr/local/bin/docker-php-entrypoint "$@"
