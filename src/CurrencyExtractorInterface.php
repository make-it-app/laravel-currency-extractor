<?php
declare( strict_types = 1 );

namespace MakeIT\LaravelCurrencyExtractor;
interface CurrencyExtractorInterface
{
    /**
     * @return $this
     */
    public function make(): self;

    /**
     * @return array
     */
    public function fetchAndCache(): array;
}
