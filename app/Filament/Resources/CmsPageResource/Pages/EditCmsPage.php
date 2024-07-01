<?php
namespace App\Filament\Resources\CmsPageResource\Pages;

use App\Filament\Resources\CmsPageResource;

class EditCmsPage extends \SolutionForest\FilamentCms\Filament\Resources\CmsPageResource\Pages\EditCmsPage
{
    use \Filament\Resources\Pages\EditRecord\Concerns\Translatable;
    
    protected static string $resource = CmsPageResource::class;
    
    protected function getHeaderActions(): array
    {
        return [
            \Filament\Actions\LocaleSwitcher::make(),
            ...parent::getActions(),
        ];
    }
}