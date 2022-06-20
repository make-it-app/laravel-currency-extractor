<?php
declare( strict_types = 1 );

namespace MakeIT\LaravelCurrencyExtractor\Provider;

use GrahamCampbell\GuzzleFactory\GuzzleFactory;

class CbrProvider implements ProviderInterface
{
    /**
     * @return string
     */
    public function fetch(): string
    {
        $client   = GuzzleFactory::make();
        $response = $client->get( $this->getUrl() );
        return $response->getBody()->getContents();
    }

    /**
     * Money.Js format
     * @return string
     */
    private function getUrl(): string
    {
        return 'https://www.cbr-xml-daily.ru/latest.js';
    }

    /**
     * @return string
     */
    public function getFromValute(): string
    {
        return 'RUB';
    }

}
