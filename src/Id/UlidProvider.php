<?php

namespace Flexic\DataProvider\Id;

use Flexic\DataProvider\AbstractProvider;
use Symfony\Component\Uid;

class UlidProvider extends AbstractProvider
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
            'ulid' => (new Uid\Ulid())->toRfc4122(),
        ];
    }
}