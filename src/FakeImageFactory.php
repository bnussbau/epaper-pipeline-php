<?php

declare(strict_types=1);

namespace Bnussbau\EpaperPipeline;

use Bnussbau\EpaperPipeline\Exceptions\ProcessingException;
use GdImage;

/**
 * Creates deterministic mock images for fake mode testing.
 */
final class FakeImageFactory
{
    /**
     * Apply the fake image fill to a GD image resource.
     */
    public static function fill(GdImage $image, int $width, int $height, ?string $seed): void
    {
        if ($seed === null) {
            $white = imagecolorallocate($image, 255, 255, 255);
            if ($white === false) {
                throw new ProcessingException('Failed to allocate color for mock image');
            }

            imagefill($image, 0, 0, $white);

            return;
        }

        $hash = hash('sha256', $seed);
        $red = (int) hexdec(substr($hash, 0, 2));
        $green = (int) hexdec(substr($hash, 2, 2));
        $blue = (int) hexdec(substr($hash, 4, 2));

        $background = imagecolorallocate($image, $red, $green, $blue);
        if ($background === false) {
            throw new ProcessingException('Failed to allocate color for mock image');
        }

        imagefill($image, 0, 0, $background);

        $contrast = imagecolorallocate($image, 255 - $red, 255 - $green, 255 - $blue);
        if ($contrast === false) {
            return;
        }

        for ($index = 0; $index < 8; $index++) {
            $x = (int) hexdec(substr($hash, $index * 2, 2)) % max($width, 1);
            $y = (int) hexdec(substr($hash, $index * 2 + 1, 2)) % max($height, 1);
            imagesetpixel($image, $x, $y, $contrast);
        }
    }
}
