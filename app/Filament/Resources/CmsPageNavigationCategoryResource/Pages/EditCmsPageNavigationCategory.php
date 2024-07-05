<?php

namespace App\Filament\Resources\CmsPageNavigationCategoryResource\Pages;

use App\Filament\Resources\CmsPageNavigationCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCmsPageNavigationCategory extends EditRecord
{
    use \Filament\Resources\Pages\EditRecord\Concerns\Translatable;

    protected static string $resource = CmsPageNavigationCategoryResource::class;

    // protected function getHeaderActions(): array
    // {
    //     return [
    //         Actions\DeleteAction::make(),
    //     ];
    // }

    protected function getHeaderActions(): array
    {
        return [
            \Filament\Actions\LocaleSwitcher::make(),
            ...parent::getActions(),
        ];
    }
}
