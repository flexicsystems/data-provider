<?php

namespace Flexic\DataProvider\Security;

use Flexic\DataProvider\AbstractProvider;
use Flexic\DataProvider\Generator\UsernameGenerator;

class UsernameProvider extends AbstractProvider
{
    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function arbitrary(): \Generator
    {
        yield from self::provideDataForValues(self::values());
    }

    public static function values(): array
    {
        return [
            'username' => UsernameGenerator::generate()
        ];
    }
}