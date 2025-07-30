<?php

namespace App\Filament\Widgets;

use App\Models\User;
use App\Models\UserCategory;
use Filament\Widgets\ChartWidget;

class UserCategoryStats extends ChartWidget
{
    protected static ?string $heading = 'User Distribution by Groups';
    protected static ?int $sort = 1;

    protected function getData(): array
    {
        $categories = UserCategory::withCount('users')
            ->orderBy('users_count', 'desc')
            ->get();

        // Generate distinct colors for each category
        $colors = [];
        $baseColors = ['#3b82f6', '#ef4444', '#10b981', '#f59e0b', '#6366f1'];

        foreach ($categories as $index => $category) {
            $colors[] = $baseColors[$index % count($baseColors)] ?? '#' . dechex(rand(0x000000, 0xFFFFFF));
        }

        return [
            'datasets' => [
                [
                    'label' => 'Users by Category',
                    'data' => $categories->pluck('users_count'),
                    'backgroundColor' => $colors,
                    'borderColor' => '#ffffff',
                    'borderWidth' => 1,
                    'hoverOffset' => 10, // Adds slight hover effect
                ],
            ],
            'labels' => $categories->pluck('name'),
        ];
    }

    protected function getType(): string
    {
        return 'polarArea'; // or 'doughnut' or 'bar'
    }

    protected function getOptions(): array
    {
        return [
            'plugins' => [
                'legend' => [
                    'position' => 'right',
                    'labels' => [
                        'usePointStyle' => true,
                        'pointStyle' => 'circle',
                        'padding' => 20,
                        'font' => [
                            'size' => 12,
                        ]
                    ]
                ],
                'tooltip' => [
                    'enabled' => true,
                    'callbacks' => [
                        'label' => 'function(context) {
                            const label = context.label || "";
                            const value = context.raw || 0;
                            const total = context.dataset.data.reduce((a, b) => a + b, 0);
                            const percentage = Math.round((value / total) * 100);
                            
                            return `${label}: ${value} users (${percentage}%)`;
                        }',
                        'afterLabel' => 'function(context) {
                            const categoryId = context.dataIndex + 1; // Assuming IDs start from 1
                            return "Category ID: " + categoryId;
                        }'
                    ],
                    'displayColors' => true,
                    'usePointStyle' => true,
                    'bodyFont' => [
                        'size' => 14,
                    ],
                    'titleFont' => [
                        'size' => 16,
                        'weight' => "bold",
                    ],
                    'footerFont' => [
                        'size' => 12,
                    ],
                ]
            ],
            'maintainAspectRatio' => false,
            'responsive' => true,
            'cutout' => $this->getType() === 'doughnut' ? '60%' : '0%',
            'animation' => [
                'animateScale' => true,
                'animateRotate' => true,
            ],
        ];
    }
}
