<?php

namespace App\Filament\Resources\ContentType;

use App\Filament\Resources\ContentType\ProductResource\Pages;
use App\CmsPages\Templates\ContentType\Product as Template;
use Filament\Forms;
use Illuminate\Database\Eloquent\Builder;
use SolutionForest\FilamentCms\Enums\PageType;
use SolutionForest\FilamentCms\Filament\Resources\ContentTypePageBaseResource as BaseResource;

class ProductResource extends BaseResource
{
    // use \Filament\Resources\Concerns\Translatable;

    protected static ?int $navigationSort = null;

    protected static $parentPageKey = '2';

    protected static string $subSlug = 'products';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getModelLabel(): string
    {
        return 'Product';
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'edit' => Pages\EditProduct::route('/{record:id}/edit'),
            'create' => Pages\CreateProduct::route('/create'),
        ];
    }

    public static function getTemplate(): string
    {
        return Template::class;
    }
}
