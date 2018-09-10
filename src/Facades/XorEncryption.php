<?php

namespace Huangdijia\XorEncryption\Facades;

class XorEncryption extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'hashing.xorencryption'; 
    }
}