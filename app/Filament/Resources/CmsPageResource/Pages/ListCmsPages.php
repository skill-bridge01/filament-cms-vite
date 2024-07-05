<?php
namespace App\Filament\Resources\CmsPageResource\Pages;

use App\Filament\Resources\CmsPageResource;
use Filament\Resources\Pages\ListRecords;

class ListCmsPages extends ListRecords
{
    use \Filament\Resources\Pages\ListRecords\Concerns\Translatable;
    
    protected static string $resource = CmsPageResource::class;
    
    protected function getActions(): array
    {
        return [
            \Filament\Actions\LocaleSwitcher::make(),
            \Filament\Actions\CreateAction::make(),
        ];
    }
}