<?php

namespace Flexic\DataProvider\File;

use Flexic\DataProvider\AbstractProvider;

class FileProvider extends AbstractProvider
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
    public static function arbitraryCompressed(): \Generator
    {
        yield from self::provideDataForValues(self::values(true));
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function audio(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'file-audio' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function video(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(true), static function (string $key): bool {
            return 'file-audio' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function image(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'file-image' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function document(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'file-document' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function archive(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'file-archive' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function executable(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'file-executable' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function code(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'file-code' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function font(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'file-font' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function spreadsheet(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'file-spreadsheet' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function presentation(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'file-presentation' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function database(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'file-database' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function model(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'file-model' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function message(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'file-message' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function system(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'file-system' === $key;
        });
    }

    public static function values(bool $compressed = false): array
    {
        return [
            'file-audio' => self::random('audio', $compressed),
            'file-video' => self::random('video', $compressed),
            'file-image' => self::random('image', $compressed),
            'file-document' => self::random('document', $compressed),
            'file-archive' => self::random('archive', $compressed),
            'file-executable' => self::random('executable', $compressed),
            'file-code' => self::random('code', $compressed),
            'file-font' => self::random('font', $compressed),
            'file-spreadsheet' => self::random('spreadsheet', $compressed),
            'file-presentation' => self::random('presentation', $compressed),
            'file-database' => self::random('database', $compressed),
            'file-model' => self::random('model', $compressed),
            'file-message' => self::random('message', $compressed),
            'file-system' => self::random('system', $compressed),
        ];
    }

    public static function random(string $context, bool $compress): string
    {
        $faker = self::faker();

        $name = $faker->randomElement([
            $faker->uuid(),
            \implode($faker->randomElement(['-', '_']),
                $faker->words($faker->numberBetween(1, 5), false)
            ),
            $faker->randomNumber($faker->numberBetween(5, 9), true)
        ]);

        return \sprintf(
            '%s.%s%s',
            $name,
            ExtensionProvider::values()[\sprintf('extension-%s', $context)],
            $compress ? '.gz' : ''
        );
    }
}