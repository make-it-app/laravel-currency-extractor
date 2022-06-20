# Laravel Currency Extractor

# Installation

```bash
composer require make-it-app/laravel-currency-extractor
php artisan vendor:publish --provider="MakeIT\LaravelCurrencyExtractor\CurrencyExtractorServiceProvider" --tag="config"
```
**Please observe the config-file first!**

If You plan to work with:<br>
- Observers `php artisan vendor:publish --provider="MakeIT\LaravelCurrencyExtractor\CurrencyExtractorServiceProvider" --tag="observers"`
- Policies `php artisan vendor:publish --provider="MakeIT\LaravelCurrencyExtractor\CurrencyExtractorServiceProvider" --tag="policies"`

# Usage

See [/src/CurrencyExtractorHelper.php] class.<br>
Or
```php
$extractor = CurrencyExtractor::make();
$extractor->fetchAndCache( $key );
return $extractor->getRates();
```
Or (recommended)
```bash
php artisan makeit:currency-extractor:pull
```
it will pull the exchange rates from external data provider, put it into Cache and create (or update, when exists) a Database records

# LICENSE MIT
