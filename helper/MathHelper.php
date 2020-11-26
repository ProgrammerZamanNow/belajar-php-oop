<?php

namespace Helper;

class MathHelper
{
    static public string $name = "MathHelper";

    static public function sum(int...$numbers): int
    {
        $total = 0;
        foreach ($numbers as $number) {
            $total += $number;
        }
        return $total;
    }
}
