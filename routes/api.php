<?php
use App\EndPoints\Library\GetLibraryAction;
use App\Http\Controllers\LibraryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/library', [LibraryController::class, 'index']);
// Route::get('/library', GetLibraryAction::class);
Route::get('/library/{page}', [LibraryController::class, 'show']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
