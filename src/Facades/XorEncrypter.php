<?php

namespace Huangdijia\XorEncryption\Facades;

use Huangdijia\XorEncryption\Encrypter;
use Illuminate\Support\Facades\Facade;

class XorEncrypter extends Facade
{
    protected static function getFacadeAccessor()
    {
        return Encrypter::class;
    }
}
