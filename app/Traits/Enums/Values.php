<?php

namespace App\Traits\Enums;

trait Values
{

    public static function values(): array
    {
        $options = [];

        foreach (self::cases() as $case) {
            $options[$case->value] = $case->key();
        }

        return $options;
    }
}