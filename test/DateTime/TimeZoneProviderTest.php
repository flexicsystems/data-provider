<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\DataProvider\Test\DateTime;

use Flexic\DataProvider\Test\AbstractTestCase;
use Flexic\DataProvider\Test\TestUtil;

/**
 * @internal
 *
 * @covers \Flexic\DataProvider\DateTime\TimeZoneProvider
 */
final class TimeZoneProviderTest extends AbstractTestCase
{
    public function testArbitrary(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\TimeZoneProvider::arbitrary());

        // ToDo

        self::assertIsString($value);
    }

    public function testAmerica(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\TimeZoneProvider::america());

        self::assertIsString($value);
        self::assertStringStartsWith('America/', $value);
        self::assertMatchesRegularExpression('/America\/(.*)+/', $value);
    }

    public function testEurope(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\TimeZoneProvider::europe());

        self::assertIsString($value);
        self::assertStringStartsWith('Europe/', $value);
        self::assertMatchesRegularExpression('/Europe\/(.*)+/', $value);
    }

    public function testAsia(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\TimeZoneProvider::asia());

        self::assertIsString($value);
        self::assertStringStartsWith('Asia/', $value);
        self::assertMatchesRegularExpression('/Asia\/(.*)+/', $value);
    }

    public function testAustralia(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\TimeZoneProvider::australia());

        self::assertIsString($value);
        self::assertStringStartsWith('Australia/', $value);
        self::assertMatchesRegularExpression('/Australia\/(.*)+/', $value);
    }

    public function testAfrica(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\TimeZoneProvider::africa());

        self::assertIsString($value);
        self::assertStringStartsWith('Africa/', $value);
        self::assertMatchesRegularExpression('/Africa\/(.*)+/', $value);
    }

    public function testIndian(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\TimeZoneProvider::indian());

        self::assertIsString($value);
        self::assertStringStartsWith('Indian/', $value);
        self::assertMatchesRegularExpression('/Indian\/(.*)+/', $value);
    }

    public function testPacific(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\TimeZoneProvider::pacific());

        self::assertIsString($value);
        self::assertStringStartsWith('Pacific/', $value);
        self::assertMatchesRegularExpression('/Pacific\/(.*)+/', $value);
    }

    public function testAntarctica(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\TimeZoneProvider::antarctica());

        self::assertIsString($value);
        self::assertStringStartsWith('Antarctica/', $value);
        self::assertMatchesRegularExpression('/Antarctica\/(.*)+/', $value);
    }

    public function testArctic(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\TimeZoneProvider::arctic());

        self::assertIsString($value);
        self::assertStringStartsWith('Arctic/', $value);
        self::assertMatchesRegularExpression('/Arctic\/(.*)+/', $value);
    }

    public function testAtlantic(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\TimeZoneProvider::atlantic());

        self::assertIsString($value);
        self::assertStringStartsWith('Atlantic/', $value);
        self::assertMatchesRegularExpression('/Atlantic\/(.*)+/', $value);
    }

    public function testUnspecified(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\TimeZoneProvider::unspecified());

        self::assertIsString($value);
        self::assertGreaterThan(0, \mb_strlen($value));
    }

    public function testUTC(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\TimeZoneProvider::utc());

        self::assertIsString($value);
    }
}
