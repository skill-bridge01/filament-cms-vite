<?php
namespace App\Filament\Resources\CmsPageResource\Pages;

use App\Filament\Resources\CmsPageResource;
use Filament\Resources\Pages\EditRecord;
use Filament\Actions\LocaleSwitcher;

class EditCmsPage extends EditRecord
{
    // use \Filament\Resources\Pages\EditRecord\Concerns\Translatable;
    use EditRecord\Concerns\Translatable;
    
    protected static string $resource = CmsPageResource::class;
    
    protected function getActions(): array
    {
        return [
            \Filament\Actions\LocaleSwitcher::make(),
            ...parent::getActions(),
        ];
    }
    // public function getActions(): array
    // {
    //     return array_merge(
    //         [LocaleSwitcher::make()],
    //         parent::getActions(),
    //     );
    // }
}