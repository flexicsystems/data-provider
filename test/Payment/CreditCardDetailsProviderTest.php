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

/**
 * @internal
 *
 * @covers \Flexic\DataProvider\Payment\CreditCardDetailsProvider
 */
final class CreditCardDetailsProviderTest extends AbstractTestCase
{
    public function testArbitrary(): void
    {
        $value = \Flexic\DataProvider\Payment\CreditCardDetailsProvider::arbitrary()->current()[0];

        self::assertIsArray($value);
        self::assertArrayHasKey('type', $value);
        self::assertArrayHasKey('number', $value);
        self::assertArrayHasKey('name', $value);
        self::assertArrayHasKey('expirationDate', $value);
    }

    public function testValid(): void
    {
        $value = \Flexic\DataProvider\Payment\CreditCardDetailsProvider::valid()->current()[0];

        self::assertIsArray($value);
        self::assertArrayHasKey('type', $value);
        self::assertArrayHasKey('number', $value);
        self::assertArrayHasKey('name', $value);
        self::assertArrayHasKey('expirationDate', $value);
    }

    public function testInvalid(): void
    {
        $value = \Flexic\DataProvider\Payment\CreditCardDetailsProvider::invalid()->current()[0];

        self::assertIsArray($value);
        self::assertArrayHasKey('type', $value);
        self::assertArrayHasKey('number', $value);
        self::assertArrayHasKey('name', $value);
        self::assertArrayHasKey('expirationDate', $value);
    }
}
