<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\DataProvider\Test\Miscellaneous;

use Flexic\DataProvider\Test\AbstractTestCase;
use Flexic\DataProvider\Test\TestUtil;

/**
 * @internal
 *
 * @covers \Flexic\DataProvider\Miscellaneous\EmojiProvider
 */
final class EmojiProviderTest extends AbstractTestCase
{
    public function testArbitrary(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Miscellaneous\EmojiProvider::arbitrary());

        self::assertIsString($value);
        self::assertLength(1, $value);
    }
}
