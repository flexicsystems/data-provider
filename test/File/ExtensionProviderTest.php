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
 * @covers \Flexic\DataProvider\File\ExtensionProvider
 */
final class ExtensionProviderTest extends AbstractTestCase
{
    public function testArbitrary(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\File\ExtensionProvider::arbitrary());

        self::assertGreaterThan(0, \mb_strlen($value));
        self::assertLessThanOrEqual(10, \mb_strlen($value));
        self::assertMatchesRegularExpression('/^[a-z0-9]{1,10}$/', $value);
        self::assertIsString($value);
        self::assertStringStartsNotWith('.', $value);
    }

    public function testAudio(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\File\ExtensionProvider::audio());

        self::assertGreaterThan(0, \mb_strlen($value));
        self::assertLessThanOrEqual(10, \mb_strlen($value));
        self::assertMatchesRegularExpression('/^[a-zz0-9]{1,10}$/', $value);
        self::assertIsString($value);
        self::assertStringStartsNotWith('.', $value);
    }

    public function testVideo(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\File\ExtensionProvider::video());

        self::assertGreaterThan(0, \mb_strlen($value));
        self::assertLessThanOrEqual(10, \mb_strlen($value));
        self::assertMatchesRegularExpression('/^[a-zz0-9]{1,10}$/', $value);
        self::assertIsString($value);
        self::assertStringStartsNotWith('.', $value);
    }

    public function testImage(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\File\ExtensionProvider::image());

        self::assertIsString($value);
        self::assertGreaterThan(0, \mb_strlen($value));
        self::assertLessThanOrEqual(10, \mb_strlen($value));
        self::assertMatchesRegularExpression('/^[a-zz0-9]{1,10}$/', $value);
        self::assertIsString($value);
        self::assertStringStartsNotWith('.', $value);
    }

    public function testDocument(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\File\ExtensionProvider::document());

        self::assertGreaterThan(0, \mb_strlen($value));
        self::assertLessThanOrEqual(10, \mb_strlen($value));
        self::assertMatchesRegularExpression('/^[a-zz0-9]{1,10}$/', $value);
        self::assertIsString($value);
        self::assertStringStartsNotWith('.', $value);
    }

    public function testArchive(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\File\ExtensionProvider::archive());

        self::assertGreaterThan(0, \mb_strlen($value));
        self::assertLessThanOrEqual(10, \mb_strlen($value));
        self::assertMatchesRegularExpression('/^[a-zz0-9]{1,10}$/', $value);
        self::assertIsString($value);
        self::assertStringStartsNotWith('.', $value);
    }

    public function testExecutable(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\File\ExtensionProvider::executable());

        self::assertGreaterThan(0, \mb_strlen($value));
        self::assertLessThanOrEqual(10, \mb_strlen($value));
        self::assertMatchesRegularExpression('/^[a-zz0-9]{1,10}$/', $value);
        self::assertIsString($value);
        self::assertStringStartsNotWith('.', $value);
    }

    public function testSpreadsheet(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\File\ExtensionProvider::spreadsheet());

        self::assertGreaterThan(0, \mb_strlen($value));
        self::assertLessThanOrEqual(10, \mb_strlen($value));
        self::assertMatchesRegularExpression('/^[a-zz0-9]{1,10}$/', $value);
        self::assertIsString($value);
        self::assertStringStartsNotWith('.', $value);
    }

    public function testPresentation(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\File\ExtensionProvider::presentation());

        self::assertGreaterThan(0, \mb_strlen($value));
        self::assertLessThanOrEqual(10, \mb_strlen($value));
        self::assertMatchesRegularExpression('/^[a-zz0-9]{1,10}$/', $value);
        self::assertIsString($value);
        self::assertStringStartsNotWith('.', $value);
    }

    public function testDatabase(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\File\ExtensionProvider::database());

        self::assertGreaterThan(0, \mb_strlen($value));
        self::assertLessThanOrEqual(10, \mb_strlen($value));
        self::assertMatchesRegularExpression('/^[a-zz0-9]{1,10}$/', $value);
        self::assertIsString($value);
        self::assertStringStartsNotWith('.', $value);
    }

    public function testFont(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\File\ExtensionProvider::font());

        self::assertGreaterThan(0, \mb_strlen($value));
        self::assertLessThanOrEqual(10, \mb_strlen($value));
        self::assertMatchesRegularExpression('/^[a-zz0-9]{1,10}$/', $value);
        self::assertIsString($value);
        self::assertStringStartsNotWith('.', $value);
    }

    public function testCode(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\File\ExtensionProvider::code());

        self::assertGreaterThan(0, \mb_strlen($value));
        self::assertLessThanOrEqual(10, \mb_strlen($value));
        self::assertMatchesRegularExpression('/^[a-zz0-9]{1,10}$/', $value);
        self::assertIsString($value);
        self::assertStringStartsNotWith('.', $value);
    }

    public function testSystem(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\File\ExtensionProvider::system());

        self::assertGreaterThan(0, \mb_strlen($value));
        self::assertLessThanOrEqual(10, \mb_strlen($value));
        self::assertMatchesRegularExpression('/^[a-zz0-9]{1,10}$/', $value);
        self::assertIsString($value);
        self::assertStringStartsNotWith('.', $value);
    }

    public function testModel(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\File\ExtensionProvider::model());

        self::assertGreaterThan(0, \mb_strlen($value));
        self::assertLessThanOrEqual(10, \mb_strlen($value));
        self::assertMatchesRegularExpression('/^[a-zz0-9]{1,10}$/', $value);
        self::assertIsString($value);
        self::assertStringStartsNotWith('.', $value);
    }

    public function testMessage(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\File\ExtensionProvider::message());

        self::assertGreaterThan(0, \mb_strlen($value));
        self::assertLessThanOrEqual(10, \mb_strlen($value));
        self::assertMatchesRegularExpression('/^[a-zz0-9]{1,10}$/', $value);
        self::assertIsString($value);
        self::assertStringStartsNotWith('.', $value);
    }
}
