<?php

namespace App\EndPoints\Library;

// use App\Actions\Api;
use App\Models\CmsPage;
use Throwable;

use Illuminate\Support\Facades\Route;
use DB;
// use Lorisleiva\Actions\Concerns\AsAction;
// use Lorisleiva\Actions\Concerns\WithAttributes;
// use Lorisleiva\Actions\ActionRequest;

class GetLibraryAction 
{

    public function handle()
    {
        try {
            //code...
            // return User::all();
            // return Piece::all();
            dd('kkkkk');
            return CmsPage::with('services')->get();
            // return $piece;
          } catch (\Throwable $ex) {
            //throw $th;
            env("APP_DEBUG")?abort(500,$ex->getMessage()):abort(500,"something went wrong.");
          }

        
    }

 
    public function jsonResponse($service)
    {
        return $service;
    }
}
