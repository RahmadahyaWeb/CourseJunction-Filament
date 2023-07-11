<?php

namespace App\Filament\Resources\MaterialResource\Widgets;

use App\Models\Material;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverviewMaterial extends BaseWidget
{

    protected function getCards(): array
    {
        return [
            Card::make('Course Material Count', Material::count())
        ];
    }
}
