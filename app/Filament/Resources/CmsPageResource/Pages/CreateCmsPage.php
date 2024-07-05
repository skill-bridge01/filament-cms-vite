<?php
namespace App\Filament\Resources\CmsPageResource\Pages;

use App\Filament\Resources\CmsPageResource;
use Filament\Resources\Pages\CreateRecord;

class CreateCmsPage extends CreateRecord
{
    use \Filament\Resources\Pages\CreateRecord\Concerns\Translatable;

    protected static string $resource = CmsPageResource::class;

    protected function getActions(): array
    {
        return [
            \Filament\Actions\LocaleSwitcher::make(),
        ];
    }
}