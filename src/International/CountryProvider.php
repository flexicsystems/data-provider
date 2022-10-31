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

final class CountryProvider extends AbstractProvider
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
            return 'country-africa' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function asia(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'country-asia' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function europe(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'country-europe' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function america(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'country-america' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function oceania(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'country-oceania' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function antarctica(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'country-antarctica' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function australia(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'country-australia' === $key;
        });
    }


    public static function values(): array
    {
        $faker = self::faker();

        return [
            'country-africa' => $faker->randomElement([
                'Algeria, People`s Democratic Republic of',
                'Angola, Republic of',
                'Botswana, Republic of',
                'Burundi, Republic of',
                'Cameroon, Republic of',
                'Cape Verde, Republic of',
                'Central African Republic',
                'Chad, Republic of',
                'Comoros, Union of the',
                'Mayotte',
                'Congo, Republic of the',
                'Congo, Democratic Republic of the',
                'Benin, Republic of',
                'Equatorial Guinea, Republic of',
                'Ethiopia, Federal Democratic Republic of',
                'Eritrea, State of',
                'Djibouti, Republic of',
                'Gabon, Gabonese Republic',
                'Gambia, Republic of the',
                'Ghana, Republic of',
                'Guinea, Republic of',
                'Cote d`Ivoire, Republic of',
                'Kenya, Republic of',
                'Lesotho, Kingdom of',
                'Liberia, Republic of',
                'Libyan Arab Jamahiriya',
                'Madagascar, Republic of',
                'Malawi, Republic of',
                'Mali, Republic of',
                'Mauritania, Islamic Republic of',
                'Mauritius, Republic of',
                'Morocco, Kingdom of',
                'Mozambique, Republic of',
                'Namibia, Republic of',
                'Niger, Republic of',
                'Nigeria, Federal Republic of',
                'Guinea-Bissau, Republic of',
                'Reunion',
                'Rwanda, Republic of',
                'Saint Helena',
                'Sao Tome and Principe, Democratic Republic of',
                'Senegal, Republic of',
                'Seychelles, Republic of',
                'Sierra Leone, Republic of',
                'Somalia, Somali Republic',
                'South Africa, Republic of',
                'Zimbabwe, Republic of',
                'South Sudan',
                'Western Sahara',
                'Sudan, Republic of',
                'Swaziland, Kingdom of',
                'Togo, Togolese Republic',
                'Tunisia, Tunisian Republic',
                'Uganda, Republic of',
                'Egypt, Arab Republic of',
                'Tanzania, United Republic of',
                'Burkina Faso',
                'Zambia, Republic of',
            ]),
            'country-antarctica' => $faker->randomElement([
                'Antarctica (the territory South of 60 deg S)',
                'Bouvet Island (Bouvetoya)',
                'South Georgia and the South Sandwich Islands',
                'French Southern Territories',
                'Heard Island and McDonald Islands',
            ]),
            'country-asia' => $faker->randomElement([
                'Afghanistan, Islamic Republic of',
                'Azerbaijan, Republic of',
                'Bahrain, Kingdom of',
                'Bangladesh, People`s Republic of',
                'Armenia, Republic of',
                'Bhutan, Kingdom of',
                'British Indian Ocean Territory (Chagos Archipelago)',
                'Brunei Darussalam',
                'Myanmar, Union of',
                'Cambodia, Kingdom of',
                'Sri Lanka, Democratic Socialist Republic of',
                'China, People`s Republic of',
                'Taiwan',
                'Christmas Island',
                'Cocos (Keeling) Islands',
                'Cyprus, Republic of',
                'Georgia',
                'Palestinian Territory, Occupied',
                'Hong Kong, Special Administrative Region of China',
                'India, Republic of',
                'Indonesia, Republic of',
                'Iran, Islamic Republic of',
                'Iraq, Republic of',
                'Israel, State of',
                'Japan',
                'Kazakhstan, Republic of',
                'Jordan, Hashemite Kingdom of',
                'Korea, Democratic People`s Republic of',
                'Korea, Republic of',
                'Kuwait, State of',
                'Kyrgyz Republic',
                'Lao People`s Democratic Republic',
                'Lebanon, Lebanese Republic',
                'Macao, Special Administrative Region of China',
                'Malaysia',
                'Maldives, Republic of',
                'Mongolia',
                'Oman, Sultanate of',
                'Nepal, State of',
                'Pakistan, Islamic Republic of',
                'Philippines, Republic of the',
                'Timor-Leste, Democratic Republic of',
                'Qatar, State of',
                'Russian Federation',
                'Saudi Arabia, Kingdom of',
                'Singapore, Republic of',
                'Vietnam, Socialist Republic of',
                'Syrian Arab Republic',
                'Tajikistan, Republic of',
                'Thailand, Kingdom of',
                'United Arab Emirates',
                'Turkey, Republic of',
                'Turkmenistan',
                'Uzbekistan, Republic of',
                'Yemen',
                'Iraq-Saudi Arabia Neutral Zone',
                'United Nations Neutral Zone',
                'Spratly Islands',
            ]),
            'country-europe' => $faker->randomElement([
                'Albania, Republic of',
                'Andorra, Principality of',
                'Azerbaijan, Republic of',
                'Austria, Republic of',
                'Armenia, Republic of',
                'Belgium, Kingdom of',
                'Bosnia and Herzegovina',
                'Bulgaria, Republic of',
                'Belarus, Republic of',
                'Croatia, Republic of',
                'Cyprus, Republic of',
                'Czech Republic',
                'Denmark, Kingdom of',
                'Estonia, Republic of',
                'Faroe Islands',
                'Finland, Republic of',
                'Åland Islands',
                'France, French Republic',
                'Georgia',
                'Germany, Federal Republic of',
                'Gibraltar',
                'Greece, Hellenic Republic',
                'Holy See (Vatican City State)',
                'Hungary, Republic of',
                'Iceland, Republic of',
                'Ireland',
                'Italy, Italian Republic',
                'Kazakhstan, Republic of',
                'Latvia, Republic of',
                'Liechtenstein, Principality of',
                'Lithuania, Republic of',
                'Luxembourg, Grand Duchy of',
                'Malta, Republic of',
                'Monaco, Principality of',
                'Moldova, Republic of',
                'Montenegro, Republic of',
                'Netherlands, Kingdom of the',
                'Norway, Kingdom of',
                'Poland, Republic of',
                'Portugal, Portuguese Republic',
                'Romania',
                'Russian Federation',
                'San Marino, Republic of',
                'Serbia, Republic of',
                'Slovakia (Slovak Republic)',
                'Slovenia, Republic of',
                'Spain, Kingdom of',
                'Svalbard & Jan Mayen Islands',
                'Sweden, Kingdom of',
                'Switzerland, Swiss Confederation',
                'Turkey, Republic of',
                'Ukraine',
                'Macedonia, The Former Yugoslav Republic of',
                'United Kingdom of Great Britain & Northern Ireland',
                'Guernsey, Bailiwick of',
                'Jersey, Bailiwick of',
                'Isle of Man',
            ]),
            'country-america' => $faker->randomElement([
                'Antigua and Barbuda',
                'Argentina, Argentine Republic',
                'Bahamas, Commonwealth of the',
                'Barbados',
                'Bermuda',
                'Bolivia, Republic of',
                'Brazil, Federative Republic of',
                'Belize',
                'British Virgin Islands',
                'Canada',
                'Cayman Islands',
                'Chile, Republic of',
                'Colombia, Republic of',
                'Costa Rica, Republic of',
                'Cuba, Republic of',
                'Dominica, Commonwealth of',
                'Dominican Republic',
                'Ecuador, Republic of',
                'El Salvador, Republic of',
                'Falkland Islands (Malvinas)',
                'French Guiana',
                'Greenland',
                'Grenada',
                'Guadeloupe',
                'Guatemala, Republic of',
                'Guyana, Co-operative Republic of',
                'Haiti, Republic of',
                'Honduras, Republic of',
                'Jamaica',
                'Martinique',
                'Mexico, United Mexican States',
                'Montserrat',
                'Netherlands Antilles',
                'Curaçao',
                'Aruba',
                'Sint Maarten (Netherlands)',
                'Bonaire, Sint Eustatius and Saba',
                'Nicaragua, Republic of',
                'United States Minor Outlying Islands',
                'Panama, Republic of',
                'Paraguay, Republic of',
                'Peru, Republic of',
                'Puerto Rico, Commonwealth of',
                'Saint Barthelemy',
                'Saint Kitts and Nevis, Federation of',
                'Anguilla',
                'Saint Lucia',
                'Saint Martin',
                'Saint Pierre and Miquelon',
                'Saint Vincent and the Grenadines',
                'Suriname, Republic of',
                'Trinidad and Tobago, Republic of',
                'Turks and Caicos Islands',
                'United States of America',
                'United States Virgin Islands',
                'Uruguay, Eastern Republic of',
                'Venezuela, Bolivarian Republic of',
            ]),
            'country-australia' => 'Australia',
            'country-oceania' => $faker->randomElement([
                'American Samoa',
                'Australia, Commonwealth of',
                'Solomon Islands',
                'Cook Islands',
                'Fiji, Republic of the Fiji Islands',
                'French Polynesia',
                'Kiribati, Republic of',
                'Guam',
                'Nauru, Republic of',
                'New Caledonia',
                'Vanuatu, Republic of',
                'New Zealand',
                'Niue',
                'Norfolk Island',
                'Northern Mariana Islands, Commonwealth of the',
                'United States Minor Outlying Islands',
                'Micronesia, Federated States of',
                'Marshall Islands, Republic of the',
                'Palau, Republic of',
                'Papua New Guinea, Independent State of',
                'Pitcairn Islands',
                'Tokelau',
                'Tonga, Kingdom of',
                'Tuvalu',
                'Wallis and Futuna',
                'Samoa, Independent State of',
                'Disputed Territory',
            ]),
        ];
    }
}
