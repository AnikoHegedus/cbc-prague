<?php

class lang
{
    protected static $locale = 'en';

    protected static $translations = null; // null signalizes that the translations have not been loaded yet

    public static function setLocale($locale)
    {
        static::$locale = $locale;
    }

    public static function getLocale(){
        return static::$locale;
    }

    public static function load()
    {
        $translations = [];
        // load the translations into static::$translations
        include __DIR__ . '/../data/translations.php';

        static::$translations = $translations[static::$locale];
    }

    public static function t($key, $default = '')
    {
        if(static::$translations === null) // === is crucial
        {
            static::load();
        }

        // TODO: print the translation for the $key or print $default if $key not found
        echo array_key_exists($key, static::$translations) ? static::$translations[$key] : $default;
    }
}