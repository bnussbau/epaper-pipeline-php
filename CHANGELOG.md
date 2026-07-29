# Changelog

All notable changes to `trmnl-pipeline-php` will be documented in this file.

## 1.1.0 - 2026-07-29

### What's Changed

* feat: add seed option to produce distinct mock images per seed

**Full Changelog**: https://github.com/bnussbau/epaper-pipeline-php/commits/1.1.0

## 1.0.0 - 2026-05-12

### What's Changed

* BREAKING CHANGE: updated name to `epaper-pipeline-php` and updated namespace to `Bnussbau\EpaperPipeline`
  
* feat: update models, palettes (via api)
  
  * AMAZON_KINDLE_PAPERWHITE_SIGNATURE_11TH_GEN
  * AMAZON_KINDLE_VOYAGE
  * AVALUE_EPD_42S
  * ED133UT2
  * GENERIC_16_9
  * INKPLATE_5_2
  * INKPLATE_6_PLUS
  * KOBO_AURA_H2O_2
  * KOBO_FORMA
  * KOBO_GLO
  * KOBO_SAGE
  * KOBO_TOUCH
  * NOOK_SIMPLE_TOUCH
  * ONXY_BOOX_NOVA_AIR_C
  * ONYX_BOOX_GO_7
  * OPENFRAME
  * PALMA
  * RASPBERRY_PI_TOUCH_2
  * TRMNL_OG_BWRY
  * WAVESHARE_7_5_BWR
  * WAVESHARE_7_5_BWRY
  * XTEINK_X4
  
* chore: renamed enum cases in Model
  
  * OG_PNG -> TRMNL_OG
  * OG_PLUS -> TRMNL_OG_2BIT
  * V2 -> TRMNL_X
  * legacy values are kept
  

**Full Changelog**: https://github.com/bnussbau/epaper-pipeline-php/compare/0.8.0...1.0.0

## 0.9.0 - 2026-05-11

### What's Changed

* feat: update models, palettes (via api)
  
  * AMAZON_KINDLE_PAPERWHITE_SIGNATURE_11TH_GEN
  * AMAZON_KINDLE_VOYAGE
  * AVALUE_EPD_42S
  * ED133UT2
  * GENERIC_16_9
  * INKPLATE_5_2
  * INKPLATE_6_PLUS
  * KOBO_AURA_H2O_2
  * KOBO_FORMA
  * KOBO_GLO
  * KOBO_SAGE
  * KOBO_TOUCH
  * NOOK_SIMPLE_TOUCH
  * ONXY_BOOX_NOVA_AIR_C
  * ONYX_BOOX_GO_7
  * OPENFRAME
  * PALMA
  * RASPBERRY_PI_TOUCH_2
  * TRMNL_OG_BWRY
  * WAVESHARE_7_5_BWR
  * WAVESHARE_7_5_BWRY
  * XTEINK_X4
  
* chore: renamed enum cases in Model
  
  * OG_PNG -> TRMNL_OG
  * OG_PLUS -> TRMNL_OG_2BIT
  * V2 -> TRMNL_X
  * legacy values are kept
  

**Full Changelog**: https://github.com/bnussbau/epaper-pipeline-php/compare/0.8.0...0.9.0

## 0.8.0 - 2026-02-12

### What's Changed

* feat: add URL support to BrowserStage for rendering web pages

**Full Changelog**: https://github.com/bnussbau/trmnl-pipeline-php/compare/0.7.0...0.8.0

## 0.7.0 - 2026-02-07

### What's Changed

* feat: enhance color palette support and update model configurations

**Full Changelog**: https://github.com/bnussbau/trmnl-pipeline-php/compare/0.6.0...0.7.0

## 0.6.0 - 2025-12-02

### What's Changed

* feat: add timezone option to BrowserStage

**Full Changelog**: https://github.com/bnussbau/trmnl-pipeline-php/compare/0.5.0...0.6.0

## 0.5.0 - 2025-11-25

### What's Changed

* feat(#7): add color palette support by @bnussbau in https://github.com/bnussbau/trmnl-pipeline-php/pull/9
* feat: add models
  * TRMNL X
  * Amazon Kindle Scribe
  * Seeed E1001 Monochrome
  * Seeed E1002 (2-bit)
  * Waveshare 4.26 (2-bit)
  * Waveshare 7.5 B/W
  

**Full Changelog**: https://github.com/bnussbau/trmnl-pipeline-php/compare/0.4.0...0.5.0

## 0.4.0 - 2025-10-30

### What's Changed

* feat: add property 'dither()' to ImageStage to control dithering

**Full Changelog**: https://github.com/bnussbau/trmnl-pipeline-php/compare/0.3.3...0.4.0

## 0.3.3 - 2025-10-29

### What's Changed

* fix: 1-bit and 2-bit image remapping / dithering

**Full Changelog**: https://github.com/bnussbau/trmnl-pipeline-php/compare/0.3.2...0.3.3

## 0.3.2 - 2025-10-17

### What's Changed

* fix: Browsershot::html() creates new instance, use setHtml() instead

**Full Changelog**: https://github.com/bnussbau/trmnl-pipeline-php/compare/0.3.1...0.3.2

## 0.3.1 - 2025-10-14

### What's Changed

* fix(#1): apply colormap to 2-bit images to prevent them from appearing too dark

**Full Changelog**: https://github.com/bnussbau/trmnl-pipeline-php/compare/0.3.0...0.3.1

## 0.3.0 - 2025-09-24

### What's Changed

* test: add EpaperPipeline::fake() for easier testing by @bnussbau in https://github.com/bnussbau/trmnl-pipeline-php/pull/3
  * https://github.com/bnussbau/trmnl-pipeline-php?tab=readme-ov-file#testing-with-fake-mode
  

**Full Changelog**: https://github.com/bnussbau/trmnl-pipeline-php/compare/0.2.0...0.3.0

## 0.2.0 - 2025-09-18

### What's Changed

* feat: enable FloydSteinberg dithering in quantize step

**Full Changelog**: https://github.com/bnussbau/trmnl-pipeline-php/compare/0.1.0...0.2.0

## 0.1.0 - 2025-09-17

Initial release.
