<?php

namespace Marvel;

trait Welcomeable
{
    /**
     * @return string
     */
    public static function whoami() : string
    {
        $character = new \ReflectionClass(__CLASS__);
        $namespace = explode('\\', $character->getNamespaceName());
        $city = end($namespace);
        $welcomeMessage = "I'm {$character->getShortName()} from $city.\n";

        echo $welcomeMessage;

        return $welcomeMessage;
    }
}