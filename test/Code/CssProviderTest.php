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
 * @covers \Flexic\DataProvider\Code\CssProvider
 * @covers \Flexic\DataProvider\Generator\CssGenerator
 * @covers \Flexic\DataProvider\Generator\AbstractGenerator
 */
final class CssProviderTest extends AbstractTestCase
{
    public function testArbitrary(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Code\CssProvider::arbitrary());

        self::assertIsString($value);
        self::assertNotEmpty($value);
        self::assertIsCss($value);
    }

    public function testNormal(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Code\CssProvider::normal());

        self::assertIsString($value);
        self::assertNotEmpty($value);
        self::assertIsCss($value);
    }

    public function testSimple(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Code\CssProvider::simple());

        self::assertIsString($value);
        self::assertNotEmpty($value);
        self::assertIsCss($value);
    }

    public function testComplex(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Code\CssProvider::complex());

        self::assertIsString($value);
        self::assertNotEmpty($value);
        self::assertIsCss($value);
    }

    public static function assertIsCss(string $actual, string $message = ''): void
    {
        self::assertThat(
            $actual,
            new RegularExpression('/([.#])([a-zA-Z0-9]+){(([a-zA-Z0-9\-]+):([a-zA-Z0-9 \-#%]+);)+}/'),
            $message,
        );
    }
}
