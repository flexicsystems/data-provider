<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\DataProvider\Test\File;

use Flexic\DataProvider\Test\AbstractTestCase;
use Flexic\DataProvider\Test\TestUtil;

/**
 * @internal
 *
 * @covers \Flexic\DataProvider\File\FileProvider
 */
final class FileProviderTest extends AbstractTestCase
{
    public function testArbitrary(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\File\FileProvider::arbitrary());

        self::assertIsString($value);
        self::assertGreaterThan(0, \mb_strlen($value));
        self::assertStringStartsNotWith('.', $value);
        self::assertMatchesRegularExpression('/^(([a-zA-Z0-9_-]+).([a-zA-Z0-9]+))$/', $value);
    }

    public function testArbitraryCompressed(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\File\FileProvider::arbitraryCompressed());

        self::assertIsString($value);
        self::assertGreaterThan(0, \mb_strlen($value));
        self::assertStringStartsNotWith('.', $value);
        self::assertMatchesRegularExpression('/^(([a-zA-Z0-9_-]+).([a-zA-Z0-9]+).([a-zA-Z0-9]+))$/', $value);
    }

    public function testAudio(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\File\FileProvider::audio());

        self::assertIsString($value);
        self::assertGreaterThan(0, \mb_strlen($value));
        self::assertStringStartsNotWith('.', $value);
        self::assertMatchesRegularExpression('/^(([a-zA-Z0-9_-]+).([a-zA-Z0-9]+))$/', $value);
    }

    public function testImage(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\File\FileProvider::image());

        self::assertIsString($value);
        self::assertGreaterThan(0, \mb_strlen($value));
        self::assertStringStartsNotWith('.', $value);
        self::assertMatchesRegularExpression('/^(([a-zA-Z0-9_-]+).([a-zA-Z0-9]+))$/', $value);
    }

    public function testVideo(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\File\FileProvider::video());

        self::assertIsString($value);
        self::assertGreaterThan(0, \mb_strlen($value));
        self::assertStringStartsNotWith('.', $value);
        self::assertMatchesRegularExpression('/^(([a-zA-Z0-9_-]+).([a-zA-Z0-9]+))$/', $value);
    }

    public function testDocument(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\File\FileProvider::document());

        self::assertIsString($value);
        self::assertGreaterThan(0, \mb_strlen($value));
        self::assertStringStartsNotWith('.', $value);
        self::assertMatchesRegularExpression('/^(([a-zA-Z0-9_-]+).([a-zA-Z0-9]+))$/', $value);
    }

    public function testSpreadsheet(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\File\FileProvider::spreadsheet());

        self::assertIsString($value);
        self::assertGreaterThan(0, \mb_strlen($value));
        self::assertStringStartsNotWith('.', $value);
        self::assertMatchesRegularExpression('/^(([a-zA-Z0-9_-]+).([a-zA-Z0-9]+))$/', $value);
    }

    public function testPresentation(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\File\FileProvider::presentation());

        self::assertIsString($value);
        self::assertGreaterThan(0, \mb_strlen($value));
        self::assertStringStartsNotWith('.', $value);
        self::assertMatchesRegularExpression('/^(([a-zA-Z0-9_-]+).([a-zA-Z0-9]+))$/', $value);
    }

    public function testArchive(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\File\FileProvider::archive());

        self::assertIsString($value);
        self::assertGreaterThan(0, \mb_strlen($value));
        self::assertStringStartsNotWith('.', $value);
        self::assertMatchesRegularExpression('/^(([a-zA-Z0-9_-]+).([a-zA-Z0-9]+))$/', $value);
    }

    public function testCode(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\File\FileProvider::code());

        self::assertIsString($value);
        self::assertGreaterThan(0, \mb_strlen($value));
        self::assertStringStartsNotWith('.', $value);
        self::assertMatchesRegularExpression('/^(([a-zA-Z0-9_-]+).([a-zA-Z0-9]+))$/', $value);
    }

    public function testExecutable(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\File\FileProvider::executable());

        self::assertIsString($value);
        self::assertGreaterThan(0, \mb_strlen($value));
        self::assertStringStartsNotWith('.', $value);
        self::assertMatchesRegularExpression('/^(([a-zA-Z0-9_-]+).([a-zA-Z0-9]+))$/', $value);
    }

    public function testFont(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\File\FileProvider::font());

        self::assertIsString($value);
        self::assertGreaterThan(0, \mb_strlen($value));
        self::assertStringStartsNotWith('.', $value);
        self::assertMatchesRegularExpression('/^(([a-zA-Z0-9_-]+).([a-zA-Z0-9]+))$/', $value);
    }

    public function testSystem(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\File\FileProvider::system());

        self::assertIsString($value);
        self::assertGreaterThan(0, \mb_strlen($value));
        self::assertStringStartsNotWith('.', $value);
        self::assertMatchesRegularExpression('/^(([a-zA-Z0-9_-]+).([a-zA-Z0-9]+))$/', $value);
    }

    public function testDatabase(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\File\FileProvider::database());

        self::assertIsString($value);
        self::assertGreaterThan(0, \mb_strlen($value));
        self::assertStringStartsNotWith('.', $value);
        self::assertMatchesRegularExpression('/^(([a-zA-Z0-9_-]+).([a-zA-Z0-9]+))$/', $value);
    }

    public function testModel(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\File\FileProvider::model());

        self::assertIsString($value);
        self::assertGreaterThan(0, \mb_strlen($value));
        self::assertStringStartsNotWith('.', $value);
        self::assertMatchesRegularExpression('/^(([a-zA-Z0-9_-]+).([a-zA-Z0-9]+))$/', $value);
    }

    public function testMessage(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\File\FileProvider::message());

        self::assertIsString($value);
        self::assertGreaterThan(0, \mb_strlen($value));
        self::assertStringStartsNotWith('.', $value);
        self::assertMatchesRegularExpression('/^(([a-zA-Z0-9_-]+).([a-zA-Z0-9]+))$/', $value);
    }
}
