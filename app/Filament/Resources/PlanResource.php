<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PlanResource\Pages;
use App\Filament\Resources\PlanResource\RelationManagers;
use App\Models\Plan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\{TextInput, Textarea, Select};

class PlanResource extends Resource
{
    protected static ?string $model = Plan::class;


    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-check';
    protected static ?string $navigationGroup = 'Payments';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),

                TextInput::make('razorpay_plan_id')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->label('Razorpay Plan ID'),

                TextInput::make('price')
                    ->numeric()
                    ->required(),

                Select::make('interval')
                    ->options([
                        'monthly' => 'Monthly',
                        '3_months' => '3 Months',
                        '6_months' => '6 Months',
                        'yearly' => 'Yearly',
                    ])
                    ->required()
                    ->label('Billing Interval')
                    ->native(false),

                Textarea::make('description')
                    ->rows(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('name')->searchable()->sortable(),
            Tables\Columns\TextColumn::make('razorpay_plan_id')->label('Razorpay ID')->copyable(),
            Tables\Columns\TextColumn::make('price')->money('INR'),
            Tables\Columns\TextColumn::make('interval')->badge(),
            Tables\Columns\TextColumn::make('created_at')->dateTime()->sortable(),
        ])
            ->defaultSort('created_at', 'desc')->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPlans::route('/'),
            'create' => Pages\CreatePlan::route('/create'),
            'edit' => Pages\EditPlan::route('/{record}/edit'),
        ];
    }
}
