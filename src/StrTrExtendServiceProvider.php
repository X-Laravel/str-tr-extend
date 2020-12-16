<?php

namespace XLaravel;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

/**
 * Class StrTrExtendServiceProvider
 * @package XLaravel
 */
class StrTrExtendServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Str::macro('trUpper', function (string $value): string {
            return tr_strtoupper($value);
        });

        Str::macro('trLower', function (string $value): string {
            return tr_strtolower($value);
        });

        Str::macro('trUcFirst', function (string $value): string {
            return tr_ucfirst($value);
        });

        Str::macro('trLcFirst', function (string $value): string {
            return tr_lcfirst($value);
        });

        Str::macro('trUcWords', function (string $value): string {
            return tr_ucwords($value);
        });
    }
}
