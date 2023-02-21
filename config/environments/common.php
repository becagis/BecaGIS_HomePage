<?php
use Roots\WPConfig\Config;

Config::define('DISALLOW_FILE_MODS', false);

Config::define('WP_CACHE_KEY_SALT', 'becagis.vn');
Config::define('WP_REDIS_PORT', 6379);
Config::define('WP_REDIS_HOST', 'redis');
Config::define('WP_REDIS_PASSWORD', 'redis@123');
