<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\DataProvider\Test\Miscellaneous;

use Flexic\DataProvider\Test\AbstractTestCase;
use Flexic\DataProvider\Test\TestUtil;

/**
 * @internal
 *
 * @covers \Flexic\DataProvider\Miscellaneous\BarcodeProvider
 */
final class BarcodeProviderTest extends AbstractTestCase
{
    public function testEan13IsValid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Miscellaneous\BarcodeProvider::ean13());

        self::assertLength(13, $value);
        self::assertMatchesRegularExpression('/^[0-9]{13}$/', $value);
        self::assertStringContainsOnly('/[0-9]/i', $value);
    }

    public function testEan8IsValid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Miscellaneous\BarcodeProvider::ean8());

        self::assertLength(8, $value);
        self::assertMatchesRegularExpression('/^[0-9]{8}$/', $value);
        self::assertStringContainsOnly('/[0-9]/i', $value);
    }

    public function testIsbn10IsValid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Miscellaneous\BarcodeProvider::isbn10());

        self::assertLength(10, $value);
        self::assertMatchesRegularExpression('/^[0-9A-Za-z]{10}$/', $value);
        self::assertStringContainsOnly('/[0-9A-Za-z]/i', $value);
    }

    public function testIsbn13IsValid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Miscellaneous\BarcodeProvider::isbn13());

        self::assertLength(13, $value);
        self::assertMatchesRegularExpression('/^[0-9]{13}$/', $value);
        self::assertStringContainsOnly('/[0-9]/i', $value);
    }
}
