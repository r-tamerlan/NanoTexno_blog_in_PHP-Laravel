<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Posts;
use Illuminate\Http\Request;


class HomepageController extends Controller
{
    public function index()
    {
        $allPosts=Posts::all();

        return view( 'homepage',compact('allPosts'));

    }


}
