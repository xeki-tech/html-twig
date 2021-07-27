<?php

$MODULE_DATA_CONFIG = array(
    "main" => array(

        // Title seo this title set to utf8 characters and limit to 77 length
        // Seo default title for pages without title
        "default_title"=>"",
        // Seo default end title like " - my page " this add to all titles
        "default_end_title"=>"",

        // Description seo this title set to utf8 characters and limit to 160 length
        // Seo default title for pages without title
        "default_description"=>"",
        // Seo default end description like " - my page " this add to all descriptions
        "default_end_description"=>"",

        // folder
        "pages_folder"=>"core/pages",
        "cache_folder"=>sys_get_temp_dir()."/cache/pages/",
        "cache_folder_yaml"=>sys_get_temp_dir()."/yaml/cache/pages/",

        // cache set true for production, if is true
        "cache"=>false,
    ),

);