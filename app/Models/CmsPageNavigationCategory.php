<?php

namespace App\Models;

use Filament\Models\Contracts\HasCurrentTenantLabel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SolutionForest\FilamentCms\Models\CmsPageNavigationCategory as BaseModel;
use Spatie\Translatable\HasTranslations;

class CmsPageNavigationCategory extends Model
{
    use HasFactory;

    // public const HOME_SLUG='intro';

    use HasTranslations;
 
    public $translatable = [
        'name',
        'title',
    ];
    protected $table = 'cms_page_navigation_categories';
}

 
// class CmsPage extends BaseModel
// {
//     use HasTranslations;
 
//     public $translatable = [
//         'title',
//         'data',
//     ];
// }