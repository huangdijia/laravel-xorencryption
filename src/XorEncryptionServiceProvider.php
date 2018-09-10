<?php

namespace Huangdijia\XorEncryption;

use Illuminate\Support\ServiceProvider;

class XorEncryptionServiceProvider extends ServiceProvider
{
    protected $defer = true;

    public function register()
    {
        $this->app->singleton('hashing.xorencrypter', function () {
            $key = config('app.key');
            return new Encrypter($key);
        });
    }

    public function provides()
    {
        return ['hashing.xorencrypter'];
    }
}
