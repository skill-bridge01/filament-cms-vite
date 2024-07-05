<?php

namespace App\Filament\Resources\CmsTagResource\Pages;

use App\Filament\Resources\CmsTagResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCmsTags extends ListRecords
{
    use \Filament\Resources\Pages\ListRecords\Concerns\Translatable;

    protected static string $resource = CmsTagResource::class;

    // protected function getHeaderActions(): array
    // {
    //     return [
    //         Actions\CreateAction::make(),
    //     ];
    // }
    protected function getHeaderActions(): array
    {
        return [
            \Filament\Actions\LocaleSwitcher::make(),
            \Filament\Actions\CreateAction::make(),
        ];
    }
}
