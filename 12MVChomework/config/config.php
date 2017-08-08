<?php
Config::set('site_name', 'Imza group');

Config::set('languages', array('en', 'ru','az'));

// Routes. Route name => method prefix

Config::set('routes', array(
    'default' => '',
    'admin' => 'admin_',
));

Config::set('default_route', 'default');
Config::set('default_language', 'en');
Config::set('default_controller', 'main');
Config::set('default_action', 'index');

Config::set('db.host', 'localhost');
Config::set('db.user', 'misha');
Config::set('db.password', '9P3f8L4e');
Config::set('db.db_name', 'mvc');

Config::set('salt', 'dfghrj3d2t4hlsple643j');
