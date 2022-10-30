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
 * @covers \Flexic\DataProvider\File\MimeTypeProvider
 */
final class MimeTypeProviderTest extends AbstractTestCase
{
    public function testArbitrary(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\File\MimeTypeProvider::arbitrary());

        self::assertIsString($value);
        self::assertMatchesRegularExpression('/^(.*)\/(.*)$/', $value);
    }

    public function testVideo(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\File\MimeTypeProvider::video());

        self::assertIsString($value);
        self::assertMatchesRegularExpression('/^video\/(.*)$/', $value);
    }

    public function testAudio(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\File\MimeTypeProvider::audio());

        self::assertIsString($value);
        self::assertMatchesRegularExpression('/^audio\/(.*)$/', $value);
    }

    public function testApplication(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\File\MimeTypeProvider::application());

        self::assertIsString($value);
        self::assertMatchesRegularExpression('/^application\/(.*)$/', $value);
    }

    public function testImage(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\File\MimeTypeProvider::image());

        self::assertIsString($value);
        self::assertMatchesRegularExpression('/^image\/(.*)$/', $value);
    }

    public function testText(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\File\MimeTypeProvider::text());

        self::assertIsString($value);
        self::assertMatchesRegularExpression('/^text\/(.*)$/', $value);
    }

    public function testFont(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\File\MimeTypeProvider::font());

        self::assertIsString($value);
        self::assertMatchesRegularExpression('/^font\/(.*)$/', $value);
    }
}
