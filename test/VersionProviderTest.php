<?php

namespace Flexic\DataProvider\Test;

/**
 * @internal
 *
 * @covers \Flexic\DataProvider\VersionProvider
 */
class VersionProviderTest extends AbstractTestCase
{
    public function testVersionIsValid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\VersionProvider::version());

        self::assertMatchesRegularExpression('/^[0-9]+\.[0-9]+\.[0-9]+$/', $value);
    }

    public function testPreReleaseIsValid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\VersionProvider::preRelease());

        self::assertMatchesRegularExpression('/^[0-9]+\.[0-9]+\.[0-9]+\-[a-zA-Z0-9.-]+$/', $value);
    }

    public function testBuildIsValid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\VersionProvider::build());

        self::assertMatchesRegularExpression('/^[0-9]+\.[0-9]+\.[0-9]+$/', $value);
    }

    public function testPreReleaseBuildIsValid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\VersionProvider::preReleaseBuild());

        self::assertMatchesRegularExpression('/^[0-9]+\.[0-9]+\.[0-9]+$/', $value);
    }
}