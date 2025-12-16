<?php

namespace ComponentBundle\App\Builder\Metadata;

class Options
{
    /**
     * {PAGE_TITLE} - Page default title.
     * {HOME_TITLE} - Site home title.
     * {HOME_SHORT_TITLE} - Site home short title. 
     */
    public static $headTitleTemplate = "{PAGE_TITLE} - {HOME_SHORT_TITLE}";
    
    public static $globalDefaultEnd = '...';

    protected static $metaDescriptionLength = 155;
    protected static $metaOgDescriptionLength = 200;
    protected static $metaTwitterDescriptionLength = 155;

    public static function getMetaDescriptionLength(): int
    {
        return self::$metaDescriptionLength;
    }

    public static function getMetaOgDescriptionLength(): int
    {
        return self::$metaOgDescriptionLength;
    }

    public static function getMetaTwitterDescriptionLength(): int
    {
        return self::$metaTwitterDescriptionLength;
    }
}
