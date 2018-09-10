<?php

namespace Huangdijia\XorEncryption;

use Illuminate\Support\ServiceProvider;

class XorEncryptionServiceProvider extends ServiceProvider
{
    protected $defer = true;

    public function register()
    {
        $this->app->singleton('hashing.xorencryption', function () {
            $key = config('app.key');
            return new XorEncryption($key);
        });
    }

    public function provides()
    {
        return 'hashing.xorencryption';
    }
}