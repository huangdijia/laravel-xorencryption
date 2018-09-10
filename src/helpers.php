<?php
use Huangdijia\XorEncryption\Encrypter;
use Huangdijia\XorEncryption\Facades\XorEncrypter;

if (!function_exists('xorencrypt')) {
    function xorencrypt($value = '', $serialize = true)
    {
        return XorEncrypter::encrypt($value, $serialize);
    }
}

if (!function_exists('xordecrypt')) {
    function xordecrypt($payload = '', $unserialize = true)
    {
        return XorEncrypter::decrypt($payload, $unserialize);
    }
}

if (!function_exists('xorcrypt')) {
    function xorcrypt($value = '', $key = null)
    {
        return XorEncrypter::algorithm($value, $key);
    }
}

if (!function_exists('xorencrypter')) {
    function xorencryption($key = null)
    {
        if (is_null($key)) {
            return app()->makeWith(Encrypter::class, ['key' => config('app.key')]);
        } else {
            return app()->makeWith(Encrypter::class, ['key' => $key]);
        }
    }
}
