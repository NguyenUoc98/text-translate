<?php

namespace Uocnv\TextTranslate;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Uocnv\TextTranslate\Skeleton\SkeletonClass
 */
class TextTranslateFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'text-translate';
    }
}
