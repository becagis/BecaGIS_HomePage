<?php
use Roots\WPConfig\Config;
use function Env\env;

Config::define('WP_DEBUG', false);
Config::define('DISABLE_WP_CRON', false);
Config::define('DISALLOW_FILE_MODS', false);

Config::define('WP_CACHE_KEY_SALT', env('WP_CACHE_KEY_SALT') ?? 'becagis.vn');
Config::define('WP_REDIS_PORT', env('WP_REDIS_PORT') ?? 6379);
Config::define('WP_REDIS_HOST', env('WP_REDIS_HOST') ?? 'redis');
Config::define('WP_REDIS_PASSWORD', env('WP_REDIS_PASSWORD') ?? 'redis@123');
