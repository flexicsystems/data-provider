<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\DataProvider\Test\Code;

use Flexic\DataProvider\Test\AbstractTestCase;
use Flexic\DataProvider\Test\TestUtil;
use PHPUnit\Framework\Constraint\StringStartsWith;

/**
 * @internal
 *
 * @covers \Flexic\DataProvider\Code\SqlProvider
 * @covers \Flexic\DataProvider\Generator\AbstractGenerator
 * @covers \Flexic\DataProvider\Generator\SqlGenerator
 */
final class SqlProviderTest extends AbstractTestCase
{
    public function testArbitrary(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Code\SqlProvider::arbitrary());

        self::assertIsString($value);
        self::assertNotEmpty($value);
        self::assertIsSql($value);
    }

    public function testSelect(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Code\SqlProvider::select());

        self::assertIsString($value);
        self::assertNotEmpty($value);
        self::assertIsSql($value);
        self::assertStringStartsWith('SELECT', $value);
        self::assertMatchesRegularExpression('/^(SELECT(.*)FROM(.*))$/i', $value);
    }

    public function testInsert(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Code\SqlProvider::insert());

        self::assertIsString($value);
        self::assertNotEmpty($value);
        self::assertIsSql($value);
        self::assertStringStartsWith('INSERT', $value);
        self::assertMatchesRegularExpression('/^(INSERT INTO(.*)VALUES \((.*)\))$/i', $value);
    }

    public function testUpdate(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Code\SqlProvider::update());

        self::assertIsString($value);
        self::assertNotEmpty($value);
        self::assertIsSql($value);
        self::assertStringStartsWith('UPDATE', $value);
        self::assertMatchesRegularExpression('/^(UPDATE (.*) SET (.*))$/i', $value);
    }

    public function testDelete(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Code\SqlProvider::delete());

        self::assertIsString($value);
        self::assertNotEmpty($value);
        self::assertIsSql($value);
        self::assertStringStartsWith('DELETE', $value);
        self::assertMatchesRegularExpression('/^(DELETE FROM (.*))$/i', $value);
    }

    public function testCreate(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Code\SqlProvider::create());

        self::assertIsString($value);
        self::assertNotEmpty($value);
        self::assertIsSql($value);
        self::assertStringStartsWith('CREATE', $value);
        self::assertMatchesRegularExpression('/^(CREATE TABLE (.*) \((.*)\))$/i', $value);
    }

    public function testDrop(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Code\SqlProvider::drop());

        self::assertIsString($value);
        self::assertNotEmpty($value);
        self::assertIsSql($value);
        self::assertStringStartsWith('DROP', $value);
        self::assertMatchesRegularExpression('/^DROP\s+TABLE\s+\w+$/i', $value);
    }

    public function testAlter(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Code\SqlProvider::alter());

        self::assertIsString($value);
        self::assertNotEmpty($value);
        self::assertIsSql($value);
        self::assertStringStartsWith('ALTER', $value);
        self::assertMatchesRegularExpression('/^(ALTER TABLE (.*))$/i', $value);
    }

    public function testTruncate(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Code\SqlProvider::truncate());

        self::assertIsString($value);
        self::assertNotEmpty($value);
        self::assertIsSql($value);
        self::assertStringStartsWith('TRUNCATE', $value);
        self::assertMatchesRegularExpression('/^TRUNCATE\s+TABLE\s+\w+$/i', $value);
    }

    public static function assertIsSql($actual, string $message = ''): void
    {
        self::assertThat(
            $actual,
            self::logicalOr(
                new StringStartsWith('SELECT'),
                new StringStartsWith('INSERT'),
                new StringStartsWith('UPDATE'),
                new StringStartsWith('DELETE'),
                new StringStartsWith('CREATE'),
                new StringStartsWith('DROP'),
                new StringStartsWith('ALTER'),
                new StringStartsWith('TRUNCATE'),
            ),
            $message,
        );
    }
}
