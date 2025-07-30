<?php

namespace App\Filament\Widgets;

use App\Models\Background;
use Filament\Widgets\ChartWidget;

class DashboardStats extends ChartWidget
{
    protected static ?string $heading = 'Background Uploads Per Day';
    protected static ?int $sort = 4;
    protected static ?string $maxHeight = '300px';
    protected static ?string $minHeight = '300px';

    protected function getData(): array
    {
        $data = Background::selectRaw('DATE(created_at) as date, COUNT(*) as count')
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        return [
            'datasets' => [
                [
                    'label' => 'Uploads',
                    'data' => $data->pluck('count'),
                ],
            ],
            'labels' => $data->pluck('date'),
        ];
    }
    protected function getType(): string
    {
        return 'line';
    }
}
