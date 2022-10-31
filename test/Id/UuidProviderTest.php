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
use PHPUnit\Framework\Constraint\RegularExpression;

/**
 * @internal
 *
 * @covers \Flexic\DataProvider\Id\UuidProvider
 */
final class UuidProviderTest extends AbstractTestCase
{
    public function testArbitrary(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Id\UuidProvider::arbitrary());

        self::assertMatchesRegularExpression('/^[0-9A-Fa-z]{8}-[0-9A-Fa-z]{4}-[1-6][0-9A-Fa-f]{3}-[89ABab][0-9A-Fa-f]{3}-[0-9A-Fa-f]{12}$/i', $value);
    }

    public function testV1(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Id\UuidProvider::v1());

        self::assertIsUuid(1, $value);
    }

    public function testV3(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Id\UuidProvider::v3());

        self::assertIsUuid(3, $value);
    }

    public function testV4(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Id\UuidProvider::v4());

        self::assertIsUuid(4, $value);
    }

    public function testV5(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Id\UuidProvider::v5());

        self::assertIsUuid(5, $value);
    }

    public function testV6(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Id\UuidProvider::v6());

        self::assertIsUuid(6, $value);
    }

    public static function assertIsUuid(int $prefix, string $actual, string $message = ''): void
    {
        self::assertThat(
            $actual,
            new RegularExpression(
                \sprintf('/^[0-9A-Fa-z]{8}-[0-9A-Fa-z]{4}-%s[0-9A-Fa-f]{3}-[89ABab][0-9A-Fa-f]{3}-[0-9A-Fa-f]{12}$/i', $prefix),
            ),
            $message,
        );
    }
}
