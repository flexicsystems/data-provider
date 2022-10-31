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
 * @covers \Flexic\DataProvider\International\CountryCodeAlpha3Provider
 */
final class CountryCodeAlpha3ProviderTest extends AbstractTestCase
{
    public function testArbitrary(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\International\CountryCodeAlpha3Provider::arbitrary());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertLength(3, $value);
        self::assertMatchesRegularExpression('/[A-Z]{3}/', $value);
    }

    public function testAfrica(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\International\CountryCodeAlpha3Provider::africa());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertLength(3, $value);
        self::assertMatchesRegularExpression('/[A-Z]{3}/', $value);
    }

    public function testAsia(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\International\CountryCodeAlpha3Provider::asia());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertLength(3, $value);
        self::assertMatchesRegularExpression('/[A-Z]{3}/', $value);
    }

    public function testEurope(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\International\CountryCodeAlpha3Provider::europe());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertLength(3, $value);
        self::assertMatchesRegularExpression('/[A-Z]{3}/', $value);
    }

    public function testAmerica(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\International\CountryCodeAlpha3Provider::america());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertLength(3, $value);
        self::assertMatchesRegularExpression('/[A-Z]{3}/', $value);
    }

    public function testOceania(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\International\CountryCodeAlpha3Provider::oceania());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertLength(3, $value);
        self::assertMatchesRegularExpression('/[A-Z]{3}/', $value);
    }

    public function testAntarctica(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\International\CountryCodeAlpha3Provider::antarctica());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertLength(3, $value);
        self::assertMatchesRegularExpression('/[A-Z]{3}/', $value);
    }

    public function testAustralia(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\International\CountryCodeAlpha3Provider::australia());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertLength(3, $value);
        self::assertMatchesRegularExpression('/[A-Z]{3}/', $value);
        self::assertSame('AUS', $value);
    }
}
