<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\DataProvider\File;

use Flexic\DataProvider\AbstractProvider;

final class CompressionProvider extends AbstractProvider
{
    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function arbitrary(): \Generator
    {
        yield from self::provideDataForValues(self::values());
    }

    public static function values(): array
    {
        $faker = self::faker();

        return [
            'compression' => $faker->randomElement([
                'arc',
                'arj',
                'as',
                'b64',
                'btoa',
                'bz',
                'bz2',
                'cab',
                'cpt',
                'gz',
                'hqx',
                'iso',
                'lha',
                'lzh',
                'mim',
                'mme',
                'pak',
                'pf',
                'rar',
                'rpm',
                'sea',
                'sit',
                'sitx',
                'targz',
                'tbz',
                'tbz2',
                'tgz',
                'uu',
                'uue',
                'z',
                'zip',
                'zipx',
                'zoo',
            ]),
        ];
    }
}
