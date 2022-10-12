<?php

namespace Flexic\DataProvider;

class DomainProvider extends AbstractProvider
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

        yield from self::provideDataForValues(
            self::values('domain', $faker, 'domain')
        );
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function tld(): \Generator
    {
        $faker = self::faker();

        yield from self::provideDataForValues(
            self::values('domain-tld', $faker, 'tld')
        );
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function domainWord(): \Generator
    {
        $faker = self::faker();

        yield from self::provideDataForValues(
            self::values('domain-word', $faker, 'domainWord')
        );
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function url(): \Generator
    {
        $faker = self::faker();

        yield from self::provideDataForValues(
            self::values('domain-url', $faker, 'url')
        );
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function slug(): \Generator
    {
        $faker = self::faker();

        yield from self::provideDataForValues(
            self::values('domain-slug', $faker, 'slug')
        );
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function freeEmailDomain(): \Generator
    {
        $faker = self::faker();

        yield from self::provideDataForValues(
            self::values('domain-free-email', $faker, 'freeEmailDomain')
        );
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function safeEmailDomain(): \Generator
    {
        $faker = self::faker();

        yield from self::provideDataForValues(
            self::values('domain-safe-email', $faker, 'safeEmailDomain')
        );
    }
}