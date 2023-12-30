<?php

namespace Theposeidonas\LaravelEmojiParser;
use Illuminate\Support\Facades\Blade;

class EmojiBladeDirective
{
    /**
     * @return void
     */
    public static function register()
    {
        Blade::directive('emoji', function (string $expression) {
            return "<?php echo app('emoji.parser')->parse($expression); ?>";
        });
    }
}
