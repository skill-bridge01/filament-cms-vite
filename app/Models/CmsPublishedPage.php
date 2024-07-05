<?php

namespace App\Models;

use Filament\Models\Contracts\HasCurrentTenantLabel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SolutionForest\FilamentCms\Models\CmsPublishedPage as BaseModel;
use Spatie\Translatable\HasTranslations;

class CmsPublishedPage extends Model
{
    use HasFactory;

    public const HOME_SLUG='intro';

    use HasTranslations;
 
    public $translatable = [
        'title',
        'data',
    ];
    protected $table = 'cms_published_pages';
}

 
// class CmsPage extends BaseModel
// {
//     use HasTranslations;
 
//     public $translatable = [
//         'title',
//         'data',
//     ];
// }