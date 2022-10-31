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
 * @covers \Flexic\DataProvider\Payment\CreditCardNumberProvider
 */
final class CreditCardNumberProviderTest extends AbstractTestCase
{
    public function testArbitrary(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Payment\CreditCardNumberProvider::arbitrary());

        self::assertStringContainsOnly('/[0-9]/', $value);
    }

    public function testVisa(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Payment\CreditCardNumberProvider::visa());

        self::assertStringContainsOnly('/[0-9]/', $value);
        self::assertLength(16, $value);
        self::assertThat(
            $value,
            self::logicalOr(
                self::stringStartsWith('4539'),
                self::stringStartsWith('4556'),
                self::stringStartsWith('4916'),
                self::stringStartsWith('4532'),
                self::stringStartsWith('4929'),
                self::stringStartsWith('40240071'),
                self::stringStartsWith('4485'),
                self::stringStartsWith('4716'),
                self::stringStartsWith('4'),
            )
        );
    }

    public function testMasterCard(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Payment\CreditCardNumberProvider::masterCard());

        self::assertStringContainsOnly('/[0-9]/', $value);
        self::assertLength(16, $value);
        self::assertThat(
            $value,
            self::logicalOr(
                self::stringStartsWith('2221'),
                self::stringStartsWith('23'),
                self::stringStartsWith('24'),
                self::stringStartsWith('25'),
                self::stringStartsWith('26'),
                self::stringStartsWith('2720'),
                self::stringStartsWith('51'),
                self::stringStartsWith('52'),
                self::stringStartsWith('53'),
                self::stringStartsWith('54'),
                self::stringStartsWith('55'),
            )
        );
    }

    public function testAmericanExpress(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Payment\CreditCardNumberProvider::americanExpress());

        self::assertStringContainsOnly('/[0-9]/', $value);
        self::assertLength(15, $value);
        self::assertThat(
            $value,
            self::logicalOr(
                self::stringStartsWith('34'),
                self::stringStartsWith('37'),
            )
        );
    }

    public function testDiscover(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Payment\CreditCardNumberProvider::discover());

        self::assertStringContainsOnly('/[0-9]/', $value);
        self::assertLength(16, $value);
        self::assertThat(
            $value,
            self::logicalOr(
                self::stringStartsWith('6011'),
            )
        );
    }

    public function testJcb(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Payment\CreditCardNumberProvider::jcb());

        self::assertStringContainsOnly('/[0-9]/', $value);
        self::assertLength(16, $value);
        self::assertThat(
            $value,
            self::logicalOr(
                self::stringStartsWith('3528'),
                self::stringStartsWith('3528'),
            )
        );
    }
}
