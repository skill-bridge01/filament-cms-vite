<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use SolutionForest\FilamentCms\Models\Library as BaseModel;

class Library extends Model
{
    use HasFactory;
    protected $table = 'libraries';
    use HasTranslations;
 
    // protected $fillable=[
    //     'title', 'data', 'slug', 'image'
    // ];
    public $translatable = [
        'title',
        'data',
    ];
}
