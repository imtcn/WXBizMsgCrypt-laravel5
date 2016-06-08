<?php

namespace Illuminate\Support\Facades;

class WXBizMsgCrypt extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'wxbizmsgcrypt';
    }
}