<?php
use Huangdijia\XorEncryption\Encrypter;
use Huangdijia\XorEncryption\Facades\XorEncryption;

if (!function_exists('xorencrypt')) {
    function xorencrypt($str = '', $key = null)
    {
        return XorEncryption::encrypt($str, $key);
    }
}

if (!function_exists('xordecrypt')) {
    function xordecrypt($str = '', $key = null)
    {
        return XorEncryption::decrypt($str, $key);
    }
}

if (!function_exists('xorcrypt')) {
    function xorcrypt($str = '', $key = null)
    {
        return XorEncryption::algorithm($str, $key);
    }
}

if (!function_exists('xorencrypter')) {
    function xorencryption(string $key = null)
    {
        return is_null($key) ? app('hashing.xorencrypter') : new Encrypter($key);
    }
}
