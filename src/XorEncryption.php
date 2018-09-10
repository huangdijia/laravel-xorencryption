<?php

namespace Huangdijia\XorEncryption;

class XorEncryption
{
    private $key;

    public function __construct(string $key = '')
    {
        $this->key = sha1(md5($key));
    }

    public function encrypt(string $string = '', string $key = null): string
    {
        return base64_encode($this->algorithm($string, $key ?? $this->key));
    }

    public function decrypt(string $encrypted = '', string $key = null): string
    {
        return $this->algorithm(base64_decode($encrypted), $key ?? $this->key);
    }

    public function algorithm(string $str = '', string $key = null): string
    {
        if ('' == $str) {
            return "";
        }

        $xorkey = $key ?? $this->key;
        $keylen = strlen($xorkey);
        $strlen = strlen($str);
        // $replace= [
        //     '\\'=>'\\\\',
        // ];
        for ($i = 0; $i < $strlen; $i++) {
            $j       = $i % $keylen;
            $x       = $str[$i] ^ $xorkey[$j] ^ chr($i);
            $str[$i] = $x;
        }
        // $str = str_replace(array_keys($replace), array_values($replace), $str);
        return $str;
    }
}
