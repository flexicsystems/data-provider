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

final class MimeTypeProvider extends AbstractProvider
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
    public static function video(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'mimetype-video' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function audio(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'mimetype-audio' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function application(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'mimetype-application' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function image(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'mimetype-image' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function text(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'mimetype-text' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function font(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'mimetype-font' === $key;
        });
    }

    public static function values(): array
    {
        $faker = self::faker();

        return [
            'mimetype-video' => $faker->randomElement([
                'video/x-msvideo',
                'video/mp4',
                'video/mpeg',
                'video/ogg',
                'video/mp2t',
                'video/webm',
                'video/3gpp',
                'video/3gpp2',
            ]),
            'mimetype-audio' => $faker->randomElement([
                'audio/aac',
                'audio/mpeg',
                'audio/ogg',
                'audio/wav',
                'audio/webm',
                'audio/3gpp',
                'audio/3gpp2',
                'audio/midi',
                'audio/x-midi',
                'audio/opus',
                'audio/webp',
            ]),
            'mimetype-application' => $faker->randomElement([
                'application/x-abiword',
                'application/x-freearc',
                'application/vnd.amazon.ebook',
                'application/octet-stream',
                'application/x-bzip',
                'application/x-bzip2',
                'application/x-cdf',
                'application/x-csh',
                'application/msword',
                'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                'application/vnd.ms-fontobject',
                'application/epub+zip',
                'application/gzip',
                'application/java-archive',
                'application/json',
                'application/ld+json',
                'application/vnd.apple.installer+xml',
                'application/vnd.oasis.opendocument.presentation',
                'application/vnd.oasis.opendocument.spreadsheet',
                'application/vnd.oasis.opendocument.text',
                'application/ogg',
                'application/pdf',
                'application/x-httpd-php',
                'application/vnd.ms-powerpoint',
                'application/vnd.openxmlformats-officedocument.presentationml.presentation',
                'application/vnd.rar',
                'application/rtf',
                'application/x-sh',
                'application/vnd.visio',
                'application/x-tar',
                'application/xhtml+xml',
                'application/vnd.ms-excel',
                'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                'application/xml',
                'application/atom+xml',
                'application/vnd.mozilla.xul+xml',
                'application/zip',
                'application/x-7z-compressed',
            ]),
            'mimetype-image' => $faker->randomElement([
                'image/bmp',
                'image/gif',
                'image/jpeg',
                'image/png',
                'image/svg+xml',
                'image/tiff',
                'image/webp',
                'image/avif',
                'image/vnd.microsoft.icon',
            ]),
            'mimetype-text' => $faker->randomElement([
                'text/plain',
                'text/html',
                'text/css',
                'text/csv',
                'text/javascript',
                'text/markdown',
                'text/calendar',
                'text/xml',
            ]),
            'mimetype-font' => $faker->randomElement([
                'font/otf',
                'font/ttf',
                'font/woff',
                'font/woff2',
            ]),
        ];
    }
}
