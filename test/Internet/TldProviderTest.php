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
 * @covers \Flexic\DataProvider\Internet\TldProvider
 */
final class TldProviderTest extends AbstractTestCase
{
    public function testArbitrary(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Internet\TldProvider::arbitrary());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertLessThanOrEqual(5, \mb_strlen($value));
        self::assertGreaterThanOrEqual(3, \mb_strlen($value));
        self::assertStringContainsOnly('/[a-zA-Z]/', $value);
    }
}
