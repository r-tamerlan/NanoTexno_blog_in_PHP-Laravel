<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Posts;

class CategoriesController extends Controller
{
    public function index($slug_categoryName)
    {
        $category=Categories::where('category_slug',$slug_categoryName)->firstOrFail();
        $thisCategoryPosts=Posts::where('post_category_id',$category->id)->get();
        return view('categories',compact('thisCategoryPosts','category'));
    }
}
