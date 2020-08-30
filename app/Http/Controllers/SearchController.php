<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class SearchController extends Controller
{
    public function index()
    {

            \request()->flash();
            $search = \request('search');

            $searchList = Posts::where('post_title', 'like', "%$search%")
                ->orWhere('post_content', 'like', "%$search%")
                ->paginate(6)
                ->appends('search', $search);

            return view('search', compact('searchList'));

    }















}
