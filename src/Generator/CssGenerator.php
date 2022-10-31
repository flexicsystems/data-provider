<?php

namespace Flexic\DataProvider\Generator;

class CssGenerator extends AbstractGenerator
{
    public static function random(int $min, int $max): string
    {
        $faker = self::faker();

        $objects = [];
        for ($i = 0; $faker->numberBetween($min, $max) > $i; ++$i) {
            $object = \sprintf('%s%s', $faker->randomElement(['.', '#']), $faker->word);
            $objects[$object] = [];

            for ($j = 0; $faker->numberBetween(1, 15) > $j; ++$j) {
                $objects[$object][] = self::statement();
            }
        }

        return \implode(
            ' ',
            \array_map(
                static function (string $object, array $statements): string {
                    return \sprintf('%s{%s;}', $object, \implode(';', $statements));
                },
                \array_keys($objects),
                $objects,
            )
        );
    }

    protected static function statement(): string {
        $faker = self::faker();

        return $faker->randomElement([
            \sprintf('font-size: %s', $faker->numberBetween(0, 100)),
            \sprintf('width: %s%s', $faker->numberBetween(0, 100), $faker->randomElement(['px', '%', 'em'])),
            \sprintf('height: %s%s', $faker->numberBetween(0, 100), $faker->randomElement(['px', '%', 'em'])),
            \sprintf('background-color: %s', $faker->hexColor()),
            \sprintf('background: %s', $faker->hexColor()),
            \sprintf('color: %s', $faker->hexColor()),
            \sprintf('border: %s', $faker->randomElement(['1px solid #000', 'none', '3px solid #fff', '5px #ccc'])),
            \sprintf('border-radius: %s', $faker->numberBetween(0, 100)),
            \sprintf('border-top: %s', $faker->randomElement(['1px solid #000', 'none', '3px solid #fff', '5px #ccc'])),
            \sprintf('border-top-left-radius: %s', $faker->numberBetween(0, 100)),
            \sprintf('border-top-right-radius: %s', $faker->numberBetween(0, 100)),
            \sprintf('border-bottom: %s', $faker->randomElement(['1px solid #000', 'none', '3px solid #fff', '5px #ccc'])),
            \sprintf('border-bottom-left-radius: %s', $faker->numberBetween(0, 100)),
            \sprintf('border-bottom-right-radius: %s', $faker->numberBetween(0, 100)),
            \sprintf('border-left: %s', $faker->randomElement(['1px solid #000', 'none', '3px solid #fff', '5px #ccc'])),
            \sprintf('border-right: %s', $faker->randomElement(['1px solid #000', 'none', '3px solid #fff', '5px #ccc'])),
            \sprintf('margin: %s', $faker->numberBetween(0, 100)),
            \sprintf('margin-top: %s', $faker->numberBetween(0, 100)),
            \sprintf('margin-left: %s', $faker->numberBetween(0, 100)),
            \sprintf('margin-right: %s', $faker->numberBetween(0, 100)),
            \sprintf('margin-bottom: %s', $faker->numberBetween(0, 100)),
            \sprintf('padding: %s', $faker->numberBetween(0, 100)),
            \sprintf('padding-top: %s', $faker->numberBetween(0, 100)),
            \sprintf('padding-left: %s', $faker->numberBetween(0, 100)),
            \sprintf('padding-right: %s', $faker->numberBetween(0, 100)),
            \sprintf('padding-bottom: %s', $faker->numberBetween(0, 100)),
            \sprintf('display: %s', $faker->randomElement(['block', 'inline', 'inline-block', 'flex', 'inline-flex'])),
            \sprintf('position: %s', $faker->randomElement(['absolute', 'relative', 'fixed', 'static'])),
            \sprintf('top: %s', $faker->numberBetween(0, 100)),
            \sprintf('left: %s', $faker->numberBetween(0, 100)),
            \sprintf('right: %s', $faker->numberBetween(0, 100)),
            \sprintf('bottom: %s', $faker->numberBetween(0, 100)),
            \sprintf('z-index: %s', $faker->numberBetween(0, 100)),
            \sprintf('opacity: %s', $faker->randomElement(['0.1', '0.5', '0.75', '1'])),
            \sprintf('overflow: %s', $faker->randomElement(['hidden', 'visible', 'scroll', 'auto'])),
            \sprintf('overflow-x: %s', $faker->randomElement(['hidden', 'visible', 'scroll', 'auto'])),
            \sprintf('overflow-y: %s', $faker->randomElement(['hidden', 'visible', 'scroll', 'auto'])),
            \sprintf('box-shadow: %s', $faker->randomElement(['none', '0 0 5px #000', '0 0 5px #fff'])),
            \sprintf('text-shadow: %s', $faker->randomElement(['none', '0 0 5px #000', '0 0 5px #fff'])),
            \sprintf('text-decoration: %s', $faker->randomElement(['none', 'underline', 'line-through'])),
            \sprintf('text-transform: %s', $faker->randomElement(['none', 'uppercase', 'lowercase'])),
            \sprintf('text-align: %s', $faker->randomElement(['left', 'right', 'center'])),
            \sprintf('vertical-align: %s', $faker->randomElement(['top', 'middle', 'bottom'])),
            \sprintf('line-height: %s', $faker->numberBetween(0, 100)),
            \sprintf('letter-spacing: %s', $faker->numberBetween(0, 100)),
            \sprintf('word-spacing: %s', $faker->numberBetween(0, 100)),
            \sprintf('font-family: %s', $faker->randomElement(['Arial', 'Helvetica', 'Times New Roman', 'Verdana', 'Courier New'])),
            \sprintf('font-weight: %s', $faker->randomElement(['normal', 'bold', 'bolder', 'lighter', '100', '200', '300', '400', '500', '600', '700', '800', '900'])),
            \sprintf('font-style: %s', $faker->randomElement(['normal', 'italic', 'oblique'])),
            \sprintf('font-size: %s', $faker->numberBetween(0, 100)),
            \sprintf('font-variant: %s', $faker->randomElement(['normal', 'small-caps'])),
            \sprintf('content: %s', $faker->randomElement(['none', 'normal', 'open-quote', 'close-quote', 'no-open-quote', 'no-close-quote'])),
            \sprintf('cursor: %s', $faker->randomElement(['auto', 'default', 'none', 'context-menu', 'help', 'pointer', 'progress', 'wait', 'cell', 'crosshair', 'text', 'vertical-text', 'alias', 'copy', 'move', 'no-drop', 'not-allowed', 'e-resize', 'n-resize', 'ne-resize', 'nw-resize', 's-resize', 'se-resize', 'sw-resize', 'w-resize', 'ew-resize', 'ns-resize', 'nesw-resize', 'nwse-resize', 'col-resize', 'row-resize', 'all-scroll', 'zoom-in', 'zoom-out', 'grab', 'grabbing'])),
            \sprintf('visibility: %s', $faker->randomElement(['visible', 'hidden', 'collapse'])),
            \sprintf('min-width: %s%s', $faker->numberBetween(0, 100), $faker->randomElement(['px', '%', 'em'])),
            \sprintf('min-height: %s%s', $faker->numberBetween(0, 100), $faker->randomElement(['px', '%', 'em'])),
            \sprintf('max-width: %s%s', $faker->numberBetween(0, 100), $faker->randomElement(['px', '%', 'em'])),
            \sprintf('max-height: %s%s', $faker->numberBetween(0, 100), $faker->randomElement(['px', '%', 'em'])),
        ]);
    }
}