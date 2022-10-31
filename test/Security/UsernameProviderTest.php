<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\DataProvider\Test\Security;

use Flexic\DataProvider\Test\AbstractTestCase;
use Flexic\DataProvider\Test\TestUtil;

/**
 * @internal
 *
 * @covers \Flexic\DataProvider\Generator\UsernameGenerator
 * @covers \Flexic\DataProvider\Security\UsernameProvider
 */
final class UsernameProviderTest extends AbstractTestCase
{
    public function testArbitrary(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Security\UsernameProvider::arbitrary());

        self::assertIsString($value);
        self::assertNotEmpty($value);
        self::assertStringContainsOnly('/[a-zA-Z0-9.-_]/', $value);
    }
}
