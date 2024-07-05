<?php

namespace App\Filament\Resources\ContentType\LibraryResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use SolutionForest\FilamentCms\Concern;
use App\Filament\Resources\ContentType\LibraryResource;
// use Filament\Actions\LocaleSwitcher;

class CreateLibrary extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;
    use Concern\CanPublishPage;

    protected static string $resource = LibraryResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        return static::getResource()::mutateFormDataBeforeCreate($data);
    }

    // public function getActions(): array
    // {
    //     return array_merge(
    //         // [LocaleSwitcher::make()],
    //         parent::getActions() ?? [],
    //     );
    // }

    protected static function canUnpublishPage(): bool
    {
        return false;
    }
    protected function getHeaderActions(): array
    {
        return [
            // Actions\LocaleSwitcher::make(),
            \Filament\Actions\LocaleSwitcher::make(),
            // ...
        ];
    }
}
