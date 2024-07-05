<?php

namespace App\Filament\Resources\CmsTagResource\Pages;

use App\Filament\Resources\CmsTagResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCmsTag extends CreateRecord
{
    use \Filament\Resources\Pages\CreateRecord\Concerns\Translatable;

    protected static string $resource = CmsTagResource::class;

    protected function getHeaderActions(): array
    {
        return [
            \Filament\Actions\LocaleSwitcher::make(),
        ];
    }
}
