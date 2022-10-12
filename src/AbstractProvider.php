<?php

namespace Flexic\DataProvider;

class AbstractProvider extends \Ergebnis\DataProvider\AbstractProvider
{
    public static function values(string $key, \Faker\Generator $faker, string $method, int $max = 15): array
    {
        $values = [];
        $i = 0;

        while(true) {
            $value = $faker->{$method}();

            if ($i >= $max || \in_array($value, $values)) {
                break;
            }

            $values[\sprintf('%s-%s', $key, $i)] = $value;
            $i++;
        }

        return $values;
    }
}