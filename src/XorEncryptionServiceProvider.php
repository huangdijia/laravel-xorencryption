<?php

namespace Huangdijia\XorEncryption;

use Illuminate\Support\ServiceProvider;

class XorEncryptionServiceProvider extends ServiceProvider
{
    protected $defer = true;

    public function register()
    {
        $this->app->singleton(Encrypter::class, function($app) {
            return new Encrypter($app->config['app.key']);
        });
    }

    public function provides()
    {
        return [
            Encrypter::class
        ];
    }
}
