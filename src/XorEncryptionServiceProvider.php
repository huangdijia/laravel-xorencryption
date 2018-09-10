<?php

namespace Huangdijia\XorEncryption;

use Illuminate\Support\ServiceProvider;

class XorEncryptionServiceProvider extends ServiceProvider
{
    protected $defer = true;

    public function register()
    {
        $this->app->singleton('hashing.xorencrypter', function () {
            return new Encrypter(config('app.key'));
        });
    }

    public function provides()
    {
        return ['hashing.xorencrypter'];
    }
}
