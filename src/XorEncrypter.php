<?php

namespace Huangdijia\XorEncryption;

use Illuminate\Contracts\Encryption\Encrypter as EncrypterContract;

class Encrypter implements EncrypterContract
{
    private $key;

    public function __construct($key = '')
    {
        $this->key = sha1(md5($key));
    }

    public function encrypt($value = '', $serialize = true)
    {
        $encrypted = $this->algorithm($value, $this->key);
        if (!$serialize) {
            return $encrypted;
        }
        return base64_encode($encrypted);
    }

    public function decrypt($payload = '', $unserialize = true)
    {
        if ($unserialize) {
            $payload = base64_decode($payload);
        }
        return $this->algorithm($payload, $this->key);
    }

    public function algorithm($str = '', $key = null)
    {
        if ('' == $str) {
            return '';
        }

        $key    = $key ?? $this->key;
        $keylen = strlen($key);
        $strlen = strlen($str);

        for ($i = 0; $i < $strlen; $i++) {
            $j       = $i % $keylen;
            $x       = $str[$i] ^ $key[$j] ^ chr($i);
            $str[$i] = $x;
        }

        return $str;
    }
}
