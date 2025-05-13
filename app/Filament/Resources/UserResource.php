<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Hash;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    protected static ?string $navigationLabel = 'Users';

    protected static ?string $modelLabel = 'User';

    protected static ?string $navigationGroup = 'User Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('User Information')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('email')
                            ->email()
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true),

                        Forms\Components\Select::make('role')
                            ->options([
                                'admin' => 'Administrator',
                                'customer' => 'Customer',
                                'manager' => 'Manager',
                                'marketing' => 'Marketing',
                            ])
                            ->required(),

                        // Forms\Components\FileUpload::make('profile_photo_path')
                        //     ->label('Profile Photo')
                        //     ->image()
                        //     ->directory('profile-photos')
                        //     ->visibility('public')
                        //     ->imageEditor(),

                        Forms\Components\FileUpload::make('profile_photo_path')
                            ->label('Profile Photo')
                            ->image()
                            ->directory('profile-photos')
                            ->visibility('public')
                            ->imageEditor(),



                    ])->columns(2),

                Forms\Components\Section::make('Authentication')
                    ->schema([
                        // Password field for CREATE
                        Forms\Components\TextInput::make('password')
                            ->password()
                            ->required()
                            ->maxLength(255)
                            ->dehydrateStateUsing(fn($state) => Hash::make($state))
                            ->dehydrated(fn($state) => filled($state))
                            ->visibleOn('create')
                            ->autocomplete('new-password'),

                        // Password field for EDIT
                        Forms\Components\TextInput::make('password')
                            ->password()
                            ->maxLength(255)
                            ->dehydrateStateUsing(fn($state) => !empty($state) ? Hash::make($state) : null)
                            ->dehydrated(fn($state) => filled($state))
                            ->visibleOn('edit')
                            ->helperText('Leave empty to keep current password')
                            ->autocomplete('new-password'),

                        Forms\Components\DateTimePicker::make('email_verified_at'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('profile_photo_path')
                    ->label('Photo')
                    ->disk('public')
                    ->circular(),

                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('email')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('role')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'admin' => 'danger',
                        'manager' => 'warning',
                        'marketing' => 'success',
                        default => 'info',
                    })
                    ->formatStateUsing(fn(string $state): string => ucfirst($state))
                    ->sortable(),

                Tables\Columns\IconColumn::make('email_verified_at')
                    ->label('Verified')
                    ->boolean()
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('role')
                    ->options([
                        'admin' => 'Administrator',
                        'customer' => 'Customer',
                        'manager' => 'Manager',
                        'marketing' => 'Marketing',
                    ]),

                Tables\Filters\Filter::make('verified')
                    ->query(fn($query) => $query->whereNotNull('email_verified_at'))
                    ->label('Verified Users'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
