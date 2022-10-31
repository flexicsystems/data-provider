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
 * @covers \Flexic\DataProvider\Internet\DomainProvider
 */
final class DomainProviderTest extends AbstractTestCase
{
    public function testArbitrary(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Internet\DomainProvider::arbitrary());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertStringContainsString('.', $value);
        self::assertStringNotContainsString('/', $value);
        self::assertStringNotContainsString('://', $value);
        self::assertMatchesRegularExpression('/^[a-z0-9.-]+\.[a-z]{2,4}$/', $value);
    }

    public function testDomain(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Internet\DomainProvider::domain());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertStringContainsString('.', $value);
        self::assertStringNotContainsString('/', $value);
        self::assertStringNotContainsString('://', $value);
        self::assertMatchesRegularExpression('/^[a-z0-9.-]+\.[a-z]{2,4}$/', $value);
    }

    public function testFreeEmail(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Internet\DomainProvider::freeEmail());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertStringContainsString('.', $value);
        self::assertStringNotContainsString('/', $value);
        self::assertStringNotContainsString('://', $value);
        self::assertMatchesRegularExpression('/^[a-z0-9.-]+\.[a-z]{2,4}$/', $value);
    }

    public function testSafeEmail(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Internet\DomainProvider::safeEmail());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertStringContainsString('.', $value);
        self::assertStringNotContainsString('/', $value);
        self::assertStringNotContainsString('://', $value);
        self::assertMatchesRegularExpression('/^[a-z0-9.-]+\.[a-z]{2,4}$/', $value);
    }

    public function testSocialMedia(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Internet\DomainProvider::socialMedia());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertStringContainsString('.', $value);
        self::assertStringNotContainsString('/', $value);
        self::assertStringNotContainsString('://', $value);
        self::assertMatchesRegularExpression('/^[a-z0-9.-]+\.[a-z]{2,4}$/', $value);
    }

    public function testDevelopment(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Internet\DomainProvider::development());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertStringContainsString('.', $value);
        self::assertStringNotContainsString('/', $value);
        self::assertStringNotContainsString('://', $value);
        self::assertMatchesRegularExpression('/^[a-z0-9.-]+\.[a-z]{2,4}$/', $value);
    }

    public function testSearch(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Internet\DomainProvider::search());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertStringContainsString('.', $value);
        self::assertStringNotContainsString('/', $value);
        self::assertStringNotContainsString('://', $value);
        self::assertMatchesRegularExpression('/^[a-z0-9.-]+\.[a-z]{2,4}$/', $value);
    }

    public function testShopping(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Internet\DomainProvider::shopping());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertStringContainsString('.', $value);
        self::assertStringNotContainsString('/', $value);
        self::assertStringNotContainsString('://', $value);
        self::assertMatchesRegularExpression('/^[a-z0-9.-]+\.[a-z]{2,4}$/', $value);
    }

    public function testCompany(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Internet\DomainProvider::company());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertStringContainsString('.', $value);
        self::assertStringNotContainsString('/', $value);
        self::assertStringNotContainsString('://', $value);
        self::assertMatchesRegularExpression('/^[a-z0-9.-]+\.[a-z]{2,4}$/', $value);
    }

    public function testEducation(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Internet\DomainProvider::education());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertStringContainsString('.', $value);
        self::assertStringNotContainsString('/', $value);
        self::assertStringNotContainsString('://', $value);
        self::assertMatchesRegularExpression('/^[a-z0-9.-]+\.[a-z]{2,4}$/', $value);
    }
}
