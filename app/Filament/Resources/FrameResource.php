<?php
namespace App\Filament\Resources;
use App\Filament\Resources\FrameResource\Pages;
use App\Filament\Resources\FrameResource\RelationManagers;
use App\Models\Frame;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Models\User;
class FrameResource extends Resource
{
    protected static ?string $model = Frame::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $modelLabel = 'Frame';
    protected static ?string $navigationLabel = 'Frames';
    protected static ?string $navigationGroup = 'Media';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Left Column
                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Select::make('user_id')
                            ->label('User')
                            ->options(User::all()->pluck('name', 'id'))
                            ->searchable()
                            ->required()
                            ->preload(),
                        Forms\Components\Toggle::make('status')
                            ->label('Active')
                            ->default(true)
                            ->required(),
                        Forms\Components\Toggle::make('is_premium')
                            ->label('Premium Frame')
                            ->required(),
                    ]),
                // Right Column
                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\FileUpload::make('image_path')
                            ->label('Frame Image')
                            ->image()
                            ->required()
                            ->directory('frames')
                            ->visibility('public')
                            ->helperText('Recommended size: 640 x 680px. Max file size: 2MB.'),
                    ]),
            ]);
    }
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image_path')
                    ->label('Image')
                    ->disk('public'),
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\IconColumn::make('status')
                    ->label('Active')
                    ->boolean(),
                Tables\Columns\IconColumn::make('is_premium')
                    ->label('Premium')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        true => 'Active',
                        false => 'Inactive',
                    ]),
                Tables\Filters\SelectFilter::make('is_premium')
                    ->options([
                        true => 'Premium',
                        false => 'Regular',
                    ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\RestoreAction::make(),
                Tables\Actions\ForceDeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
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
            'index' => Pages\ListFrames::route('/'),
            // 'create' => Pages\CreateFrame::route('/create'),
            // 'edit' => Pages\EditFrame::route('/{record}/edit'),
        ];
    }
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
