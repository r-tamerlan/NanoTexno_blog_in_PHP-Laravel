<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class CategoriesController extends Controller
{
    public function index($slug_categoryName)
    {
        //$categories = Categories::all();
        return view('categories');
    }
}
