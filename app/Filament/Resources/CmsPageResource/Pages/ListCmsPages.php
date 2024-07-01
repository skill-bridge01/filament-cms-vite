<?php
namespace App\Filament\Resources\CmsPageResource\Pages;

use App\Filament\Resources\CmsPageResource;

class ListCmsPages extends \SolutionForest\FilamentCms\Filament\Resources\CmsPageResource\Pages\ListCmsPages
{
    use \Filament\Resources\Pages\ListRecords\Concerns\Translatable;
    
    protected static string $resource = CmsPageResource::class;
    
    protected function getHeaderActions(): array
    {
        return [
            \Filament\Actions\LocaleSwitcher::make(),
            \Filament\Actions\CreateAction::make(),
        ];
    }
}