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
 * @covers \Flexic\DataProvider\Payment\CreditCardTypeProvider
 */
final class CreditCardTypeProviderTest extends AbstractTestCase
{
    public function testArbitrary(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Payment\CreditCardTypeProvider::arbitrary());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertGreaterThanOrEqual(3, \mb_strlen($value));
        self::assertStringContainsOnly('/[A-Za-z ]/', $value);
        self::assertContains($value, \Flexic\DataProvider\Payment\CreditCardTypeProvider::values());
    }
}
