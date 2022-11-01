<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\DataProvider\Test\Id;

use Flexic\DataProvider\Test\AbstractTestCase;
use Flexic\DataProvider\Test\TestUtil;
use PHPUnit\Framework\Constraint\IsIdentical;

/**
 * @internal
 *
 * @covers \Flexic\DataProvider\Id\NanoIdProvider
 */
final class NanoIdProviderTest extends AbstractTestCase
{
    public function testArbitrary(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Id\NanoIdProvider::arbitrary());

        self::assertIsString($value);
        self::assertNotEmpty($value);
        self::assertStringContainsOnly('/[a-zA-Z0-9]/', $value);
        self::assertThat(
            \mb_strlen($value),
            self::logicalOr(
                new IsIdentical(10),
                new IsIdentical(21),
                new IsIdentical(42),
            ),
        );
    }

    public function testNormal(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Id\NanoIdProvider::normal());

        self::assertIsString($value);
        self::assertNotEmpty($value);
        self::assertStringContainsOnly('/[a-zA-Z0-9]/', $value);
        self::assertLength(21, $value);
    }

    public function testDynamic(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Id\NanoIdProvider::dynamic());

        self::assertIsString($value);
        self::assertNotEmpty($value);
        self::assertStringContainsOnly('/[a-zA-Z0-9]/', $value);
        self::assertLength(21, $value);
    }

    public function testNormalShort(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Id\NanoIdProvider::normalShort());

        self::assertIsString($value);
        self::assertNotEmpty($value);
        self::assertStringContainsOnly('/[a-zA-Z0-9]/', $value);
        self::assertLength(10, $value);
    }

    public function testDynamicShort(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Id\NanoIdProvider::dynamicShort());

        self::assertIsString($value);
        self::assertNotEmpty($value);
        self::assertStringContainsOnly('/[a-zA-Z0-9]/', $value);
        self::assertLength(10, $value);
    }

    public function testNormalLong(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Id\NanoIdProvider::normalLong());

        self::assertIsString($value);
        self::assertNotEmpty($value);
        self::assertStringContainsOnly('/[a-zA-Z0-9]/', $value);
        self::assertLength(42, $value);
    }

    public function testDynamicLong(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Id\NanoIdProvider::dynamicLong());

        self::assertIsString($value);
        self::assertNotEmpty($value);
        self::assertStringContainsOnly('/[a-zA-Z0-9]/', $value);
        self::assertLength(42, $value);
    }
}
