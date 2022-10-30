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
 * @covers \Flexic\DataProvider\File\CompressionProvider
 */
final class CompressionProviderTest extends AbstractTestCase
{
    public function testArbitrary(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\File\CompressionProvider::arbitrary());

        self::assertIsString($value);
        self::assertGreaterThan(0, \mb_strlen($value));
        self::assertLessThanOrEqual(5, \mb_strlen($value));
        self::assertStringStartsNotWith('.', $value);
    }
}
