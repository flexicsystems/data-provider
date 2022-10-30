<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\DataProvider\Internet;

use Flexic\DataProvider\AbstractProvider;

final class UrlProvider extends AbstractProvider
{
    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function arbitrary(): \Generator
    {
        yield from self::provideDataForValues(self::values());
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function arbitraryWithSuffix(): \Generator
    {
        yield from self::provideDataForValues(self::values(true, false));
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function arbitraryWithQuery(): \Generator
    {
        yield from self::provideDataForValues(self::values(false, true));
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function arbitraryWithSuffixAndQuery(): \Generator
    {
        yield from self::provideDataForValues(self::values(true, true));
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function short(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(false, false), static function (string $key) {
            return 'url-short' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function normal(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(false, false), static function (string $key) {
            return 'url-normal' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function long(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(false, false), static function (string $key) {
            return 'url-long' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function veryLong(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(false, false), static function (string $key) {
            return 'url-very-long' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function extremeLong(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(false, false), static function (string $key) {
            return 'url-extreme-long' === $key;
        });
    }

    public static function values(
        bool $suffix = false,
        bool $queryParameter = false,
    ): array {
        return [
            'url-short' => self::random(1, $suffix, $queryParameter),
            'url-normal' => self::random(5, $suffix, $queryParameter),
            'url-long' => self::random(10, $suffix, $queryParameter),
            'url-very-long' => self::random(20, $suffix, $queryParameter),
            'url-extreme-long' => self::random(50, $suffix, $queryParameter),
        ];
    }

    public static function random(
        int $length,
        bool $suffix = false,
        bool $queryParameter = false,
    ): string {
        $faker = self::faker();

        $pathParts = [];

        for ($i = 0; $i < $length; ++$i) {
            $pathParts[] = $faker->randomElement([
                $faker->word(),
                $faker->slug(),
                $faker->uuid(),
            ]);
        }

        return \sprintf(
            '%s://%s/%s%s%s',
            ProtocolProvider::values()['protocol-http'],
            DomainProvider::values()['domain'],
            \implode('/', $pathParts),
            $suffix ? $faker->randomElement(['.html', '.php', '.js', '.css', '.pdf', '.jpg', '.png', '.gif']) : '',
            $queryParameter ? QueryProvider::random($faker->numberBetween(1, 10)) : '',
        );
    }
}
