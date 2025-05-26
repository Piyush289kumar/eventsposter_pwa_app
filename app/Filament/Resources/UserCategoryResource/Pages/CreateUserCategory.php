<?php

namespace App\Filament\Resources\UserCategoryResource\Pages;

use App\Filament\Resources\UserCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUserCategory extends CreateRecord
{
    protected static string $resource = UserCategoryResource::class;
}
