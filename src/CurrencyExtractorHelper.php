<?php

namespace MakeIT\LaravelCurrencyExtractor;

use CurrencyExtractor;
use \Cache;

class CurrencyExtractorHelper
{
    /**
     * @param string $key
     * @return array
     */
    public static function fetch_currency( string $key = 'currencies' ): array
    {
        $extractor = CurrencyExtractor::make();
        $extractor->fetchAndCache( $key );
        return $extractor->getRates();
    }

    /**
     * @param string $key
     * @return bool
     */
    public static function destroy_currencies( string $key = 'currencies' ): bool
    {
        return Cache::forget( $key );
    }

}

/*
 * USAGE:
 * \MakeIT\LaravelCurrencyExtractor\CurrencyExtractorHelper::fetch_currency( 'cbr_currencies' );
 * \MakeIT\LaravelCurrencyExtractor\CurrencyExtractorHelper::destroy_currencies( 'cbr_currencies' );
 * \Cache::get( 'cbr_currencies );
 *
 * Try it in the Tinker !
 */
