<?php

namespace App\Filament\Pages;


use Filament\Pages\Dashboard as BasePage;
use Filament\Widgets\StatsOverviewWidget\Card;

class Dashboard extends BasePage
{

    protected int | string | array $columnSpan = 'full';
    protected function getColumns(): int | array
    {
        return 1;
    }
}
