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

final class DomainProvider extends AbstractProvider
{
    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function scheme(): \Generator
    {
        $values = [
            'scheme-http' => 'http',
            'scheme-https' => 'https',
        ];

        yield from self::provideDataForValues($values);
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function domain(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key) {
            return 'domain' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function tld(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key) {
            return 'domain-tld' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function domainWord(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key) {
            return 'domain-word' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function url(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key) {
            return 'domain-url' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function slug(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key) {
            return 'domain-slug' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function freeEmailDomain(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key) {
            return 'domain-free-email' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function safeEmailDomain(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key) {
            return 'domain-safe-email' === $key;
        });
    }

    public static function values(): array
    {
        $faker = self::faker();

        return [
            'domain' => $faker->domainName(),
            'domain-tld' => $faker->tld(),
            'domain-word' => $faker->domainWord(),
            'domain-url' => $faker->url(),
            'domain-slug' => $faker->slug(),
            'domain-free-email' => $faker->freeEmailDomain(),
            'domain-safe-email' => $faker->safeEmailDomain(),
        ];
    }
}
