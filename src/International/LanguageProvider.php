<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\DataProvider\International;

use Flexic\DataProvider\AbstractProvider;

final class LanguageProvider extends AbstractProvider
{
    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function locale(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'locale' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function languageCode(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'language-code' === $key;
        });
    }

    public static function values(): array
    {
        $faker = self::faker();

        return [
            'locale' => $faker->locale(),
            'language-code' => $faker->languageCode(),
        ];
    }
}
