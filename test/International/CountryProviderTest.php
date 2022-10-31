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
 * @covers \Flexic\DataProvider\International\CountryProvider
 */
final class CountryProviderTest extends AbstractTestCase
{
    public function testArbitrary(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\International\CountryProvider::arbitrary());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertGreaterThan(1, \mb_strlen($value));
    }

    public function testAfrica(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\International\CountryProvider::africa());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertGreaterThan(1, \mb_strlen($value));
    }

    public function testAsia(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\International\CountryProvider::asia());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertGreaterThan(1, \mb_strlen($value));
    }

    public function testEurope(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\International\CountryProvider::europe());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertGreaterThan(1, \mb_strlen($value));
    }

    public function testAmerica(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\International\CountryProvider::america());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertGreaterThan(1, \mb_strlen($value));
    }

    public function testOceania(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\International\CountryProvider::oceania());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertGreaterThan(1, \mb_strlen($value));
    }

    public function testAntarctica(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\International\CountryProvider::antarctica());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertGreaterThan(1, \mb_strlen($value));
    }

    public function testAustralia(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\International\CountryProvider::australia());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertGreaterThan(1, \mb_strlen($value));
        self::assertSame('Australia', $value);
    }
}
