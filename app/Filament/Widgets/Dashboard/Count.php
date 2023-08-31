<?php

namespace App\Filament\Widgets\Dashboard;

use App\Models\Feedback;
use App\Models\Team;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class Count extends BaseWidget
{
    protected static ?string $pollingInterval = null;
    protected function getCards(): array
    {
        return [
            Card::make('User count', User::count())
                ->icon('heroicon-o-users')
                ->description('The total count of users in the system')
                ->descriptionIcon('heroicon-o-trending-up'),
            Card::make('Feedback count', Feedback::count())
                ->icon('heroicon-o-users')
                ->description('The total count of feedback in the system')
                ->descriptionIcon('heroicon-o-trending-up'),

        ];
    }
}
