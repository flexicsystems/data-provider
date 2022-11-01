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
 * @covers \Flexic\DataProvider\Payment\CreditCardExpirationProvider
 */
final class CreditCardExpirationProviderTest extends AbstractTestCase
{
    public function testArbitrary(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Payment\CreditCardExpirationProvider::arbitrary());

        self::assertIsString($value);
        self::assertMatchesRegularExpression('/^([0-9]{2}\/[0-9]{2})$/', $value);
    }

    public function testValid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Payment\CreditCardExpirationProvider::valid());

        self::assertIsString($value);
        self::assertMatchesRegularExpression('/^([0-9]{2}\/[0-9]{2})$/', $value);

        $parts = \explode('/', $value);
        $actual = new \DateTimeImmutable('now');

        self::assertGreaterThanOrEqual((int) $actual->format('y'), (int) $parts[1]);
    }

    public function testExpired(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Payment\CreditCardExpirationProvider::expired());

        self::assertIsString($value);
        self::assertMatchesRegularExpression('/^([0-9]{2}\/[0-9]{2})$/', $value);

        $parts = \explode('/', $value);
        $actual = new \DateTimeImmutable('now');

        self::assertLessThan((int) $actual->format('y'), (int) $parts[1]);
    }
}
