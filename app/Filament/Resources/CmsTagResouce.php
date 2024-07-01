<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CmsTagResouce\Pages;

class CmsTagResouce extends \SolutionForest\FilamentCms\Filament\Resources\CmsTagResource
{
    use \Filament\Resources\Concerns\Translatable;

    public static function getTags(): array
    {
        return [
            'index' => Pages\ListCmsTags::route('/'),
            'create' => Pages\CreateCmsTag::route('/create'),
            'edit' => Pages\EditCmsTag::route('/{record}/edit'),
        ];
    }

    public static function getTranslatableLocales(): array
    {
        return ['en', 'ar'];
    }
}