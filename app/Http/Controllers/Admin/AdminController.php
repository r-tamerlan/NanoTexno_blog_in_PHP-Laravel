<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;



class AdminController extends Controller
{
//    public function __construct(){
//        $this->middleware('auth:admin');
//    }


    public function index()
    {
        return view('admin.dashboard');
    }

    public function login()
    {
        if (request()->isMethod('POST'))
        {
            $this->validate(request(),[
                'email' =>  'required|email',
                'password' => 'required'
            ]);
        }

        $values=[
            'email' => request()->get('email'),
            'password' => request()->get('password'),
        ];

        if (auth()->guard('admin')->attempt($values))
        {
            return  redirect()->route('admin.dashboard');
        }
        else {
            return  back()->withInput()->withErrors(['email'=>'Login error']);
        }


        return view('admin.login');
    }

    public function indexAdmins()
    {

        if (\request()->filled('search'))
        {
            \request()->flash();
            $search=\request('search');
            $adminsList=Admin::where('email','like',"%$search%")
                ->paginate(2)
                ->appends('search',$search);

        }
        else
        {

            $adminsList = Admin::paginate(2);
        }

        return view('admin.admins.index', compact('adminsList'));
    }

    public function delete($id)
    {
        Admin::destroy($id);

        return redirect()
            ->route('admin.admis.index')
            ->with('message','Admin deleted')
            ->with('message_type','success');
    }

    public function form($id = 0)
    {
        $thisAdmin = new Admin();
        if ($id > 0) {
            $thisAdmin = Admin::find($id);
        }
        return view('admin.admins.form', compact('thisAdmin'));


    }

    public function save($id = 0)
    {
        $this->validate(\request(), [
            'email' => 'required',
            'password' => 'required'
        ]);

        $data=\request()->only('email','password');



        if($id>0)
        {
            $entry=Admin::where('id',$id)->firstOrFail();
            $entry->update($data);
        }
        else
        {
            $entry=Admin::create($data);
        }

        return redirect()
            ->route('admin.admins.index')
            ->with('message',($id>0 ? 'Admin Update' : 'Admin Added'))
            ->with('message_type','success');
    }
}
