<?php

function triangleNumbers($count = 15)
{
    for ($i = 1; $i <= $count; $i++) {
        $number = $i * ($i + 1) / 2;
        yield $number;
    }
}
