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
}
