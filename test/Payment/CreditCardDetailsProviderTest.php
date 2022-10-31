<?php

namespace Flexic\DataProvider\Test\Payment;

use Flexic\DataProvider\Test\AbstractTestCase;
use Flexic\DataProvider\Test\TestUtil;

/**
 * @internal
 *
 * @covers \Flexic\DataProvider\Payment\CreditCardDetailsProvider
 */
class CreditCardDetailsProviderTest extends AbstractTestCase
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