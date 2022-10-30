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
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'uuid-v1' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function v3(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'uuid-v3' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function v4(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'uuid-v4' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function v5(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'uuid-v5' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function v6(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'uuid-v6' === $key;
        });
    }

    public static function values(): array
    {
        $faker = self::faker();

        return [
            'uuid-v1' => (new Uid\UuidV1())->toRfc4122(),
            'uuid-v3' => (new Uid\UuidV3($faker->uuid))->toRfc4122(),
            'uuid-v4' => (new Uid\UuidV4())->toRfc4122(),
            'uuid-v5' => Uid\Uuid::v5(
                Uid\Uuid::v4(),
                $faker->domainWord,
            )->toRfc4122(),
            'uuid-v6' => (new Uid\UuidV6())->toRfc4122(),
        ];
    }
}
