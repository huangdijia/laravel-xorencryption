<?php

namespace Huangdijia\XorEncryption\Facades;

use Illuminate\Support\Facades\Facade;

class XorEncrypter extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'hashing.xorencrypter';
    }
}
