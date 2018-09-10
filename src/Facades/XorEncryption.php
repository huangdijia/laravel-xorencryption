<?php

namespace Huangdijia\XorEncryption\Facades;

use Illuminate\Support\Facades\Facade;

class XorEncryption extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'hashing.xorencryption'; 
    }
}