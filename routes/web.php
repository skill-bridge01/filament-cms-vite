<?php

use App\Livewire\Form;

\Illuminate\Support\Facades\Route::get('form', Form::class);

Route::middleware([
    'web',
])->group(function () { 
    Route::get('/{vue_capture?}', function() {
        return view('app');
    })->where('vue_capture', '[\/\w\.-]*');
});

Route::get('/{vue_capture?}', function() {
    return view('app');
})->where('vue_capture', '[\/\w\.-]*');


