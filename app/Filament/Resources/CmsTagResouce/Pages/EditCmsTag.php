<?php
namespace App\Filament\Resources\CmsTagResource\Pages;

use App\Filament\Resources\CmsTagResource;

class EditCmsTag extends \SolutionForest\FilamentCms\Filament\Resources\CmsTagResource\Pages\EditCmsTag
{
    use \Filament\Resources\Pages\EditRecord\Concerns\Translatable;
    
    protected static string $resource = CmsTagResource::class;
    
    protected function getHeaderActions(): array
    {
        return [
            \Filament\Actions\LocaleSwitcher::make(),
            ...parent::getActions(),
        ];
    }
}