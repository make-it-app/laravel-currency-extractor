<?php
declare( strict_types = 1 );

namespace MakeIT\LaravelCurrencyExtractor\Currency;
class Currency implements CurrencyInterface
{
    private string $content;

    /**
     * @param $content
     */
    public function __construct( $content )
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }
}
