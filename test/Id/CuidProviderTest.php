<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\DataProvider\Test\Id;

use Flexic\DataProvider\Test\AbstractTestCase;
use Flexic\DataProvider\Test\TestUtil;

/**
 * @internal
 *
 * @covers \Flexic\DataProvider\Id\CuidProvider
 */
final class CuidProviderTest extends AbstractTestCase
{
    public function testShortCuid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Id\CuidProvider::short());

        self::assertLength(8, $value);
        self::assertStringContainsOnly('/[0-9a-z]/i', $value);
        self::assertMatchesRegularExpression('/^[0-9a-z]{8}$/i', $value);
    }

    public function testLongCuid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Id\CuidProvider::long());

        self::assertLength(25, $value);
        self::assertStringContainsOnly('/[0-9a-z]/i', $value);
        self::assertMatchesRegularExpression('/^[0-9a-z]{25}$/i', $value);
    }
}
