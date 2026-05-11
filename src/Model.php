<?php

declare(strict_types=1);

namespace Bnussbau\EpaperPipeline;

use Bnussbau\EpaperPipeline\Data\ModelData;
use Bnussbau\EpaperPipeline\Exceptions\ProcessingException;

enum Model: string
{
    case TRMNL_OG = 'trmnl_og';
    case TRMNL_OG_2BIT = 'trmnl_og_2bit';
    case TRMNL_X = 'trmnl_x';
    case TRMNL_OG_BWRY = 'trmnl_og_bwry';

    case AMAZON_KINDLE_2024 = 'amazon_kindle_2024';
    case AMAZON_KINDLE_PAPERWHITE_6TH_GEN = 'amazon_kindle_paperwhite_6th_gen';
    case AMAZON_KINDLE_PAPERWHITE_7TH_GEN = 'amazon_kindle_paperwhite_7th_gen';
    case INKPLATE_10 = 'inkplate_10';
    case AMAZON_KINDLE_7 = 'amazon_kindle_7';
    case INKY_IMPRESSION_7_3 = 'inky_impression_7_3';
    case KOBO_LIBRA_2 = 'kobo_libra_2';
    case AMAZON_KINDLE_OASIS_2 = 'amazon_kindle_oasis_2';
    case KOBO_AURA_ONE = 'kobo_aura_one';
    case KOBO_AURA_HD = 'kobo_aura_hd';
    case INKY_IMPRESSION_13_3 = 'inky_impression_13_3';
    case M5_PAPER_S3 = 'm5_paper_s3';
    case AMAZON_KINDLE_SCRIBE = 'amazon_kindle_scribe';
    case SEEED_E1001 = 'seeed_e1001';
    case SEEED_E1002 = 'seeed_e1002';
    case WAVESHARE_4_26 = 'waveshare_4_26';
    case WAVESHARE_7_5_BW = 'waveshare_7_5_bw';
    case GENERIC_16_9 = 'generic_16_9';
    case PALMA = 'palma';
    case ONYX_BOOX_GO_7 = 'onyx_boox_go_7';
    case KOBO_GLO = 'kobo_glo';
    case WAVESHARE_7_5_BWR = 'waveshare_7_5_bwr';
    case WAVESHARE_7_5_BWRY = 'waveshare_7_5_bwry';
    case ONXY_BOOX_NOVA_AIR_C = 'onxy_boox_nova_air_c';
    case XTEINK_X4 = 'xteink_x4';
    case NOOK_SIMPLE_TOUCH = 'nook_simple_touch';
    case KOBO_SAGE = 'kobo_sage';
    case AMAZON_KINDLE_VOYAGE = 'amazon_kindle_voyage';
    case INKPLATE_5_2 = 'inkplate_5_2';
    case RASPBERRY_PI_TOUCH_2 = 'raspberry_pi_touch_2';
    case ED133UT2 = 'ed133ut2';
    case AVALUE_EPD_42S = 'avalue_epd_42s';
    case KOBO_TOUCH = 'kobo_touch';
    case KOBO_FORMA = 'kobo_forma';
    case OPENFRAME = 'openframe';
    case AMAZON_KINDLE_PAPERWHITE_SIGNATURE_11TH_GEN = 'amazon_kindle_paperwhite_signature_11th_gen';
    case INKPLATE_6_PLUS = 'inkplate_6_plus';
    case KOBO_AURA_H2O_2 = 'kobo_aura_h2o_2';

    // TRMNL legacy models
    case OG = 'og';
    case OG_PNG = 'og_png';
    case OG_BMP = 'og_bmp';
    case OG_PLUS = 'og_plus';
    case OG_BWRY = 'og_bwry';
    case V2 = 'v2';

    /**
     * Get the model data from JSON
     *
     * @throws ProcessingException
     */
    public function getData(): ModelData
    {
        // resolve aliases
        $modelName = match ($this) {
            self::OG => 'og_png',
            self::TRMNL_OG => 'og_png',
            self::TRMNL_OG_2BIT => 'og_plus',
            self::TRMNL_OG_BWRY => 'og_bwry',
            self::TRMNL_X => 'v2',
            default => $this->value,
        };

        return ModelData::getByName($modelName);
    }

    public function getLabel(): string
    {
        return $this->getData()->label;
    }

    public function getDescription(): string
    {
        return $this->getData()->description;
    }

    public function getWidth(): int
    {
        return $this->getData()->width;
    }

    public function getHeight(): int
    {
        return $this->getData()->height;
    }

    public function getColors(): int
    {
        return $this->getData()->colors;
    }

    public function getBitDepth(): int
    {
        return $this->getData()->bitDepth;
    }

    public function getScaleFactor(): float
    {
        return $this->getData()->scaleFactor;
    }

    public function getRotation(): int
    {
        return $this->getData()->rotation;
    }

    public function getMimeType(): string
    {
        return $this->getData()->mimeType;
    }

    public function getOffsetX(): int
    {
        return $this->getData()->offsetX;
    }

    public function getOffsetY(): int
    {
        return $this->getData()->offsetY;
    }

    public function getKind(): string
    {
        return $this->getData()->kind;
    }

    /**
     * Get palette IDs for this model
     *
     * @return array<string>
     *
     * @throws ProcessingException
     */
    public function getPaletteIds(): array
    {
        return $this->getData()->paletteIds;
    }

    /**
     * Get all models of a specific kind
     *
     * @param  string  $kind  The kind to filter by (trmnl, kindle, byod)
     * @return array<Model>
     *
     * @throws ProcessingException
     */
    public static function getByKind(string $kind): array
    {
        $modelData = ModelData::getByKind($kind);
        $modelNames = array_keys($modelData);

        return array_values(array_filter(
            self::cases(),
            fn (Model $model): bool => in_array($model->value, $modelNames, true)
        ));
    }

    /**
     * Get all TRMNL models
     *
     * @return array<Model>
     *
     * @throws ProcessingException
     */
    public static function getTrmnlModels(): array
    {
        return self::getByKind('trmnl');
    }

    /**
     * Get all Kindle models
     *
     * @return array<Model>
     *
     * @throws ProcessingException
     */
    public static function getKindleModels(): array
    {
        return self::getByKind('kindle');
    }

    /**
     * Get all BYOD (Bring Your Own Device) models
     *
     * @return array<Model>
     *
     * @throws ProcessingException
     */
    public static function getByodModels(): array
    {
        return self::getByKind('byod');
    }
}
