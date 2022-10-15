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

use Flexic\DataProvider\Test\TestUtil;
use PHPUnit\Framework;

/**
 * @internal
 *
 * @covers \Flexic\DataProvider\Payment\IbanProvider
 */
final class IbanProviderTest extends Framework\TestCase
{
    public function testArbitraryProvidesString(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Payment\IbanProvider::arbitrary());
        self::assertIsString($value);
        self::assertMatchesRegularExpression('/[A-Z]{2}[0-9]+/', $value);
    }

    public function testInvalidProvidesInvalidIban(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Payment\IbanProvider::invalid());
        self::assertNotEmpty($value);
        self::assertLessThanOrEqual(34, \mb_strlen($value));
        self::assertStringStartsWith('US', $value);
    }

    public function testValidProvidesValidIban(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Payment\IbanProvider::valid());
        self::assertNotEmpty($value);
        self::assertLessThanOrEqual(34, \mb_strlen($value));
        self::assertStringStartsNotWith('US', $value);
    }
}
