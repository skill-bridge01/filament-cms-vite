<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CmsPageResource\Pages;

class CmsPageResource extends \SolutionForest\FilamentCms\Filament\Resources\CmsPageResource
{
    use \Filament\Resources\Concerns\Translatable;

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCmsPages::route('/'),
            'create' => Pages\CreateCmsPage::route('/create'),
            'edit' => Pages\EditCmsPage::route('/{record}/edit'),
        ];
    }

    public static function getTranslatableLocales(): array
    {
        return ['en', 'ar'];
    }
}