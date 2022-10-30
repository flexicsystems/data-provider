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
 * @covers \Flexic\DataProvider\Internet\UserAgentProvider
 */
final class UserAgentProviderTest extends AbstractTestCase
{
    public function testArbitrary(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Internet\UserAgentProvider::arbitrary());

        self::assertNotEmpty($value);
    }

    public function testChrome(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Internet\UserAgentProvider::chrome());

        self::assertNotEmpty($value);
        self::assertStringContainsString('Chrome', $value);
    }

    public function testFirefox(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Internet\UserAgentProvider::firefox());

        self::assertNotEmpty($value);
        self::assertStringContainsString('Firefox', $value);
    }

    public function testSafari(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Internet\UserAgentProvider::safari());

        self::assertNotEmpty($value);
        self::assertStringContainsString('Safari', $value);
    }

    public function testOpera(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Internet\UserAgentProvider::opera());

        self::assertNotEmpty($value);
        self::assertStringContainsString('Opera', $value);
    }

    public function testInternetExplorer(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Internet\UserAgentProvider::internetExplorer());

        self::assertNotEmpty($value);
        self::assertStringContainsString('MSIE', $value);
    }

    public function testEdge(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Internet\UserAgentProvider::msedge());

        self::assertNotEmpty($value);
        self::assertStringContainsString('Chrome', $value);
    }
}
