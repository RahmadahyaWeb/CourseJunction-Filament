<?php

namespace App\Filament\Widgets;

use App\Models\Course;
use App\Models\Material;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverviewDashboard extends BaseWidget
{
    
    protected function getCards(): array
    {
        return [
            Card::make('Course Count', Course::count()),
            Card::make('Course Material Count', Material::count())
        ];
    }
}
