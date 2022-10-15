<?php

namespace Flexic\DataProvider\Payment;

use Flexic\DataProvider\AbstractProvider;

class CreditCardTypeProvider extends AbstractProvider
{
    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function type(): \Generator
    {
        yield from self::provideDataForValues(self::values());
    }

    /**
     * @return array<string, string>
     */
    private static function values(): array
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
            'type-jcb' => 'JCB'
        ];
    }
}