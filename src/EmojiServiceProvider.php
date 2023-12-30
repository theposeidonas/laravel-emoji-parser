<?php

namespace Theposeidonas\LaravelEmojiParser;

use Illuminate\Support\ServiceProvider;
use Theposeidonas\LaravelEmojiParser\EmojiParser;


class EmojiServiceProvider extends ServiceProvider
{

    /**
     * @return void
     */
    public function register(): void
    {
        $this->app->singleton('emoji.parser', function () {
            return new EmojiParser();
        });

        EmojiBladeDirective::register();
    }
}