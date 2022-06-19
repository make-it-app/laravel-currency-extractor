<?php
declare( strict_types = 1 );

namespace MakeIT\LaravelCurrencyExtractor;

use Illuminate\Support\ServiceProvider;
use MakeIT\LaravelCurrencyExtractor\Currency\CurrencyFactory;
use MakeIT\LaravelCurrencyExtractor\Currency\CurrencyFactoryInterface;
use MakeIT\LaravelCurrencyExtractor\Provider\ProviderInterface;

class CurrencyExtractorServiceProvider extends ServiceProvider
{

    /**
     * All of the container bindings that should be registered.
     * @var array
     */
    public array $bindings = [
        CurrencyFactoryInterface::class   => CurrencyFactory::class,
        CurrencyExtractorInterface::class => CurrencyExtractor::class,
    ];

    /**
     * @return void
     */
    public function boot(): void
    {
        if ( $this->app->runningInConsole() )
        {
            $this->commands([
                CurrencyExtractorCommand::class
            ]);
            $this->publishes( [ __DIR__ . '/../config/currency-extractor.php' => config_path( 'currency-extractor.php' ) ], 'config' );
        }
        $this->app->bind( ProviderInterface::class, config( 'currency-extractor.provider_class' ) );
        $this->app->alias( CurrencyExtractorInterface::class, 'currency.extractor' );
    }

    /**
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom( __DIR__ . '/../config/currency-extractor.php', 'currency-extractor' );
    }
}
