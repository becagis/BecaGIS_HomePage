#!/bin/bash

set -e

source .env

[ "$FORCE_REINIT" == true ] && rm -rf composer.lock vendor

composer install --ignore-platform-reqs

wp core install --url=$WP_HOME \
  --title="${WP_SITENAME:=WordPress}" \
  --admin_user="${WP_ADMIN_USERNAME:=admin}" \
  --admin_email="${WP_ADMIN_EMAIL:=admin@admin.com}" \
  --admin_password="${WP_ADMIN_PASSWORD:=admin@123}"

wp package install aaemnnosttv/wp-cli-login-command \
  || echo 'wp-cli-login-command is already installed'

wp login install --activate --yes --skip-plugins --skip-themes

wp login as 1
