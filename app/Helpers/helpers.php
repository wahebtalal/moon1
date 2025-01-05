<?php

use FontLib\Font;

if (!function_exists('hexToRgba')) {
    function hexToRgba($hex, $alpha = 0.5) {
        $hex = str_replace('#', '', $hex);

        if (strlen($hex) === 3) {
            $r = hexdec(str_repeat(substr($hex, 0, 1), 2));
            $g = hexdec(str_repeat(substr($hex, 1, 1), 2));
            $b = hexdec(str_repeat(substr($hex, 2, 1), 2));
        } else {
            $r = hexdec(substr($hex, 0, 2));
            $g = hexdec(substr($hex, 2, 2));
            $b = hexdec(substr($hex, 4, 2));
        }

        return "rgba($r, $g, $b, $alpha)";
    }
}
if (!function_exists('generate_google_fonts_url_from_list')) {
    /**
     * Generate Google Fonts URL from the given font list.
     *
     * @param string $fontList The raw font list string.
     * @param string $display The display option (default: 'swap').
     * @return string The Google Fonts URL.
     */
    function generate_google_fonts_url_from_list(string $fontList, string $display = 'swap'): string
    {
        // Default weight for all fonts
        $defaultWeightRange = '100..1000'; // You can set this to any suitable weight range

        // Parse the font list into an array
        $fonts = [];
        $lines = explode(';', $fontList);

        foreach ($lines as $line) {
            $line = trim($line);
            if (!empty($line)) {
                $parts = explode('=', $line, 2);
                if (count($parts) > 1) {
                    $fontName = trim($parts[0]);

                    // Use the default weight range for all fonts
                    $fonts[] = urlencode("{$fontName}:wght@{$defaultWeightRange}");
                }
            }
        }

        // Join the fonts and create the URL
        $fontQuery = implode('&family=', $fonts);
        return "https://fonts.googleapis.com/css2?family={$fontQuery}&display={$display}";
    }
}
if (!function_exists('getFontNameFromFile')) {
    /**
     * Extract the font name from a font file.
     *
     * @param string $filePath Full path to the font file.
     * @return string|null The font name or null if not found.
     */
    function getFontNameFromFile(string $filePath): ?string
    {
        try {
            // Load the font file
            $font = Font::load($filePath);

            // Parse the font file
            $font->parse();

            // Get the font name
            return $font->getFontName();
        } catch (\Exception $e) {
            // Handle errors (e.g., invalid font file)
            return null;
        }
    }
}
