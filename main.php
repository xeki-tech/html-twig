<?php
namespace xeki_modules\html_twig;
require_once dirname(__FILE__) . "/core/core.php";

class main
{
    public static $objectModule = null;
    public $config = array();

    function init($config)
    {
        $this->config = $config;
        return true;
    }

    function getObject()
    {
        if (self::$objectModule == null) {

            if(empty($this->config['pages_folder'])){
                d("html-twig module page folder not setted");die();
            }
            if(empty($this->config['cache_folder'])){
                d("html-twig module cache folder not setted");die();
            }

            $path_html = \xeki\core::$SYSTEM_PATH_BASE.'/'.$this->config['pages_folder'];## this update by modules
            $path_cache = \xeki\core::$SYSTEM_PATH_BASE.'/'.$this->config['cache_folder'];## this update by modules
            $this->config['pages_folder']=$path_html;
            $this->config['cache_folder']=$path_cache;
            self::$objectModule = new html_twig( $this->config);
        }
        return self::$objectModule;
    }

    function check()
    {
        return true;
    }
}