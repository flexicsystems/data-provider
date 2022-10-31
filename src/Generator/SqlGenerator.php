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

final class SqlGenerator extends AbstractGenerator
{
    public static function select(): string
    {
        $faker = self::faker();

        $fields = $faker->words($faker->randomNumber(1, 25), false);

        return \sprintf(
            'SELECT %s FROM %s%s',
            \implode(', ', $fields),
            $faker->word(),
            $faker->boolean() ? \sprintf(' %s', self::where($fields)) : '',
        );
    }

    public static function insert(): string
    {
        $faker = self::faker();

        $fields = $faker->words($faker->randomNumber(1, 25), false);

        return \sprintf(
            'INSERT INTO %s (%s) VALUES (%s)',
            $faker->word(),
            \implode(', ', $fields),
            \implode(', ', \array_map(static function (string $field) use ($faker) {
                return $faker->boolean() ? \sprintf('\'%s\'', $faker->word()) : $faker->randomNumber();
            }, $fields)),
        );
    }

    public static function update(): string
    {
        $faker = self::faker();

        $fields = $faker->words($faker->randomNumber(1, 25), false);

        return \sprintf(
            'UPDATE %s SET %s%s',
            $faker->word(),
            \implode(', ', \array_map(static function (string $field) use ($faker) {
                return \sprintf('%s = %s', $field, $faker->boolean() ? \sprintf('\'%s\'', $faker->word()) : $faker->randomNumber());
            }, $fields)),
            $faker->boolean() ? \sprintf(' %s', self::where($fields)) : '',
        );
    }

    public static function delete(): string
    {
        $faker = self::faker();

        $fields = $faker->words($faker->randomNumber(1, 25), false);

        return \sprintf(
            'DELETE FROM %s%s',
            $faker->word(),
            $faker->boolean() ? \sprintf(' %s', self::where($fields)) : '',
        );
    }

    public static function create(): string
    {
        $faker = self::faker();

        $fields = $faker->words($faker->randomNumber(1, 25), false);

        return \sprintf(
            'CREATE TABLE %s (%s)',
            $faker->word(),
            \implode(', ', \array_map(static function (string $field) use ($faker) {
                return \sprintf('%s %s', $field, $faker->randomElement(['INT', 'VARCHAR(255)', 'TEXT']));
            }, $fields)),
        );
    }

    public static function drop(): string
    {
        $faker = self::faker();

        return \sprintf(
            'DROP TABLE %s',
            $faker->word(),
        );
    }

    public static function alter(): string
    {
        $faker = self::faker();

        return \sprintf(
            'ALTER TABLE %s ADD %s %s',
            $faker->word(),
            $faker->word(),
            $faker->randomElement(['INT', 'VARCHAR(255)', 'TEXT']),
        );
    }

    public static function truncate(): string
    {
        $faker = self::faker();

        return \sprintf(
            'TRUNCATE TABLE %s',
            $faker->word(),
        );
    }

    protected static function where(array $fields = []): string
    {
        $faker = self::faker();

        return \sprintf(
            'WHERE %s',
            \implode(' AND ', \array_map(static function (string $field) use ($faker) {
                $type = $faker->randomElement(['string', 'number', 'boolean', 'null', 'array', 'string-like']);

                switch ($type) {
                    case 'string':
                        $value = \sprintf('\'%s\'', $faker->word());
                        $operator = $faker->randomElement(['=', '!=']);

                        break;

                    case 'string-like':
                        $value = \sprintf('\'%%%s%%\'', $faker->word());
                        $operator = $faker->randomElement(['LIKE', 'NOT LIKE']);

                        break;

                    case 'number':
                        $value = $faker->randomNumber();
                        $operator = $faker->randomElement(['=', '!=', '>', '>=', '<', '<=']);

                        break;

                    case 'boolean':
                        $value = $faker->boolean();
                        $operator = $faker->randomElement(['=', '!=']);

                        break;

                    case 'null':
                        $value = 'NULL';
                        $operator = $faker->randomElement(['IS', 'IS NOT']);

                        break;

                    case 'array':
                        $value = \sprintf('(%s)', \implode(', ', $faker->words($faker->randomNumber(1, 5), false)));
                        $operator = $faker->randomElement(['IN', 'NOT IN']);

                        break;
                }

                return \sprintf('%s %s %s', $field, $operator, $value);
            }, $fields)),
        );
    }
}
