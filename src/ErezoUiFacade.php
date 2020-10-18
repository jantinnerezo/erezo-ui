<?php

namespace Jantinnerezo\ErezoUi;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Jantinnerezo\ErezoUi\Skeleton\SkeletonClass
 */
class ErezoUiFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'erezo-ui';
    }
}
