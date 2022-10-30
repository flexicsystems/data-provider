<?php

namespace Flexic\DataProvider\Test\Code;

use Flexic\DataProvider\Test\AbstractTestCase;
use Flexic\DataProvider\Test\TestUtil;

/**
 * @internal
 *
 * @covers \Flexic\DataProvider\Code\HtmlProvider
 */
class HtmlProviderTest extends AbstractTestCase
{
    public function testArbitrary(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Code\HtmlProvider::arbitrary());

        self::assertIsString($value);
        self::assertNotEmpty($value);
        self::assertIsHtml($value);
    }
}