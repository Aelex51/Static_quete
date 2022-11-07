<?php

class Speedometer
{
    public const converter = 1.609344;

    public static function convertMilesToKm(int $speed)
    {
        $finalSpeed = $speed * self::converter;
        return round($finalSpeed, 2);
    }

    public static function convertKmToMiles(int $speed)
    {
       $finalSpeed = $speed / self::converter;
       return round($finalSpeed, 2);
    }
}
