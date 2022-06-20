<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function store($id)
    {
        \Auth::user()->favorite_post($id);
        
        return back();
    }
    
    public function destroy($id)
    {
        \Auth::user()->unfavorite_post($id);
        
        return back();
    }
}
