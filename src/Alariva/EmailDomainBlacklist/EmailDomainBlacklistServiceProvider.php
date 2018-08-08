<?php

namespace Alariva\EmailDomainBlacklist;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class EmailDomainBlacklistServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadJSONTranslationsFrom(__DIR__.'/../../../lang', 'email-domain-blacklist');

        $this->publishes([
            __DIR__.'/../../../lang' => resource_path('lang/vendor/email-domain-blacklist'),
        ]);

        // Add custom validation rules
        Validator::extend('blacklist', "Alariva\EmailDomainBlacklist\Validator@validate");
        // Add custom validation messages
        Validator::replacer('blacklist', "Alariva\EmailDomainBlacklist\Validator@message");
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../../../config/validation.php', 'validation'
        );
    }
}