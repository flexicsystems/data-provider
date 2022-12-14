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

final class CountryCodeAlpha2Provider extends AbstractProvider
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
                'DZ',
                'AO',
                'BW',
                'BI',
                'CM',
                'CV',
                'CF',
                'TD',
                'KM',
                'YT',
                'CG',
                'CD',
                'BJ',
                'GQ',
                'ET',
                'ER',
                'DJ',
                'GA',
                'GM',
                'GH',
                'GN',
                'CI',
                'KE',
                'LS',
                'LR',
                'LY',
                'MG',
                'MW',
                'ML',
                'MR',
                'MU',
                'MA',
                'MZ',
                'NA',
                'NE',
                'NG',
                'GW',
                'RE',
                'RW',
                'SH',
                'ST',
                'SN',
                'SC',
                'SL',
                'SO',
                'ZA',
                'ZW',
                'SS',
                'EH',
                'SD',
                'SZ',
                'TG',
                'TN',
                'UG',
                'EG',
                'TZ',
                'BF',
                'ZM',
            ]),
            'country-code-antarctica' => $faker->randomElement([
                'AQ',
                'BV',
                'GS',
                'TF',
                'HM',
            ]),
            'country-code-asia' => $faker->randomElement([
                'AF',
                'AZ',
                'BH',
                'BD',
                'AM',
                'BT',
                'IO',
                'BN',
                'MM',
                'KH',
                'LK',
                'CN',
                'TW',
                'CX',
                'CC',
                'CY',
                'GE',
                'PS',
                'HK',
                'IN',
                'ID',
                'IR',
                'IQ',
                'IL',
                'JP',
                'KZ',
                'JO',
                'KP',
                'KR',
                'KW',
                'KG',
                'LA',
                'LB',
                'MO',
                'MY',
                'MV',
                'MN',
                'OM',
                'NP',
                'PK',
                'PH',
                'TL',
                'QA',
                'RU',
                'SA',
                'SG',
                'VN',
                'SY',
                'TJ',
                'TH',
                'AE',
                'TR',
                'TM',
                'UZ',
                'YE',
                'XE',
                'XD',
                'XS',
            ]),
            'country-code-europe' => $faker->randomElement([
                'AL',
                'AD',
                'AZ',
                'AT',
                'AM',
                'BE',
                'BA',
                'BG',
                'BY',
                'HR',
                'CY',
                'CZ',
                'DK',
                'EE',
                'FO',
                'FI',
                'AX',
                'FR',
                'GE',
                'DE',
                'GI',
                'GR',
                'VA',
                'HU',
                'IS',
                'IE',
                'IT',
                'KZ',
                'LV',
                'LI',
                'LT',
                'LU',
                'MT',
                'MC',
                'MD',
                'ME',
                'NL',
                'NO',
                'PL',
                'PT',
                'RO',
                'RU',
                'SM',
                'RS',
                'SK',
                'SI',
                'ES',
                'SJ',
                'SE',
                'CH',
                'TR',
                'UA',
                'MK',
                'GB',
                'GG',
                'JE',
                'IM',
            ]),
            'country-code-america' => $faker->randomElement([
                'AG',
                'AR',
                'BS',
                'BB',
                'BM',
                'BO',
                'BR',
                'BZ',
                'VG',
                'CA',
                'KY',
                'CL',
                'CO',
                'CR',
                'CU',
                'DM',
                'DO',
                'EC',
                'SV',
                'FK',
                'GF',
                'GL',
                'GD',
                'GP',
                'GT',
                'GY',
                'HT',
                'HN',
                'JM',
                'MQ',
                'MX',
                'MS',
                'AN',
                'CW',
                'AW',
                'SX',
                'BQ',
                'NI',
                'UM',
                'PA',
                'PY',
                'PE',
                'PR',
                'BL',
                'KN',
                'AI',
                'LC',
                'MF',
                'PM',
                'VC',
                'SR',
                'TT',
                'TC',
                'US',
                'VI',
                'UY',
                'VE',
            ]),
            'country-code-australia' => 'AU',
            'country-code-oceania' => $faker->randomElement([
                'AS',
                'SB',
                'CK',
                'FJ',
                'PF',
                'KI',
                'GU',
                'NR',
                'NC',
                'VU',
                'NZ',
                'NU',
                'NF',
                'MP',
                'UM',
                'FM',
                'MH',
                'PW',
                'PG',
                'PN',
                'TK',
                'TO',
                'TV',
                'WF',
                'WS',
                'XX',
            ]),
        ];
    }
}
