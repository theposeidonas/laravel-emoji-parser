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
        Blade::directive('emoji', function ($expression) {
            $emojiParser = app('emoji.parser');
            $emoji = $emojiParser->parse($expression);

            return "<?php echo '{$emoji}'; ?>";
        });
    }
}