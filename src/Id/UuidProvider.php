<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\DataProvider\Id;

use Flexic\DataProvider\AbstractProvider;
use Symfony\Component\Uid;

final class UuidProvider extends AbstractProvider
{
    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function v1(): \Generator
    {
        yield from self::provideDataForValues([
            'uuid-v1' => (new Uid\UuidV1())->toRfc4122(),
        ]);
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function v3(): \Generator
    {
        $faker = self::faker();

        yield from self::provideDataForValues([
            'uuid-v3' => (new Uid\UuidV3($faker->uuid))->toRfc4122(),
        ]);
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function v4(): \Generator
    {
        yield from self::provideDataForValues([
            'uuid-v4' => (new Uid\UuidV4())->toRfc4122(),
        ]);
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function v5(): \Generator
    {
        $faker = self::faker();

        yield from self::provideDataForValues([
            'uuid-v5' => (new Uid\UuidV5($faker->uuid))->toRfc4122(),
        ]);
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function v6(): \Generator
    {
        yield from self::provideDataForValues([
            'uuid-v6' => (new Uid\UuidV6())->toRfc4122(),
        ]);
    }
}