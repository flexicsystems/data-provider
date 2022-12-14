<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\DataProvider\International;

use Flexic\DataProvider\AbstractProvider;

final class CountryCodeAlpha3Provider extends AbstractProvider
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
    public static function africa(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'country-code-africa' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function asia(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'country-code-asia' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function europe(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'country-code-europe' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function america(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'country-code-america' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function oceania(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'country-code-oceania' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function antarctica(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'country-code-antarctica' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function australia(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'country-code-australia' === $key;
        });
    }

    public static function values(): array
    {
        $faker = self::faker();

        return [
            'country-code-africa' => $faker->randomElement([
                'DZA',
                'AGO',
                'BWA',
                'BDI',
                'CMR',
                'CPV',
                'CAF',
                'TCD',
                'COM',
                'MYT',
                'COG',
                'COD',
                'BEN',
                'GNQ',
                'ETH',
                'ERI',
                'DJI',
                'GAB',
                'GMB',
                'GHA',
                'GIN',
                'CIV',
                'KEN',
                'LSO',
                'LBR',
                'LBY',
                'MDG',
                'MWI',
                'MLI',
                'MRT',
                'MUS',
                'MAR',
                'MOZ',
                'NAM',
                'NER',
                'NGA',
                'GNB',
                'REU',
                'RWA',
                'SHN',
                'STP',
                'SEN',
                'SYC',
                'SLE',
                'SOM',
                'ZAF',
                'ZWE',
                'SSD',
                'ESH',
                'SDN',
                'SWZ',
                'TGO',
                'TUN',
                'UGA',
                'EGY',
                'TZA',
                'BFA',
                'ZMB',
            ]),
            'country-code-antarctica' => $faker->randomElement([
                'ATA',
                'BVT',
                'SGS',
                'ATF',
                'HMD',
            ]),
            'country-code-asia' => $faker->randomElement([
                'AFG',
                'AZE',
                'BHR',
                'BGD',
                'ARM',
                'BTN',
                'IOT',
                'BRN',
                'MMR',
                'KHM',
                'LKA',
                'CHN',
                'TWN',
                'CXR',
                'CCK',
                'CYP',
                'GEO',
                'PSE',
                'HKG',
                'IND',
                'IDN',
                'IRN',
                'IRQ',
                'ISR',
                'JPN',
                'KAZ',
                'JOR',
                'PRK',
                'KOR',
                'KWT',
                'KGZ',
                'LAO',
                'LBN',
                'MAC',
                'MYS',
                'MDV',
                'MNG',
                'OMN',
                'NPL',
                'PAK',
                'PHL',
                'TLS',
                'QAT',
                'RUS',
                'SAU',
                'SGP',
                'VNM',
                'SYR',
                'TJK',
                'THA',
                'ARE',
                'TUR',
                'TKM',
                'UZB',
                'YEM',
            ]),
            'country-code-europe' => $faker->randomElement([
                'ALB',
                'AND',
                'AZE',
                'AUT',
                'ARM',
                'BEL',
                'BIH',
                'BGR',
                'BLR',
                'HRV',
                'CYP',
                'CZE',
                'DNK',
                'EST',
                'FRO',
                'FIN',
                'ALA',
                'FRA',
                'GEO',
                'DEU',
                'GIB',
                'GRC',
                'VAT',
                'HUN',
                'ISL',
                'IRL',
                'ITA',
                'KAZ',
                'LVA',
                'LIE',
                'LTU',
                'LUX',
                'MLT',
                'MCO',
                'MDA',
                'MNE',
                'NLD',
                'NOR',
                'POL',
                'PRT',
                'ROU',
                'RUS',
                'SMR',
                'SRB',
                'SVK',
                'SVN',
                'ESP',
                'SJM',
                'SWE',
                'CHE',
                'TUR',
                'UKR',
                'MKD',
                'GBR',
                'GGY',
                'JEY',
                'IMN',
            ]),
            'country-code-america' => $faker->randomElement([
                'ATG',
                'ARG',
                'BHS',
                'BRB',
                'BMU',
                'BOL',
                'BRA',
                'BLZ',
                'VGB',
                'CAN',
                'CYM',
                'CHL',
                'COL',
                'CRI',
                'CUB',
                'DMA',
                'DOM',
                'ECU',
                'SLV',
                'FLK',
                'GUF',
                'GRL',
                'GRD',
                'GLP',
                'GTM',
                'GUY',
                'HTI',
                'HND',
                'JAM',
                'MTQ',
                'MEX',
                'MSR',
                'ANT',
                'CUW',
                'ABW',
                'SXM',
                'BES',
                'NIC',
                'UMI',
                'PAN',
                'PRY',
                'PER',
                'PRI',
                'BLM',
                'KNA',
                'AIA',
                'LCA',
                'MAF',
                'SPM',
                'VCT',
                'SUR',
                'TTO',
                'TCA',
                'USA',
                'VIR',
                'URY',
                'VEN',
            ]),
            'country-code-australia' => 'AUS',
            'country-code-oceania' => $faker->randomElement([
                'ASM',
                'AUS',
                'SLB',
                'COK',
                'FJI',
                'PYF',
                'KIR',
                'GUM',
                'NRU',
                'NCL',
                'VUT',
                'NZL',
                'NIU',
                'NFK',
                'MNP',
                'UMI',
                'FSM',
                'MHL',
                'PLW',
                'PNG',
                'PCN',
                'TKL',
                'TON',
                'TUV',
                'WLF',
                'WSM',
            ]),
        ];
    }
}
