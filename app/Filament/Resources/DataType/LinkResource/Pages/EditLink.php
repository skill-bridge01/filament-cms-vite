<?php

namespace App\Filament\Resources\DataType\LinkResource\Pages;

use Filament\Resources\Pages\EditRecord;
use SolutionForest\FilamentCms\Concern;
use App\Filament\Resources\DataType\LinkResource;
// use Filament\Actions\LocaleSwitcher;

class EditLink extends EditRecord
{
    // use EditRecord\Concerns\Translatable {
    //     EditRecord\Concerns\Translatable::getActions as protected translatableActions;
    // }
    use Concern\CanPublishPage;

    protected static string $resource = LinkResource::class;

    protected function mutateFormDataBeforeFill(array $data): array
    {
        return static::getResource()::mutateFormDataBeforeFill($data);
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        return static::getResource()::mutateFormDataBeforeSave($data);
    }

    protected function afterCreate()
    {
        $this->dispatch('updateAudits');
    }

    protected function afterSave()
    {
        $this->dispatch('updateAudits');
    }

    public function getActions(): array
    {
        return array_merge(
            // [LocaleSwitcher::make()],
        );
    }
}
