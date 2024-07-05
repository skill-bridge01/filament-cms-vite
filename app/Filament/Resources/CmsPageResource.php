<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CmsPageResource\Pages;
use Filament\Resources\Resource;
// use SolutionForest\FilamentCms\Filament\Resources\ContentTypePageBaseResource as BaseResource;
use SolutionForest\FilamentCms\Filament\Resources\CmsPageResource as BaseResource;

// class CmsPageResource extends \SolutionForest\FilamentCms\Filament\Resources\CmsPageResource
class CmsPageResource extends BaseResource
{
    use \Filament\Resources\Concerns\Translatable;

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCmsPages::route('/'),
            'create' => Pages\CreateCmsPage::route('/create'),
            'edit' => Pages\EditCmsPage::route('/{record:id}/edit'),
        ];
    }

    // public static function getTranslatableLocales(): array
    // {
    //     return ['en', 'ar'];
    // }
}