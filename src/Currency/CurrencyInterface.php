<?php
declare( strict_types = 1 );

namespace MakeIT\LaravelCurrencyExtractor\Currency;

interface CurrencyInterface
{
    /**
     * @return string
     */
    public function getContent(): string;
}
