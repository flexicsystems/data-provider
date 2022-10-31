<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\DataProvider\Test\Payment;

use Flexic\DataProvider\Test\AbstractTestCase;
use Flexic\DataProvider\Test\TestUtil;

/**
 * @internal
 *
 * @covers \Flexic\DataProvider\Payment\SwiftBicProvider
 */
final class SwiftBicProviderTest extends AbstractTestCase
{
    public function testArbitrary(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Payment\SwiftBicProvider::arbitrary());

        self::assertIsString($value);
        self::assertNotEmpty($value);
        self::assertLessThanOrEqual(11, \mb_strlen($value));
    }

    public function testInvalid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Payment\SwiftBicProvider::invalid());

        self::assertIsString($value);
        self::assertNotEmpty($value);
        self::assertLength(7, $value);
    }

    public function testValid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Payment\SwiftBicProvider::valid());

        self::assertIsString($value);
        self::assertNotEmpty($value);
        self::assertIsNumberBetween(8, 11, \mb_strlen($value));
    }
}
