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
 * @covers \Flexic\DataProvider\Miscellaneous\VersionProvider
 */
final class VersionProviderTest extends AbstractTestCase
{
    public function testArbitraryIsValid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Miscellaneous\VersionProvider::arbitrary());

        self::assertMatchesRegularExpression('/^[0-9]+\.[0-9]+\.[0-9]+([+-][a-zA-Z0-9.-]+)?([+-][a-zA-Z0-9.-]+)?$/', $value);
    }

    public function testVersionIsValid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Miscellaneous\VersionProvider::version());

        self::assertMatchesRegularExpression('/^[0-9]+\.[0-9]+\.[0-9]+$/', $value);
    }

    public function testPreReleaseIsValid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Miscellaneous\VersionProvider::preRelease());

        self::assertMatchesRegularExpression('/^[0-9]+\.[0-9]+\.[0-9]+([+-][a-zA-Z0-9.-]+)?$/', $value);
    }

    public function testBuildIsValid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Miscellaneous\VersionProvider::build());

        self::assertMatchesRegularExpression('/^[0-9]+\.[0-9]+\.[0-9]+([+-][a-zA-Z0-9.-]+)?$/', $value);
    }

    public function testPreReleaseBuildIsValid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Miscellaneous\VersionProvider::preReleaseBuild());

        self::assertMatchesRegularExpression('/^[0-9]+\.[0-9]+\.[0-9]+([+-][a-zA-Z0-9.-]+)?([+-][a-zA-Z0-9.-]+)?$/', $value);
    }
}
