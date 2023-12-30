<?php
namespace Theposeidonas\LaravelEmojiParser;

class EmojiParser
{
    protected $emojiMap;

    /**
     * Construct
     */
    public function __construct()
    {
        $this->emojiMap = $this->loadEmojiMap();
    }

    /**
     * Parse name and find emoji
     *
     * @param $name
     * @return mixed
     */
    public function parse($name)
    {
        foreach ($this->emojiMap as $emojiData) {
            if ($name === $emojiData['slug']) {
                return $emojiData['char'];
            }
            elseif (in_array($name, $emojiData['keywords'])) {
                return $emojiData['char'];
            }
        }

        return $name;
    }

    /**
     * Load JSON file
     *
     * @return array|mixed
     */
    protected function loadEmojiMap()
    {
        $emojiMapJson = file_get_contents(__DIR__ . '/resources/emoji.json');
        $emojiMap = json_decode($emojiMapJson, true);

        return $emojiMap ?: [];
    }
}