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

        yield from self::provideDataForValues([
            'email' => $faker->email(),
        ]);
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function safeEmail(): \Generator
    {
        $faker = self::faker();

        yield from self::provideDataForValues([
            'safe-email' => $faker->safeEmail(),
        ]);
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function freeEmail(): \Generator
    {
        $faker = self::faker();

        yield from self::provideDataForValues([
            'free-email' => $faker->freeEmail(),
        ]);
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function companyEmail(): \Generator
    {
        $faker = self::faker();

        yield from self::provideDataForValues([
            'company-email' => $faker->companyEmail(),
        ]);
    }
}