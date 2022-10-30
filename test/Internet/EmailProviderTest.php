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

        self::assertStringContainsString('@', $value);
        self::assertMatchesRegularExpression('/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/', $value);
    }

    public function testEmail(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Internet\EmailProvider::email());

        self::assertStringContainsString('@', $value);
        self::assertMatchesRegularExpression('/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/', $value);
    }

    public function testSafeEmail(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Internet\EmailProvider::safeEmail());

        self::assertStringContainsString('@', $value);
        self::assertMatchesRegularExpression('/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/', $value);
    }

    public function testFreeEmail(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Internet\EmailProvider::freeEmail());

        self::assertStringContainsString('@', $value);
        self::assertMatchesRegularExpression('/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/', $value);
    }

    public function testCompanyEmail(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Internet\EmailProvider::companyEmail());

        self::assertStringContainsString('@', $value);
        self::assertMatchesRegularExpression('/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/', $value);
    }
}
