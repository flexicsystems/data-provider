<?php

namespace Flexic\DataProvider\Test;

/**
 * @internal
 *
 * @covers \Flexic\DataProvider\HashProvider
 */
class HashProviderTest extends AbstractTestCase
{
    public function testIfMd2IsValid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\HashProvider::md2());

        self::assertNotEmpty($value);
    }

    public function testIfMd4IsValid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\HashProvider::md4());

        self::assertNotEmpty($value);
    }

    public function testIfMd5IsValid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\HashProvider::md5());

        self::assertNotEmpty($value);
    }
}