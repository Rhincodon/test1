<?php

namespace App;

trait RandomQuote
{
    /**
     * @var array
     */
    public static $quotes = [
        'The foot feels the foot when it feels the ground.',
        'It is better to travel well than to arrive.',
        'However many holy words you read, however many you speak, what good will they do you if you do not act on upon them?',
        'I never see what has been done; I only see what remains to be done.',
        'The only real failure in life is not to be true to the best one knows.',
    ];

    /**
     * @param string $name
     * @return string
     */
    public function say(string $name) : string
    {
        $quote = $this->getRandomQuote();
        $message = "Hi, $name! There is a new quote for you: $quote";

        echo $message;

        return $message;
    }

    /**
     * @return mixed
     */
    public static function getRandomQuote()
    {
        $randKey = array_rand(self::$quotes, 1);
        return self::$quotes[$randKey];
    }
}