<?php

namespace App\Http\Controllers;

use App\Http\Resources\LibraryResource;
use App\Models\CmsPage;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class LibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index1(): AnonymousResourceCollection
    {
        // dd('library');
        return LibraryResource::collection(CmsPage::all());
    }

    public function index():array
    {
        // $presentation = $page
        //     // ->presentations()
        //     ->where('slug', $slug)
        //     ->firstOrFail();
        $slug='library';
        $libraryID = CmsPage::where('slug', $slug)->first();
        // dd($libraryID->id);
        if($libraryID){
            $librarys=CmsPage::where('parent_id', $libraryID->id)->get();
            // dd($librarys);
            return ['librarys' => $librarys,'success' => 1, 'message' => 'User updated successfully.'];
            // return $librarys;
            
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(CmsPage $page): LibraryResource
    {
        return new LibraryResource($page);
    }
}
