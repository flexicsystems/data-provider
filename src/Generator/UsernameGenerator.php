<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\DataProvider\Generator;

final class UsernameGenerator extends AbstractGenerator
{
    private static array $_dividers = ['.', '-', '_', ''];

    private static array $_formats = [
        '{{firstName}}{{divider}}{{lastName}}', '{{lastName}}.{{firstName}}',
        '{{firstNameTruncated}}{{divider}}{{lastName}}', '{{lastNameTruncated}}{{divider}}{{firstName}}',
        '{{firstNameTruncated}}{{divider}}{{lastNameTruncated}}', '{{lastNameTruncated}}{{divider}}{{firstNameTruncated}}',
        '{{firstNameTruncated}}{{number}}', '{{lastNameTruncated}}{{number}}',
        '{{firstName}}{{number}}', '{{lastName}}{{number}}',
        '{{firstNameTruncated}}{{divider}}{{lastNameTruncated}}{{number}}', '{{lastNameTruncated}}{{divider}}{{firstNameTruncated}}{{number}}',
    ];

    public static function generate(): string
    {
        return self::applyModifiers(self::faker()->randomElement(self::$_formats));
    }

    private static function applyModifiers(string $format): string
    {
        $_modifiers = [
            'firstName' => self::firstName(),
            'lastName' => self::lastName(),
            'firstNameTruncated' => self::firstName(true),
            'lastNameTruncated' => self::lastName(true),
            'number' => self::number(),
            'divider' => self::divider(),
        ];

        foreach ($_modifiers as $key => $value) {
            $format = \str_replace(\sprintf('{{%s}}', $key), $value, $format);
        }

        return $format;
    }

    private static function firstName(bool $truncate = false): string
    {
        $faker = self::faker();

        return $truncate ? \mb_substr($faker->firstName(), 0, $faker->numberBetween(3, 100)) : $faker->firstName();
    }

    private static function lastName(bool $truncate = false): string
    {
        $faker = self::faker();

        return $truncate ? \mb_substr($faker->lastName(), 0, $faker->numberBetween(3, 100)) : $faker->lastName();
    }

    private static function number(): int
    {
        return self::faker()->numberBetween(1, 9999);
    }

    private static function divider(): string
    {
        return self::faker()->randomElement(self::$_dividers);
    }
}
