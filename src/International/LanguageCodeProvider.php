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

final class LanguageCodeProvider extends AbstractProvider
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
        $faker = self::faker();

        return [
            'language-code' => $faker->languageCode(),
        ];
    }
}
