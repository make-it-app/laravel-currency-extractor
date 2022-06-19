<?php
declare( strict_types = 1 );

namespace MakeIT\LaravelCurrencyExtractor\Currency;
class CurrencyFactory implements CurrencyFactoryInterface
{
    /**
     * @param string $content
     * @return Currency
     */
    public function create( string $content ): Currency
    {
        return new Currency( $content );
    }
}
