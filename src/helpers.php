<?php
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
