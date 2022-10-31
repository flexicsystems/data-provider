<?php

namespace Flexic\DataProvider\Test\DateTime;

use Flexic\DataProvider\Test\AbstractTestCase;
use Flexic\DataProvider\Test\TestUtil;

class DayOfMonthProviderTest extends AbstractTestCase
{
    public function testArbitrary(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\DayOfMonthProvider::arbitrary());

        self::assertIsString($value);
        self::assertGreaterThanOrEqual(1, (int) $value);
        self::assertLessThanOrEqual(31, (int) $value);
        self::assertStringContainsOnly('/[0-9]/', $value);
    }

    public function testJanuary(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\DayOfMonthProvider::january());

        self::assertIsString($value);
        self::assertGreaterThanOrEqual(1, (int) $value);
        self::assertLessThanOrEqual(31, (int) $value);
        self::assertStringContainsOnly('/[0-9]/', $value);
    }

    public function testFebruary(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\DayOfMonthProvider::february());

        self::assertIsString($value);
        self::assertGreaterThanOrEqual(1, (int) $value);
        self::assertLessThanOrEqual(28, (int) $value);
        self::assertStringContainsOnly('/[0-9]/', $value);
    }

    public function testFebruaryLeap(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\DayOfMonthProvider::februaryLeap());

        self::assertIsString($value);
        self::assertGreaterThanOrEqual(1, (int) $value);
        self::assertLessThanOrEqual(29, (int) $value);
        self::assertStringContainsOnly('/[0-9]/', $value);
    }

    public function testMarch(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\DayOfMonthProvider::march());

        self::assertIsString($value);
        self::assertGreaterThanOrEqual(1, (int) $value);
        self::assertLessThanOrEqual(31, (int) $value);
        self::assertStringContainsOnly('/[0-9]/', $value);
    }

    public function testApril(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\DayOfMonthProvider::april());

        self::assertIsString($value);
        self::assertGreaterThanOrEqual(1, (int) $value);
        self::assertLessThanOrEqual(30, (int) $value);
        self::assertStringContainsOnly('/[0-9]/', $value);
    }

    public function testMay(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\DayOfMonthProvider::may());

        self::assertIsString($value);
        self::assertGreaterThanOrEqual(1, (int) $value);
        self::assertLessThanOrEqual(31, (int) $value);
        self::assertStringContainsOnly('/[0-9]/', $value);
    }

    public function testJune(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\DayOfMonthProvider::june());

        self::assertIsString($value);
        self::assertGreaterThanOrEqual(1, (int) $value);
        self::assertLessThanOrEqual(30, (int) $value);
        self::assertStringContainsOnly('/[0-9]/', $value);
    }

    public function testJuly(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\DayOfMonthProvider::july());

        self::assertIsString($value);
        self::assertGreaterThanOrEqual(1, (int) $value);
        self::assertLessThanOrEqual(31, (int) $value);
        self::assertStringContainsOnly('/[0-9]/', $value);
    }

    public function testAugust(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\DayOfMonthProvider::august());

        self::assertIsString($value);
        self::assertGreaterThanOrEqual(1, (int) $value);
        self::assertLessThanOrEqual(31, (int) $value);
        self::assertStringContainsOnly('/[0-9]/', $value);
    }

    public function testSeptember(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\DayOfMonthProvider::september());

        self::assertIsString($value);
        self::assertGreaterThanOrEqual(1, (int) $value);
        self::assertLessThanOrEqual(30, (int) $value);
        self::assertStringContainsOnly('/[0-9]/', $value);
    }

    public function testOctober(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\DayOfMonthProvider::october());

        self::assertIsString($value);
        self::assertGreaterThanOrEqual(1, (int) $value);
        self::assertLessThanOrEqual(31, (int) $value);
        self::assertStringContainsOnly('/[0-9]/', $value);
    }

    public function testNovember(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\DayOfMonthProvider::november());

        self::assertIsString($value);
        self::assertGreaterThanOrEqual(1, (int) $value);
        self::assertLessThanOrEqual(30, (int) $value);
        self::assertStringContainsOnly('/[0-9]/', $value);
    }

    public function testDecember(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\DayOfMonthProvider::december());

        self::assertIsString($value);
        self::assertGreaterThanOrEqual(1, (int) $value);
        self::assertLessThanOrEqual(31, (int) $value);
        self::assertStringContainsOnly('/[0-9]/', $value);
    }
}