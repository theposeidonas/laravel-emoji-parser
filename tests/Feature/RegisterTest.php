<?php

namespace Theposeidonas\LaravelEmojiParser\Tests\Feature;

use Illuminate\Support\Facades\Blade;
use Orchestra\Testbench\TestCase;
use Theposeidonas\LaravelEmojiParser\EmojiServiceProvider;

class RegisterTest extends TestCase
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
    public function testEmojiParserIsRegistered()
    {
        $this->assertInstanceOf(
            \Theposeidonas\LaravelEmojiParser\EmojiParser::class,
            app('emoji.parser')
        );
    }

    /**
     * @test
     */
    public function testEmojiDirectiveIsRegistered()
    {
        $this->assertTrue(
            $this->app['blade.compiler']->getCustomDirectives()['emoji'] !== null
        );
    }

}
