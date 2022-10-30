<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\DataProvider\Test\Internet;

use Flexic\DataProvider\Test\AbstractTestCase;
use Flexic\DataProvider\Test\TestUtil;

/**
 * @internal
 *
 * @covers \Flexic\DataProvider\Internet\UrlProvider
 */
final class UrlProviderTest extends AbstractTestCase
{
    public function testArbitrary(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Internet\UrlProvider::arbitrary());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertStringStartsWith('http', $value);
        self::assertStringContainsString('://', $value);
        self::assertMatchesRegularExpression('/^(http(s)?:\/\/[a-zA-Z0-9]+\.([a-zA-Z0-9]+))(\/[a-zA-Z0-9-_]+){1,50}(\.([a-zA-Z]+))?(([?])?(([&])?([a-zA-Z0-9]+)=([a-zA-Z0-9]+)){1,10})?$/', $value);
    }

    public function testArbitraryWithSuffix(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Internet\UrlProvider::arbitraryWithSuffix());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertStringStartsWith('http', $value);
        self::assertStringContainsString('://', $value);
        self::assertMatchesRegularExpression('/^(http(s)?:\/\/[a-zA-Z0-9]+\.([a-zA-Z0-9]+))(\/[a-zA-Z0-9-_]+){1,50}(\.([a-zA-Z]+))$/', $value);
    }

    public function testArbitraryWithQuery(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Internet\UrlProvider::arbitraryWithQuery());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertStringStartsWith('http', $value);
        self::assertStringContainsString('://', $value);
        self::assertMatchesRegularExpression('/^(http(s)?:\/\/[a-zA-Z0-9]+\.([a-zA-Z0-9]+))(\/[a-zA-Z0-9-_]+){1,50}(([?])?(([&])?([a-zA-Z0-9]+)=([a-zA-Z0-9]+)){1,10})$/', $value);
    }

    public function testArbitraryWithSuffixAndQuery(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Internet\UrlProvider::arbitraryWithSuffixAndQuery());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertStringStartsWith('http', $value);
        self::assertStringContainsString('://', $value);
        self::assertMatchesRegularExpression('/^(http(s)?:\/\/[a-zA-Z0-9]+\.([a-zA-Z0-9]+))(\/[a-zA-Z0-9-_]+){1,50}(\.([a-zA-Z]+))(([?])?(([&])?([a-zA-Z0-9]+)=([a-zA-Z0-9]+)){1,10})$/', $value);
    }

    public function testShort(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Internet\UrlProvider::short());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertStringStartsWith('http', $value);
        self::assertStringContainsString('://', $value);
        self::assertMatchesRegularExpression('/^(http(s)?:\/\/[a-zA-Z0-9]+\.([a-zA-Z0-9]+))(\/[a-zA-Z0-9-_]+){1}$/', $value);
    }

    public function testNormal(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Internet\UrlProvider::normal());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertStringStartsWith('http', $value);
        self::assertStringContainsString('://', $value);
        self::assertMatchesRegularExpression('/^(http(s)?:\/\/[a-zA-Z0-9]+\.([a-zA-Z0-9]+))(\/[a-zA-Z0-9-_]+){5}$/', $value);
    }

    public function testLong(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Internet\UrlProvider::long());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertStringStartsWith('http', $value);
        self::assertStringContainsString('://', $value);
        self::assertMatchesRegularExpression('/^(http(s)?:\/\/[a-zA-Z0-9]+\.([a-zA-Z0-9]+))(\/[a-zA-Z0-9-_]+){10}$/', $value);
    }

    public function testVeryLong(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Internet\UrlProvider::veryLong());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertStringStartsWith('http', $value);
        self::assertStringContainsString('://', $value);
        self::assertMatchesRegularExpression('/^(http(s)?:\/\/[a-zA-Z0-9]+\.([a-zA-Z0-9]+))(\/[a-zA-Z0-9-_]+){20}$/', $value);
    }

    public function testExtremeLong(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Internet\UrlProvider::extremeLong());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertStringStartsWith('http', $value);
        self::assertStringContainsString('://', $value);
        self::assertMatchesRegularExpression('/^(http(s)?:\/\/[a-zA-Z0-9]+\.([a-zA-Z0-9]+))(\/[a-zA-Z0-9-_]+){50}$/', $value);
    }
}
