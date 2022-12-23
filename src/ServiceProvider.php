<?php

declare(strict_types=1);

namespace Vietstars\CodeStyle;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/.php-cs-fixer.php' => base_path('.php-cs-fixer.php'),
        ], 'config');
    }
}