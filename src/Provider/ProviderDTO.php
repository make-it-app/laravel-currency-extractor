<?php
declare( strict_types = 1 );

namespace MakeIT\LaravelCurrencyExtractor\Provider;

use Carbon\Carbon;

class ProviderDTO
{
    /**
     * @param array $array
     * @param ProviderInterface $provider
     */
    public function __construct( protected array $array, protected ProviderInterface $provider )
    {
    }

    /**
     * @return array
     */
    public function getRates(): array
    {
        if ( $this->provider instanceof CbrProvider )
        {
            return $this->getFromCbr();
        }
        return [];
    }

    /**
     * @return array
     */
    protected function getFromCbr(): array
    {
        $output = [];
        $dated  = Carbon::now();
        if ( !empty( $this->array[ 'Valute' ] ) )
        {
            foreach ( $this->array[ 'Valute' ] as $rate )
            {
                if ( in_array( $rate[ 'CharCode' ], config( 'currency-extractor.valutes' ) ) )
                {
                    $output[ $rate[ 'CharCode' ] ] = [
                        'Nominal' => $rate[ 'Nominal' ],
                        'Value'   => $rate[ 'Value' ],
                    ];
                }
            }
        }
        return [
            $dated,
            $output,
        ];
    }
}
