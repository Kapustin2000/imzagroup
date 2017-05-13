<?php
Config::set('site_name', 'IMZA Group');

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
Config::set('db.user', 'mznridgv_user');
Config::set('db.password', '_VC0U095edTQ');
Config::set('db.db_name', 'mznridgv_mvc');

Config::set('salt', 'dfghrj3d2t4hlsple643j');
