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
use PHPUnit\Framework\Constraint\RegularExpression;

/**
 * @internal
 *
 * @covers \Flexic\DataProvider\Id\GuidProvider
 */
final class GuidProviderTest extends AbstractTestCase
{
    public function testArbitrary(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Id\GuidProvider::arbitrary());

        self::assertIsGuid(4, $value);
    }

    public static function assertIsGuid(int $prefix, string $actual, string $message = ''): void
    {
        self::assertThat(
            $actual,
            new RegularExpression(
                \sprintf('/^[0-9A-Fa-z]{8}-[0-9A-Fa-z]{4}-%s[0-9A-Fa-f]{3}-[89ABab][0-9A-Fa-f]{3}-[0-9A-Fa-f]{12}$/i', $prefix),
            ),
            $message,
        );
    }
}
