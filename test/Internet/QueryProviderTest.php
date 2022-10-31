<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\DataProvider\Test\Internet;

use Flexic\DataProvider\Test\AbstractTestCase;
use Flexic\DataProvider\Test\TestUtil;

/**
 * @internal
 *
 * @covers \Flexic\DataProvider\Internet\QueryProvider
 */
final class QueryProviderTest extends AbstractTestCase
{
    public function testArbitrary(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Internet\QueryProvider::arbitrary());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertStringStartsWith('?', $value);
        self::assertStringEndsNotWith('?', $value);
        self::assertStringEndsNotWith('&', $value);
        self::assertStringEndsNotWith('=', $value);
    }

    public function testVeryShort(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Internet\QueryProvider::veryShort());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertStringStartsWith('?', $value);
        self::assertStringEndsNotWith('?', $value);
        self::assertStringEndsNotWith('&', $value);
        self::assertStringEndsNotWith('=', $value);
        self::assertCount(1, \explode('&', \str_replace('?', ' ', $value)));
    }

    public function testShort(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Internet\QueryProvider::short());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertStringStartsWith('?', $value);
        self::assertStringEndsNotWith('?', $value);
        self::assertStringEndsNotWith('&', $value);
        self::assertStringEndsNotWith('=', $value);
        self::assertCount(3, \explode('&', \str_replace('?', ' ', $value)));
    }

    public function testNormal(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Internet\QueryProvider::normal());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertStringStartsWith('?', $value);
        self::assertStringEndsNotWith('?', $value);
        self::assertStringEndsNotWith('&', $value);
        self::assertStringEndsNotWith('=', $value);
        self::assertCount(5, \explode('&', \str_replace('?', ' ', $value)));
    }

    public function testLong(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Internet\QueryProvider::long());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertStringStartsWith('?', $value);
        self::assertStringEndsNotWith('?', $value);
        self::assertStringEndsNotWith('&', $value);
        self::assertStringEndsNotWith('=', $value);
        self::assertCount(10, \explode('&', \str_replace('?', ' ', $value)));
    }

    public function testVeryLong(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Internet\QueryProvider::veryLong());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertStringStartsWith('?', $value);
        self::assertStringEndsNotWith('?', $value);
        self::assertStringEndsNotWith('&', $value);
        self::assertStringEndsNotWith('=', $value);
        self::assertCount(25, \explode('&', \str_replace('?', ' ', $value)));
    }

    public function testExtremeLong(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Internet\QueryProvider::extremeLong());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertStringStartsWith('?', $value);
        self::assertStringEndsNotWith('?', $value);
        self::assertStringEndsNotWith('&', $value);
        self::assertStringEndsNotWith('=', $value);
        self::assertCount(50, \explode('&', \str_replace('?', ' ', $value)));
    }
}
