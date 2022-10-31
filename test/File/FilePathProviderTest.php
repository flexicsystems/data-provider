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
 * @covers \Flexic\DataProvider\File\FilePathProvider
 */
final class FilePathProviderTest extends AbstractTestCase
{
    public function testArbitrary(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\File\FilePathProvider::arbitrary());

        self::assertIsString($value);
        self::assertStringContainsOnly('/[a-zA-Z0-9.\/]/', $value);
        self::assertMatchesRegularExpression('/([.]+\/)?([a-zA-Z0-9]+([\/\\\])){4}/', $value);
    }

    public function testLinux(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\File\FilePathProvider::linux());

        self::assertIsString($value);
        self::assertStringContainsOnly('/[a-zA-Z0-9\/.]/', $value);
        self::assertMatchesRegularExpression('/([.]+\/)?([a-zA-Z0-9]+\/){4}/', $value);
    }

    public function testUnix(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\File\FilePathProvider::unix());

        self::assertIsString($value);
        self::assertStringContainsOnly('/[a-zA-Z0-9\/.]/', $value);
        self::assertMatchesRegularExpression('/([.]+\/)?([a-zA-Z0-9]+\/){4}/', $value);
    }

    public function testMac(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\File\FilePathProvider::mac());

        self::assertIsString($value);
        self::assertStringContainsOnly('/[a-zA-Z0-9\/.]/', $value);
        self::assertMatchesRegularExpression('/([.]+\/)?([a-zA-Z0-9]+\/){4}/', $value);
    }

    public function testWindows(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\File\FilePathProvider::windows());

        self::assertIsString($value);
        self::assertStringContainsOnly('/[a-zA-Z0-9\/.]/', $value);
        self::assertMatchesRegularExpression('/([.]+\/)?([a-zA-Z0-9]+\\\){4}/', $value);
    }
}
