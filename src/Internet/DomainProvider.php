<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\DataProvider\Internet;

use Flexic\DataProvider\AbstractProvider;

final class DomainProvider extends AbstractProvider
{
    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function arbitrary(): \Generator
    {
        yield from self::provideDataForValues(self::values());
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function domain(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key) {
            return 'domain' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function freeEmailDomain(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key) {
            return 'domain-free-email' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function safeEmailDomain(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key) {
            return 'domain-safe-email' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function socialMedia(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key) {
            return 'domain-social-media' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function development(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key) {
            return 'domain-development' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function search(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key) {
            return 'domain-search' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function shopping(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key) {
            return 'domain-shopping' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function company(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key) {
            return 'domain-company' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function education(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key) {
            return 'domain-education' === $key;
        });
    }

    public static function values(): array
    {
        $faker = self::faker();

        return [
            'domain' => $faker->domainName(),
            'domain-free-email' => $faker->freeEmailDomain(),
            'domain-safe-email' => $faker->safeEmailDomain(),
            'domain-social-media' => $faker->randomElement([
                'facebook.com',
                'twitter.com',
                'instagram.com',
                'linkedin.com',
                'youtube.com',
                'pinterest.com',
                'tumblr.com',
                'flickr.com',
                'vimeo.com',
                'dribbble.com',
                'behance.net',
            ]),
            'domain-development' => $faker->randomElement([
                'github.com',
                'gitlab.com',
                'bitbucket.org',
                'sourceforge.net',
                'codepen.io',
                'jsfiddle.net',
                'stackoverflow.com',
                'codeproject.com',
                'w3schools.com',
                'w3.org',
                'developer.mozilla.org',
                'developer.apple.com',
                'developer.android.com',
                'developer.chrome.com',
                'developer.microsoft.com',
                'php.net',
                'python.org',
                'ruby-lang.org',
                'rubyonrails.org',
                'laravel.com',
                'symfony.com',
                'codeigniter.com',
                'cakephp.org',
                'zend.com',
                'drupal.org',
            ]),
            'domain-search' => $faker->randomElement([
                'google.com',
                'bing.com',
                'duckduckgo.com',
                'yahoo.com',
                'yandex.com',
                'baidu.com',
            ]),
            'domain-shopping' => $faker->randomElement([
                'amazon.com',
                'ebay.com',
                'aliexpress.com',
                'etsy.com',
                'walmart.com',
                'alibaba.com',
                'overstock.com',
                'zalando.com',
                'zappos.com',
                'shopify.com',
                'bestbuy.com',
                'target.com',
                'costco.com',
                'newegg.com',
                'wix.com',
                'wayfair.com',
                'wish.com',
                'groupon.com',
                'homedepot.com',
                'walgreens.com',
                'costco.com',
                'sears.com',
                'kmart.com',
                'kohls.com',
                'macys.com',
                'nordstrom.com',
                'samsclub.com',
                'staples.com',
                'walmart.com',
                'bedbathandbeyond.com',
                'bjs.com',
                'cvs.com',
                'dickssportinggoods.com',
                'gamestop.com',
                'lowes.com',
                'officedepot.com',
                'petco.com',
                'petsmart.com',
                'saksfifthavenue.com',
                'staples.com',
                'tjmaxx.com',
                'toysrus.com',
                'ulta.com',
                'victoriassecret.com',
                'walmart.com',
                'wayfair.com',
                'wellsfargo.com',
                'walmart.com',
            ]),
            'domain-company' => $faker->randomElement([
                'spotify.com',
                'netflix.com',
                'amazon.com',
                'apple.com',
                'microsoft.com',
                'adobe.com',
                'salesforce.com',
                'oracle.com',
                'autodesk.com',
                'vmware.com',
                'atlassian.com',
                'slack.com',
                'zendesk.com',
                'box.com',
                'shopify.com',
                'airbnb.com',
                'uber.com',
                'lyft.com',
                'facebook.com',
            ]),
            'domain-education' => $faker->randomElement([
                'udemy.com',
                'coursera.org',
                'edx.org',
                'udacity.com',
                'skillshare.com',
                'pluralsight.com',
                'codecademy.com',
                'khanacademy.org',
            ]),
        ];
    }
}
