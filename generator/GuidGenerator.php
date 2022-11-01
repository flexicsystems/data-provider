<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\DataProvider\Generator;

final class GuidGenerator
{
    public static function generate(): string
    {
        if (\function_exists('com_create_guid') === true) {
            return \trim(\com_create_guid(), '{}');
        }

        $data = \openssl_random_pseudo_bytes(16);
        $data[6] = \chr(\ord($data[6]) & 0x0F | 0x40);
        $data[8] = \chr(\ord($data[8]) & 0x3F | 0x80);

        return \vsprintf('%s%s-%s-%s-%s-%s%s%s', \mb_str_split(\bin2hex($data), 4));
    }
}
