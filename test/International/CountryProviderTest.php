<?php

namespace Flexic\DataProvider\Test\International;

use Flexic\DataProvider\Test\AbstractTestCase;
use Flexic\DataProvider\Test\TestUtil;

/**
 * @internal
 *
 * @covers \Flexic\DataProvider\International\CountryProvider
 */
class CountryProviderTest extends AbstractTestCase
{
    public function testCountry(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\International\CountryProvider::country());

        self::assertGreaterThan(0, $value);
    }

    public function testCountryCodeAlpha2(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\International\CountryProvider::countryCodeAlpha2());

        self::assertLength(2, $value);
        self::assertMatchesRegularExpression('/^[A-Z]{2}$/', $value);
    }

    public function testCountryCodeAlpha3(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\International\CountryProvider::countryCodeAlpha3());

        self::assertLength(3, $value);
        self::assertMatchesRegularExpression('/^[A-Z]{3}$/', $value);
    }
}