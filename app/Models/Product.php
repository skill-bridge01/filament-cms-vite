<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use SolutionForest\FilamentCms\Models\Product as BaseModel;

class Product extends Model
{
    use HasFactory;
    use HasTranslations;

    // protected $fillable=[
    //     'title', 'data', 'slug', 'image'
    // ];

    public $translatable = [
        'title',
        'data',
    ];

    protected $table = 'products';
}
