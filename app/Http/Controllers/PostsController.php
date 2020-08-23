<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\Categories;
use App\Models\Postinfo;


class PostsController extends Controller
{
    public function index($slug_post)
    {
        $thisPost=Posts::where('post_slug',$slug_post)->firstOrFail();
        $categoryID=$thisPost->post_category_id;
        $infoID=$thisPost->post_info_id;
        $thisCategory=Categories::where('id',$categoryID)->firstOrFail();
        $thisInfo=Postinfo::where('id',$infoID)->firstOrFail();

        return view('post',compact('thisPost','thisCategory','thisInfo'));
    }
}
