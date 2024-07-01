<?php
namespace App\Filament\Resources\CmsTagResource\Pages;

use App\Filament\Resources\CmsTagResource;

class ListCmsTags extends \SolutionForest\FilamentCms\Filament\Resources\CmsTagResource\Pages\ListCmsTags
{
    use \Filament\Resources\Pages\ListRecords\Concerns\Translatable;
    
    protected static string $resource = CmsTagResource::class;
    
    protected function getHeaderActions(): array
    {
        return [
            \Filament\Actions\LocaleSwitcher::make(),
            \Filament\Actions\CreateAction::make(),
        ];
    }
}