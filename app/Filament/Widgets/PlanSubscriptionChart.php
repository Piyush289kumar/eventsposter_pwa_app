<?php
// app/Filament/Widgets/PlanSubscriptionChart.php

namespace App\Filament\Widgets;

use App\Models\Subscription;
use Filament\Widgets\ChartWidget;

class PlanSubscriptionChart extends ChartWidget
{
    protected static ?string $heading = 'Subscriptions Per Plan';

    protected static ?int $sort = 2;
    protected static ?string $maxHeight = '300px';

    protected function getData(): array
    {
        $subscriptions = Subscription::with('plan')
            ->selectRaw('plan_id, COUNT(*) as count')
            ->groupBy('plan_id')
            ->get();

        $labels = [];
        $data = [];

        foreach ($subscriptions as $sub) {
            $labels[] = optional($sub->plan)->name ?? 'Unknown';
            $data[] = $sub->count;
        }

        return [
            'datasets' => [
                [
                    'label' => 'Subscriptions',
                    'data' => $data,
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'bar'; // or 'pie', 'doughnut'
    }
}
