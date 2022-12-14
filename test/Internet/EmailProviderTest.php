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
 * @covers \Flexic\DataProvider\Internet\EmailProvider
 */
final class EmailProviderTest extends AbstractTestCase
{
    public function testArbitrary(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Internet\EmailProvider::arbitrary());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertStringContainsString('@', $value);
        self::assertMatchesRegularExpression('/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/', $value);
    }

    public function testRandom(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Internet\EmailProvider::random());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertStringContainsString('@', $value);
        self::assertMatchesRegularExpression('/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/', $value);
    }

    public function testSafe(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Internet\EmailProvider::safe());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertStringContainsString('@', $value);
        self::assertMatchesRegularExpression('/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/', $value);
    }

    public function testFree(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Internet\EmailProvider::free());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertStringContainsString('@', $value);
        self::assertMatchesRegularExpression('/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/', $value);
    }

    public function testCompany(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Internet\EmailProvider::company());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertStringContainsString('@', $value);
        self::assertMatchesRegularExpression('/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/', $value);
    }
}
