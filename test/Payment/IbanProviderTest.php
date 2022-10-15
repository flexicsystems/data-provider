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

use PHPUnit\Framework;

/**
 * @internal
 *
 * @covers \Flexic\DataProvider\Payment\IbanProvider
 */
final class IbanProviderTest extends Framework\TestCase
{
    /**
     * @dataProvider \Flexic\DataProvider\Payment\IbanProvider::arbitrary()
     *
     * @param mixed $value
     */
    public function testArbitraryProvidesString($value): void
    {
        self::assertIsString($value);
    }

    /**
     * @dataProvider \Flexic\DataProvider\Payment\IbanProvider::invalid()
     *
     * @param mixed $value
     */
    public function testInvalidProvidesInvalidIban($value): void
    {
        self::assertTrue(\mb_strlen($value) <= 22);
        self::assertSame(\mb_strpos($value, 'US'), 0);
    }

    /**
     * @dataProvider \Flexic\DataProvider\Payment\IbanProvider::valid()
     *
     * @param mixed $value
     */
    public function testValidProvidesValidIban($value): void
    {
        self::assertSame(\mb_strlen($value), 22);
        self::assertNotSame(\mb_strpos($value, 'US'), 0);
    }
}