<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {

        if (\request()->filled('search'))
        {
            \request()->flash();
            $search=\request('search');
            $usersList=User::where('name','like',"%$search%")
                ->orWhere('e-mail','like',"%$search%")
                ->paginate(2)
                ->appends('search',$search);

        }
        else
        {

            $usersList = User::paginate(2);
        }

        return view('admin.users.index', compact('usersList'));
    }

    public function delete($id)
    {
        User::destroy($id);

        return redirect()
            ->route('admin.users.index')
            ->with('message','User deleted')
            ->with('message_type','success');
    }
}
