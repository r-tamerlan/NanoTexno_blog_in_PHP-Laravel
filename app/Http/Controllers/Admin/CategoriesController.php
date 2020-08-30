<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CategoriesController extends Controller
{
    public function index()
    {

        if (\request()->filled('search'))
        {
            \request()->flash();
            $search=\request('search');
            $categoriesList=Categories::where('category_name','like',"%$search%")
                ->orWhere('category_slug','like',"%$search%")
                ->paginate(2)
                ->appends('search',$search);

        }
        else
        {

            $categoriesList = Categories::paginate(2);
        }

        return view('admin.categories.index', compact('categoriesList'));
    }

    public function form($id = 0)
    {
        $thisCategory = new Categories;
        if ($id > 0) {
            $thisCategory = Categories::find($id);
        }
        return view('admin.categories.form', compact('thisCategory'));


    }

    public function save($id = 0)
    {
        $this->validate(\request(), [
            'category_name' => 'required',
            'category_slug' => 'required'
        ]);

        $data=\request()->only('category_name','category_slug');



        if($id>0)
        {
            $entry=Categories::where('id',$id)->firstOrFail();
            $entry->update($data);
        }
        else
        {
            $entry=Categories::create($data);
        }

        return redirect()
            ->route('admin.categories.index')
            ->with('message',($id>0 ? 'Cetegory Update' : 'Cetegory Added'))
            ->with('message_type','success');
    }

    public function delete($id)
    {
        Categories::destroy($id);

        return redirect()
            ->route('admin.categories.index')
            ->with('message','Category deleted')
            ->with('message_type','success');
    }
}
