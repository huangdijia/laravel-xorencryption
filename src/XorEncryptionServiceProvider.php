<?php

namespace Huangdijia\XorEncryption;

use Illuminate\Support\ServiceProvider;

class XorEncryptionServiceProvider extends ServiceProvider
{
    protected $defer = true;

    public function register()
    {
        $this->app->bind(Encrypter::class, function($app) {
            return new Encrypter($app['config']->get('app.key'));
        });
    }

    public function provides()
    {
        return [
            Encrypter::class
        ];
    }
}
