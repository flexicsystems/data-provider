<?php

namespace Flexic\DataProvider;

class EmailProvider extends AbstractProvider
{
    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function email(): \Generator
    {
        $faker = self::faker();

        yield from self::provideDataForValues(
            self::values('email', $faker, 'email')
        );
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function safeEmail(): \Generator
    {
        $faker = self::faker();

        yield from self::provideDataForValues(
            self::values('safe-email', $faker, 'safeEmail')
        );
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function freeEmail(): \Generator
    {
        $faker = self::faker();

        yield from self::provideDataForValues(
            self::values('free-email', $faker, 'freeEmail')
        );
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function companyEmail(): \Generator
    {
        $faker = self::faker();

        yield from self::provideDataForValues(
            self::values('company-email', $faker, 'companyEmail')
        );
    }
}