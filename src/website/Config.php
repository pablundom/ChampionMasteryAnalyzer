<?php
/**
 * Created by PhpStorm.
 * User: Pablo
 * Date: 28/04/2016
 * Time: 18:13
 */

namespace Kolter\Website;


class Config
{
    public static $config=[];

    public static function getUrl(){
        return self::$config['url'];
    }

    public static function setConfig($url='config/server.yaml'){
        self::$config = Util::yamlToArray($url);
    }

    public static function getRiotApiKey(){
        return self::$config['riotapikey'];
    }

    public static function getDatabase(){
        return self::$config['database'];
    }

}