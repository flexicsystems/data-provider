<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\DataProvider\Payment;

use Flexic\DataProvider\AbstractProvider;

final class CreditCardTypeProvider extends AbstractProvider
{
    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function arbitrary(): \Generator
    {
        yield from self::provideDataForValues(self::values());
    }

    /**
     * @return array<string, string>
     */
    public static function values(): array
    {
        return [
            'type-visa' => 'Visa',
            'type-visa-ready-link' => 'Visa ReadyLink',
            'type-mastercard' => 'MasterCard',
            'type-american-express' => 'AmericanExpress',
            'type-discover' => 'Discover',
            'type-interlink' => 'Interlink',
            'type-star' => 'Star',
            'type-accel' => 'Accel',
            'type-interac' => 'Interac',
            'type-pulse' => 'PULSE',
            'type-jcb' => 'JCB',
        ];
    }
}
