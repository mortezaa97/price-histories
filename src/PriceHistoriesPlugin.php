<?php

declare(strict_types=1);

namespace Mortezaa97\PriceHistories;

use Filament\Contracts\Plugin;
use Filament\Panel;

class PriceHistoriesPlugin implements Plugin
{
    public static function make(): static
    {
        return app(static::class);
    }

    public function getId(): string
    {
        return 'price-histories';
    }

    public function register(Panel $panel): void
    {
        $panel
            ->resources([
                // 'BrandResource' => BrandResource::class,
            ]);
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
