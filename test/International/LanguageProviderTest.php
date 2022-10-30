<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\DataProvider\Test\International;

use Flexic\DataProvider\Test\AbstractTestCase;
use Flexic\DataProvider\Test\TestUtil;

/**
 * @internal
 *
 * @covers \Flexic\DataProvider\International\LanguageProvider
 */
final class LanguageProviderTest extends AbstractTestCase
{
    public function testLocale(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\International\LanguageProvider::locale());

        self::assertGreaterThan(2, \mb_strlen($value));
        self::assertLessThanOrEqual(6, \mb_strlen($value));
        self::assertMatchesRegularExpression('/(([a-zA-Z]+)(-[a-zA-Z]+)?)/', $value);
    }

    public function testLanguageCode(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\International\LanguageProvider::languageCode());

        self::assertGreaterThanOrEqual(2, \mb_strlen($value));
        self::assertLessThanOrEqual(3, \mb_strlen($value));
        self::assertMatchesRegularExpression('/([a-zA-Z]{2,3})/', $value);
    }
}
