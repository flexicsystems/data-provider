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
use PHPUnit\Framework\Constraint\IsIdentical;

/**
 * @internal
 *
 * @covers \Flexic\DataProvider\Id\CuidProvider
 */
final class CuidProviderTest extends AbstractTestCase
{
    public function testArbitrary(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Id\CuidProvider::arbitrary());

        self::assertThat(
            \mb_strlen($value),
            self::logicalOr(
                new IsIdentical(8),
                new IsIdentical(25),
            ),
        );
        self::assertStringContainsOnly('/[0-9a-z]/i', $value);
        self::assertMatchesRegularExpression('/^[0-9a-z]{8,25}$/i', $value);
    }

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
