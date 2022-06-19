<?php
declare( strict_types = 1 );

namespace MakeIT\LaravelCurrencyExtractor\Provider;
interface ProviderInterface
{
    /**
     * @return string
     */
    public function fetch(): string;

    /**
     * @return string
     */
    public function getFromValute(): string;
}
