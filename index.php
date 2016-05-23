<?php

require __DIR__.'/vendor/autoload.php';

// \Marvel\Asgard\Thor::whoami();
// \Marvel\England\CaptainBritain::whoami();
// \Marvel\Illinois\Beast::whoami();
// \Marvel\NewJersey\Wasp::whoami();
// \Marvel\NewJersey\WonderMan::whoami();
// \Marvel\NewYork\HankPym::whoami();
// \Marvel\NewYork\IronMan::whoami();

// (new App\Greeting())->say("Denis");

// $generator = triangleNumbers();
// foreach ($generator as $number) {
//     echo "$number\n";
// }

(new App\Application())->run();