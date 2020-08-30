<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Postinfo;
use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\Types\This;

class PostsController extends Controller
{
    public function index()
    {
        $postCategory = [];
        if (\request()->filled('search')) {
            \request()->flash();
            $search = \request('search');
            $postsList = Posts::where('post_title', 'like', "%$search%")
                ->orWhere('post_content', 'like', "%$search%")
                ->paginate(2)
                ->appends('search', $search);

        } else {

            $postsList = Posts::paginate(2);

        }

        return view('admin.posts.index', compact('postsList', 'postCategory'));
    }

    public function form($id = 0)
    {
        $thisPost = new Posts();
        $postinfo = new Postinfo();
        if ($id > 0) {
            $thisPost = Posts::find($id);
            $postinfo = Postinfo::find($thisPost->post_info_id);
        }
        $allCategories = Categories::all();


        return view('admin.posts.form', compact('thisPost', 'allCategories', 'postinfo'));


    }

    public function save($id = 0)
    {
        $this->validate(\request(), [
            'post_slug' => 'required',
            'post_title' => 'required',
            'post_content' => 'required',
            'post_category_id' => 'required'

        ]);
        $data = \request()->only('post_category_id', 'post_slug', 'post_title', 'post_content');

        if (\request()->hasFile('post_images')) {
            $this->validate(\request(), [
                'post_images' => 'image|mimes:jpg,png,jpeg|max:3072'
            ]);

            $postImg = \request()->file('post_images');
            //$postImg = \request()->post_images;

            $fileName = $postImg->hashName() . "_" . time() . "." . $postImg->extension();

            if ($postImg->isValid()) {
                //$postImg->move('upload/posts', $fileName);
//                Storage::put('posts', $postImg);
                $data['post_images'] = Storage::put('public/posts', $postImg);
            }

        }


         $dataInfo = \request()->only('view', 'like', 'comment');


        if ($id > 0) {
            $entry = Posts::where('id', $id)->firstOrFail();
            $entry->update($data);

            // $entryinfo=Postinfo::where('id',$entry->post_info_id);
            // $entryinfo->update($dataInfo);
        } else {

            $pf=Postinfo::create($dataInfo);
            $entry = Posts::create($data);
            $entry->post_info_id=$pf->id;
            $entry->save();

        }


        return redirect()
            ->route('admin.posts.index')
            ->with('message', ($id > 0 ? 'Post Update' : 'Post Added'))
            ->with('message_type', 'success');
    }

    public function delete($id)
    {
        Posts::destroy($id);

        return redirect()
            ->route('admin.posts.index')
            ->with('message', 'Post deleted')
            ->with('message_type', 'success');
    }

    // ----------- info --------------
    public function indexInfo()
    {

        $postsInfo = Postinfo::paginate(2);

        return view('admin.postinfo', compact('postsInfo'));
    }

    public function deleteInfo($id)
    {
        Postinfo::destroy($id);

        return redirect()
            ->route('admin.info.index')
            ->with('message', 'Info deleted')
            ->with('message_type', 'success');
    }
}
