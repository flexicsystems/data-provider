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
 * @covers \Flexic\DataProvider\Payment\CurrencyProvider
 */
final class CurrencyProviderTest extends AbstractTestCase
{
    public function testIfCurrencyIsValid(): void
    {
        $value = TestUtil::array(\Flexic\DataProvider\Payment\CurrencyProvider::currency());

        self::assertIsArray($value);
        self::assertCount(164, $value);

        foreach ($value as $currency) {
            self::assertNotEmpty($currency);
        }
    }

    public function testIfCurrencyCodeIsValid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Payment\CurrencyProvider::currencyCode());

        self::assertLength(3, $value);
        self::assertStringIsUppercase($value);
    }
}
