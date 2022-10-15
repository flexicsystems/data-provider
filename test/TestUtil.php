<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\DataProvider\Test;

final class TestUtil
{
    public static function string(\Generator $generator): string
    {
        return $generator->current()[0];
    }

    public static function array(\Generator $generator): array
    {
        return \array_map(static function(array $input) {
            return $input[0];
        }, $generator->current());
    }
}
