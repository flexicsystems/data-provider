<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\DataProvider\Test;

/**
 * @internal
 *
 * @covers \Flexic\DataProvider\BarcodeProvider
 */
final class BarcodeProviderTest extends AbstractTestCase
{
    public function testEan13IsValid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\BarcodeProvider::ean13());

        self::assertLength(13, $value);
        self::assertMatchesRegularExpression('/[0-9]+/', $value);
    }

    public function testEan8IsValid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\BarcodeProvider::ean8());

        self::assertLength(8, $value);
        self::assertMatchesRegularExpression('/[0-9]+/', $value);
    }

    public function testIsbn10IsValid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\BarcodeProvider::isbn10());

        self::assertLength(10, $value);
        self::assertMatchesRegularExpression('/[0-9]+/', $value);
    }

    public function testIsbn13IsValid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\BarcodeProvider::isbn13());

        self::assertLength(13, $value);
        self::assertMatchesRegularExpression('/[0-9]+/', $value);
    }
}
