<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\DataProvider\Test\International;

use Flexic\DataProvider\Test\AbstractTestCase;
use Flexic\DataProvider\Test\TestUtil;

/**
 * @internal
 *
 * @covers \Flexic\DataProvider\International\CountryCodeAlpha2Provider
 */
final class CountryCodeAlpha2ProviderTest extends AbstractTestCase
{
    public function testArbitrary(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\International\CountryCodeAlpha2Provider::arbitrary());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertLength(2, $value);
        self::assertMatchesRegularExpression('/[A-Z]{2}/', $value);
    }

    public function testAfrica(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\International\CountryCodeAlpha2Provider::africa());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertLength(2, $value);
        self::assertMatchesRegularExpression('/[A-Z]{2}/', $value);
    }

    public function testAsia(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\International\CountryCodeAlpha2Provider::asia());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertLength(2, $value);
        self::assertMatchesRegularExpression('/[A-Z]{2}/', $value);
    }

    public function testEurope(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\International\CountryCodeAlpha2Provider::europe());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertLength(2, $value);
        self::assertMatchesRegularExpression('/[A-Z]{2}/', $value);
    }

    public function testAmerica(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\International\CountryCodeAlpha2Provider::america());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertLength(2, $value);
        self::assertMatchesRegularExpression('/[A-Z]{2}/', $value);
    }

    public function testOceania(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\International\CountryCodeAlpha2Provider::oceania());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertLength(2, $value);
        self::assertMatchesRegularExpression('/[A-Z]{2}/', $value);
    }

    public function testAntarctica(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\International\CountryCodeAlpha2Provider::antarctica());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertLength(2, $value);
        self::assertMatchesRegularExpression('/[A-Z]{2}/', $value);
    }

    public function testAustralia(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\International\CountryCodeAlpha2Provider::australia());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertLength(2, $value);
        self::assertMatchesRegularExpression('/[A-Z]{2}/', $value);
        self::assertSame('AU', $value);
    }
}
