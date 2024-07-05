<?php

namespace App\Models;

use Filament\Models\Contracts\HasCurrentTenantLabel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SolutionForest\FilamentCms\Models\CmsPage as BaseModel;
use Spatie\Translatable\HasTranslations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Image\Enums\Fit;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class CmsPage extends BaseModel implements HasMedia
{
    use InteractsWithMedia;
    use HasFactory;

    // public const HOME_SLUG='intro';

    use HasTranslations;
 
    public $translatable = [
        'title',
        'data',
    ];
    // public function getRouteKeyName(): string
    // {
    //     return 'slug';
    // }
    // public function registerMediaConversions(?Media $media = null): void
    // {
    //     $this
    //         ->addMediaConversion('preview')
    //         ->fit(Fit::Contain, 300, 300)
    //         ->nonQueued();
    // }
    // protected $casts=[
    //     'certificate_image'=>'array',
    //     'original_filename'=>'array',
    // ];
    public function registerMediaConversions(Media $media = null): void
    {
        $this
            ->addMediaConversion('filament_preview')
            ->fit(Manipulations::FIT_CROP, 400, 250)
            ->sharpen(10)
            ->nonQueued();
        $this
            ->addMediaConversion('preview')
            ->width(700)
            ->height(700)
            ->sharpen(10)
            ->nonQueued();
        $this
            ->addMediaConversion('large')
            ->width(1500)
            ->height(1500)
            ->sharpen(10)
            ->nonQueued();
    }
    // protected $table = 'cms_pages';
}

 
// class CmsPage extends BaseModel
// {
//     use HasTranslations;
 
//     public $translatable = [
//         'title',
//         'data',
//     ];
// }