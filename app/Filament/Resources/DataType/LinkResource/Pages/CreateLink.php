<?php

namespace App\Filament\Resources\DataType\LinkResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use SolutionForest\FilamentCms\Concern;
use App\Filament\Resources\DataType\LinkResource;
// use Filament\Actions\LocaleSwitcher;

class CreateLink extends CreateRecord
{
    // use CreateRecord\Concerns\Translatable;
    use Concern\CanPublishPage;

    protected static string $resource = LinkResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        return static::getResource()::mutateFormDataBeforeCreate($data);
    }

    public function getActions(): array
    {
        return array_merge(
            // [LocaleSwitcher::make()],
            parent::getActions() ?? [],
        );
    }

    protected static function canUnpublishPage(): bool
    {
        return false;
    }
}
