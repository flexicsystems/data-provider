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

final class ExtensionProvider extends AbstractProvider
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
    public static function audio(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'extension-audio' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function video(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'extension-video' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function image(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'extension-image' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function document(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'extension-document' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function archive(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'extension-archive' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function executable(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'extension-executable' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function font(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'extension-font' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function code(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'extension-code' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function database(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'extension-database' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function presentation(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'extension-presentation' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function spreadsheet(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'extension-spreadsheet' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function models(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'extension-models' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function message(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'extension-message' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function system(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'extension-system' === $key;
        });
    }

    public static function values(): array
    {
        $faker = self::faker();

        return [
            'extension-audio' => $faker->randomElement(['aac', 'aiff', 'flac', 'm4a', 'mp3', 'ogg', 'wav', 'wma', 'aif', 'cda', 'mid', 'midi', 'mpa', 'wpl']),
            'extension-video' => $faker->randomElement(['avi', 'flv', 'm4v', 'mkv', 'mov', 'mp4', 'mpg', 'wmv', '3g2', '3gp', 'avi', 'flv', 'h264', 'm4v', 'mkv', 'mov', 'mp4', 'mpg', 'mpeg', 'rm', 'swf', 'vob', 'wmv']),
            'extension-image' => $faker->randomElement(['bmp', 'gif', 'jpg', 'png', 'psd', 'svg', 'tif', 'tiff', 'ai', 'ico', 'jpeg', 'ps', 'pspimage', 'thm', 'yuv', 'psd', 'ps', 'ai', 'eps', 'ps']),
            'extension-document' => $faker->randomElement(['doc', 'docx', 'odt', 'pdf', 'rtf', 'tex', 'txt', 'wpd']),
            'extension-archive' => $faker->randomElement(['7z', 'cbr', 'deb', 'gz', 'pkg', 'rar', 'rpm', 'tar.gz', 'zip', 'arj', 'z']),
            'extension-executable' => $faker->randomElement(['apk', 'bat', 'bin', 'cgi', 'pl', 'com', 'exe', 'gadget', 'jar', 'msi', 'wsf', 'dmg', 'iso', 'toast', 'vcd']),
            'extension-font' => $faker->randomElement(['fnt', 'fon', 'otf', 'ttf', 'woff', 'woff2', 'eot', 'pfb', 'pfm', 'afm']),
            'extension-code' => $faker->randomElement(['css', 'htm', 'html', 'js', 'ts', 'php', 'py', 'rb', 'xhtml', 'c', 'cgi', 'pl', 'cpp', 'class', 'cs', 'h', 'java', 'sh', 'swift', 'vb', 'asp', 'aspx', 'cer', 'cmf', 'cgi', 'pl', 'rss']),
            'extension-database' => $faker->randomElement(['csv', 'dat', 'db', 'dbf', 'log', 'mdb', 'sav', 'sql', 'tar', 'xml', 'json', 'yaml', 'yml', 'ini', 'log', 'dat', 'neon']),
            'extension-presentation' => $faker->randomElement(['key', 'odp', 'pps', 'ppt', 'pptx']),
            'extension-spreadsheet' => $faker->randomElement(['ods', 'xlr', 'xls', 'xlsx']),
            'extension-models' => $faker->randomElement(['3dm', '3ds', 'max', 'obj']),
            'extension-message' => $faker->randomElement(['eml', 'emlx', 'msg', 'oft', 'ost', 'pst', 'vcf', 'email', 'sms']),
            'extension-system' => $faker->randomElement(['bak', 'tmp', 'cab', 'cfg', 'cpl', 'cur', 'dll', 'dmp', 'drv', 'icns', 'ico', 'ini', 'lnk', 'msi', 'sys', 'tmp', 'crdownload', 'ics', 'msi', 'part', 'torrent']),
        ];
    }
}
