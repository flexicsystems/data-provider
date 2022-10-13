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
        $faker = self::faker();

        yield from self::provideDataForValues([
            'domain' => $faker->domainName(),
        ]);
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function tld(): \Generator
    {
        $faker = self::faker();

        yield from self::provideDataForValues([
            'domain-tld' => $faker->tld(),
        ]);
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function domainWord(): \Generator
    {
        $faker = self::faker();

        yield from self::provideDataForValues([
            'domain-word' => $faker->domainWord(),
        ]);
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function url(): \Generator
    {
        $faker = self::faker();

        yield from self::provideDataForValues([
            'domain-url' => $faker->url(),
        ]);
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function slug(): \Generator
    {
        $faker = self::faker();

        yield from self::provideDataForValues([
            'domain-slug' => $faker->slug(),
        ]);
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function freeEmailDomain(): \Generator
    {
        $faker = self::faker();

        yield from self::provideDataForValues([
            'domain-free-email' => $faker->freeEmailDomain(),
        ]);
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function safeEmailDomain(): \Generator
    {
        $faker = self::faker();

        yield from self::provideDataForValues([
            'domain-safe-email' => $faker->safeEmailDomain(),
        ]);
    }
}
