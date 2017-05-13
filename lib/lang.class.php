<?php

class Lang
{
    public static $db;
    protected static $data;


    public static function load($lang_code)
    {   self::$db = new DB (Config::get('db.host'), Config::get('db.user'), Config::get('db.password'), Config::get('db.db_name'));
        if (isset(self::$db->query("SELECT `language` FROM transaltor where language = '{$lang_code}'")[0]['language'])) {
            return self::$data = (unserialize(self::$db->query("SELECT `array` FROM transaltor where language = '{$lang_code}'")[0]['array']));
        } else {
            throw new Exception('Lang file not found: ');
        }
    }

    public static function get($key, $default_value = '')
    {
        return isset(self::$data[strtolower($key)]) ? self::$data[strtolower($key)] : $default_value;
    }
}