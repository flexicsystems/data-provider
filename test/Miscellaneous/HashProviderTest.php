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
use PHPUnit\Framework\Constraint\IsIdentical;

/**
 * @internal
 *
 * @covers \Flexic\DataProvider\Miscellaneous\HashProvider
 */
final class HashProviderTest extends AbstractTestCase
{
    public function testArbitraryIsValid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Miscellaneous\HashProvider::arbitrary());

        self::assertNotEmpty($value);
        self::assertThat(
            \mb_strlen($value),
            self::logicalOr(
                new IsIdentical(32),
                new IsIdentical(40),
                new IsIdentical(48),
                new IsIdentical(56),
                new IsIdentical(64),
                new IsIdentical(80),
                new IsIdentical(96),
                new IsIdentical(128),
            ),
        );
        self::assertStringContainsOnly('/[a-f0-9]/i', $value);
        self::assertMatchesRegularExpression('/^[a-f0-9]{32,128}$/i', $value);
    }

    public function testIfMd2IsValid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Miscellaneous\HashProvider::md2());

        self::assertNotEmpty($value);
        self::assertLength(32, $value);
        self::assertStringContainsOnly('/[a-f0-9]/i', $value);
        self::assertMatchesRegularExpression('/^[a-f0-9]{32}$/i', $value);
    }

    public function testIfMd4IsValid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Miscellaneous\HashProvider::md4());

        self::assertNotEmpty($value);
        self::assertLength(32, $value);
        self::assertStringContainsOnly('/[a-f0-9]/i', $value);
        self::assertMatchesRegularExpression('/^[a-f0-9]{32}$/i', $value);
    }

    public function testIfMd5IsValid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Miscellaneous\HashProvider::md5());

        self::assertNotEmpty($value);
        self::assertLength(32, $value);
        self::assertStringContainsOnly('/[a-f0-9]/i', $value);
        self::assertMatchesRegularExpression('/^[a-f0-9]{32}$/i', $value);
    }

    public function testIfSha1IsValid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Miscellaneous\HashProvider::sha1());

        self::assertNotEmpty($value);
        self::assertLength(40, $value);
        self::assertStringContainsOnly('/[a-f0-9]/i', $value);
        self::assertMatchesRegularExpression('/^[0-9a-f]{40}$/i', $value);
    }

    public function testIfSha256IsValid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Miscellaneous\HashProvider::sha256());

        self::assertNotEmpty($value);
        self::assertLength(64, $value);
        self::assertStringContainsOnly('/[a-f0-9]/i', $value);
        self::assertMatchesRegularExpression('/^[0-9a-f]{64}$/i', $value);
    }

    public function testIfSha384IsValid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Miscellaneous\HashProvider::sha384());

        self::assertNotEmpty($value);
        self::assertLength(96, $value);
        self::assertStringContainsOnly('/[a-f0-9]/i', $value);
        self::assertMatchesRegularExpression('/^[0-9a-f]{96}$/i', $value);
    }

    public function testIfSha512IsValid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Miscellaneous\HashProvider::sha512());

        self::assertNotEmpty($value);
        self::assertLength(128, $value);
        self::assertStringContainsOnly('/[a-f0-9]/i', $value);
        self::assertMatchesRegularExpression('/^[0-9a-f]{128}$/i', $value);
    }

    public function testIfRipemd128IsValid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Miscellaneous\HashProvider::ripemd128());

        self::assertNotEmpty($value);
        self::assertLength(32, $value);
        self::assertStringContainsOnly('/[a-f0-9]/i', $value);
        self::assertMatchesRegularExpression('/^[0-9a-f]{32}$/i', $value);
    }

    public function testIfRipemd160IsValid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Miscellaneous\HashProvider::ripemd160());

        self::assertNotEmpty($value);
        self::assertLength(40, $value);
        self::assertStringContainsOnly('/[a-f0-9]/i', $value);
        self::assertMatchesRegularExpression('/^[0-9a-f]{40}$/i', $value);
    }

    public function testIfRipemd256IsValid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Miscellaneous\HashProvider::ripemd256());

        self::assertNotEmpty($value);
        self::assertLength(64, $value);
        self::assertStringContainsOnly('/[a-f0-9]/i', $value);
        self::assertMatchesRegularExpression('/^[0-9a-f]{64}$/i', $value);
    }

    public function testIfRipemd320IsValid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Miscellaneous\HashProvider::ripemd320());

        self::assertNotEmpty($value);
        self::assertLength(80, $value);
        self::assertStringContainsOnly('/[a-f0-9]/i', $value);
        self::assertMatchesRegularExpression('/^[0-9a-f]{80}$/i', $value);
    }

    public function testIfWhirlpoolIsValid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Miscellaneous\HashProvider::whirlpool());

        self::assertNotEmpty($value);
        self::assertLength(128, $value);
        self::assertStringContainsOnly('/[a-f0-9]/i', $value);
        self::assertMatchesRegularExpression('/^[0-9a-f]{128}$/i', $value);
    }

    public function testIfTiger1283IsValid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Miscellaneous\HashProvider::tiger128_3());

        self::assertNotEmpty($value);
        self::assertLength(32, $value);
        self::assertStringContainsOnly('/[a-f0-9]/i', $value);
        self::assertMatchesRegularExpression('/^[0-9a-f]{32}$/i', $value);
    }

    public function testIfTiger1603IsValid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Miscellaneous\HashProvider::tiger160_3());

        self::assertNotEmpty($value);
        self::assertLength(40, $value);
        self::assertStringContainsOnly('/[a-f0-9]/i', $value);
        self::assertMatchesRegularExpression('/^[0-9a-f]{40}$/i', $value);
    }

    public function testIfTiger1923IsValid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Miscellaneous\HashProvider::tiger192_3());

        self::assertNotEmpty($value);
        self::assertLength(48, $value);
        self::assertStringContainsOnly('/[a-f0-9]/i', $value);
        self::assertMatchesRegularExpression('/^[0-9a-f]{48}$/i', $value);
    }

    public function testIfTiger1284IsValid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Miscellaneous\HashProvider::tiger128_4());

        self::assertNotEmpty($value);
        self::assertLength(32, $value);
        self::assertStringContainsOnly('/[a-f0-9]/i', $value);
        self::assertMatchesRegularExpression('/^[0-9a-f]{32}$/i', $value);
    }

    public function testIfTiger1604IsValid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Miscellaneous\HashProvider::tiger160_4());

        self::assertNotEmpty($value);
        self::assertLength(40, $value);
        self::assertStringContainsOnly('/[a-f0-9]/i', $value);
        self::assertMatchesRegularExpression('/^[0-9a-f]{40}$/i', $value);
    }

    public function testIfTiger1924IsValid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Miscellaneous\HashProvider::tiger192_4());

        self::assertNotEmpty($value);
        self::assertLength(48, $value);
        self::assertStringContainsOnly('/[a-f0-9]/i', $value);
        self::assertMatchesRegularExpression('/^[0-9a-f]{48}$/i', $value);
    }

    public function testIfSnefruIsValid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Miscellaneous\HashProvider::snefru());

        self::assertNotEmpty($value);
        self::assertLength(64, $value);
        self::assertStringContainsOnly('/[a-f0-9]/i', $value);
        self::assertMatchesRegularExpression('/^[0-9a-f]{64}$/i', $value);
    }

    public function testIfGostIsValid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Miscellaneous\HashProvider::gost());

        self::assertNotEmpty($value);
        self::assertLength(64, $value);
        self::assertStringContainsOnly('/[a-f0-9]/i', $value);
        self::assertMatchesRegularExpression('/^[0-9a-f]{64}$/i', $value);
    }

    public function testIfAdler32IsValid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Miscellaneous\HashProvider::adler32());

        self::assertNotEmpty($value);
        self::assertLength(8, $value);
        self::assertStringContainsOnly('/[a-f0-9]/i', $value);
        self::assertMatchesRegularExpression('/^[0-9a-f]{8}$/i', $value);
    }

    public function testIfCrc32IsValid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Miscellaneous\HashProvider::crc32());

        self::assertNotEmpty($value);
        self::assertLength(8, $value);
        self::assertStringContainsOnly('/[a-f0-9]/i', $value);
        self::assertMatchesRegularExpression('/^[0-9a-f]{8}$/i', $value);
    }

    public function testIfCrc32bIsValid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Miscellaneous\HashProvider::crc32b());

        self::assertNotEmpty($value);
        self::assertLength(8, $value);
        self::assertStringContainsOnly('/[a-f0-9]/i', $value);
        self::assertMatchesRegularExpression('/^[0-9a-f]{8}$/i', $value);
    }

    public function testIfHaval1283IsValid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Miscellaneous\HashProvider::haval128_3());

        self::assertNotEmpty($value);
        self::assertLength(32, $value);
        self::assertStringContainsOnly('/[a-f0-9]/i', $value);
        self::assertMatchesRegularExpression('/^[0-9a-f]{32}$/i', $value);
    }

    public function testIfHaval1603IsValid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Miscellaneous\HashProvider::haval160_3());

        self::assertNotEmpty($value);
        self::assertLength(40, $value);
        self::assertStringContainsOnly('/[a-f0-9]/i', $value);
        self::assertMatchesRegularExpression('/^[0-9a-f]{40}$/i', $value);
    }

    public function testIfHaval1923IsValid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Miscellaneous\HashProvider::haval192_3());

        self::assertNotEmpty($value);
        self::assertLength(48, $value);
        self::assertStringContainsOnly('/[a-f0-9]/i', $value);
        self::assertMatchesRegularExpression('/^[0-9a-f]{48}$/i', $value);
    }

    public function testIfHaval2243IsValid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Miscellaneous\HashProvider::haval224_3());

        self::assertNotEmpty($value);
        self::assertLength(56, $value);
        self::assertStringContainsOnly('/[a-f0-9]/i', $value);
        self::assertMatchesRegularExpression('/^[0-9a-f]{56}$/i', $value);
    }

    public function testIfHaval2563IsValid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Miscellaneous\HashProvider::haval256_3());

        self::assertNotEmpty($value);
        self::assertLength(64, $value);
        self::assertStringContainsOnly('/[a-f0-9]/i', $value);
        self::assertMatchesRegularExpression('/^[0-9a-f]{64}$/i', $value);
    }

    public function testIfHaval1284IsValid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Miscellaneous\HashProvider::haval128_4());

        self::assertNotEmpty($value);
        self::assertLength(32, $value);
        self::assertStringContainsOnly('/[a-f0-9]/i', $value);
        self::assertMatchesRegularExpression('/^[0-9a-f]{32}$/i', $value);
    }

    public function testIfHaval1604IsValid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Miscellaneous\HashProvider::haval160_4());

        self::assertNotEmpty($value);
        self::assertLength(40, $value);
        self::assertStringContainsOnly('/[a-f0-9]/i', $value);
        self::assertMatchesRegularExpression('/^[0-9a-f]{40}$/i', $value);
    }

    public function testIfHaval1924IsValid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Miscellaneous\HashProvider::haval192_4());

        self::assertNotEmpty($value);
        self::assertLength(48, $value);
        self::assertStringContainsOnly('/[a-f0-9]/i', $value);
        self::assertMatchesRegularExpression('/^[0-9a-f]{48}$/i', $value);
    }

    public function testIfHaval2244IsValid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Miscellaneous\HashProvider::haval224_4());

        self::assertNotEmpty($value);
        self::assertLength(56, $value);
        self::assertStringContainsOnly('/[a-f0-9]/i', $value);
        self::assertMatchesRegularExpression('/^[0-9a-f]{56}$/i', $value);
    }

    public function testIfHaval2564IsValid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Miscellaneous\HashProvider::haval256_4());

        self::assertNotEmpty($value);
        self::assertLength(64, $value);
        self::assertStringContainsOnly('/[a-f0-9]/i', $value);
        self::assertMatchesRegularExpression('/^[0-9a-f]{64}$/i', $value);
    }

    public function testIfHaval1285IsValid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Miscellaneous\HashProvider::haval128_5());

        self::assertNotEmpty($value);
        self::assertLength(32, $value);
        self::assertStringContainsOnly('/[a-f0-9]/i', $value);
        self::assertMatchesRegularExpression('/^[0-9a-f]{32}$/i', $value);
    }

    public function testIfHaval1605IsValid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Miscellaneous\HashProvider::haval160_5());

        self::assertNotEmpty($value);
        self::assertLength(40, $value);
        self::assertStringContainsOnly('/[a-f0-9]/i', $value);
        self::assertMatchesRegularExpression('/^[0-9a-f]{40}$/i', $value);
    }

    public function testIfHaval1925IsValid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Miscellaneous\HashProvider::haval192_5());

        self::assertNotEmpty($value);
        self::assertLength(48, $value);
        self::assertStringContainsOnly('/[a-f0-9]/i', $value);
        self::assertMatchesRegularExpression('/^[0-9a-f]{48}$/i', $value);
    }

    public function testIfHaval2245IsValid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Miscellaneous\HashProvider::haval224_5());

        self::assertNotEmpty($value);
        self::assertLength(56, $value);
        self::assertStringContainsOnly('/[a-f0-9]/i', $value);
        self::assertMatchesRegularExpression('/^[0-9a-f]{56}$/i', $value);
    }

    public function testIfHaval2565IsValid(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Miscellaneous\HashProvider::haval256_5());

        self::assertNotEmpty($value);
        self::assertLength(64, $value);
        self::assertStringContainsOnly('/[a-f0-9]/i', $value);
        self::assertMatchesRegularExpression('/^[0-9a-f]{64}$/i', $value);
    }
}
