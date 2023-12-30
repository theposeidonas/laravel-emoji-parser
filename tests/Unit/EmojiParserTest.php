<?php

namespace Theposeidonas\LaravelEmojiParser\Tests\Unit;

use Orchestra\Testbench\TestCase;
use Theposeidonas\LaravelEmojiParser\EmojiParser;

class EmojiParserTest extends TestCase
{

    /**
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
    }

    /**
     * @param $app
     * @return string[]
     */
    protected function getPackageProviders($app)
    {
        return ['Theposeidonas\LaravelEmojiParser\EmojiServiceProvider'];
    }

    /**
     * @test
     */
    public function testEmojiParserReturnsCorrectEmoji()
    {
        $emojiParser = new EmojiParser();
        $this->assertEquals('😀', $emojiParser->parse('grinning_face'));
    }

    /**
     * @test
     */
    public function testEmojiParserHandlesUnknownEmoji()
    {
        $emojiParser = new EmojiParser();
        $this->assertEquals('unknown_emoji', $emojiParser->parse('unknown_emoji'));
    }
}