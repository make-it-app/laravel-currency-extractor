<?php
declare( strict_types = 1 );

namespace MakeIT\LaravelCurrencyExtractor\Currency;

interface CurrencyFactoryInterface
{
    /**
     * @param string $content
     * @return Currency
     */
    public function create( string $content ): Currency;
}
