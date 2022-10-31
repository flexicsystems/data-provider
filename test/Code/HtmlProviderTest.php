<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\DataProvider\Test\Code;

use Flexic\DataProvider\Test\AbstractTestCase;
use Flexic\DataProvider\Test\TestUtil;
use PHPUnit\Framework\Constraint\RegularExpression;

/**
 * @internal
 *
 * @covers \Flexic\DataProvider\Code\HtmlProvider
 */
final class HtmlProviderTest extends AbstractTestCase
{
    public function testArbitrary(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Code\HtmlProvider::arbitrary());

        self::assertIsString($value);
        self::assertNotEmpty($value);
        self::assertIsHtml($value);
    }

    public function testNormal(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Code\HtmlProvider::normal());

        self::assertIsString($value);
        self::assertNotEmpty($value);
        self::assertIsHtml($value);
    }

    public function testSimple(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Code\HtmlProvider::simple());

        self::assertIsString($value);
        self::assertNotEmpty($value);
        self::assertIsHtml($value);
    }

    public function testComplex(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Code\HtmlProvider::complex());

        self::assertIsString($value);
        self::assertNotEmpty($value);
        self::assertIsHtml($value);
    }

    public static function assertIsHtml(string $actual, string $message = ''): void
    {
        self::assertThat(
            $actual,
            new RegularExpression('/<html><head>(.*)<\/head><body>(.*)<\/body><\/html>/'),
            $message,
        );
    }
}
