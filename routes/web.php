<?php

use App\Livewire\Form;

\Illuminate\Support\Facades\Route::get('form', Form::class);

Route::get('/{vue_capture?}', function() {
    return view('app');
})->where('vue_capture', '[\/\w\.-]*');