<?php

namespace App\Models;

use Filament\Models\Contracts\HasCurrentTenantLabel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SolutionForest\FilamentCms\Models\CmsTag as BaseModel;
use Spatie\Translatable\HasTranslations;

class CmsTag extends Model
{
    use HasFactory;

    // public const HOME_SLUG='intro';

    use HasTranslations;
 
    public $translatable = [
        'title',
        'data',
        'template',
    ];
    protected $table = 'cms_tags';
}

 
// class CmsPage extends BaseModel
// {
//     use HasTranslations;
 
//     public $translatable = [
//         'title',
//         'data',
//     ];
// }