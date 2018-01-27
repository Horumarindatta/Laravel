<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


use App\Admin;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin =new Admin();


        $data['admin']= $admin::where('id', '1')
            ->where('name', 'admin')    
            ->first();

// echo json_encode($data);
// exit();

        return view('admin/admin')->with($data); 

    }

    public  function ShowTable(){

        $admin = new Admin(); 

        $admins = $admin::all();
        $admin = $admin::where('id','1')
            ->first();
//  echo json_encode($data);
// exit();

        return  View::make('admin/admin')->with(compact('admin', 'admins'));

    }

    public function FormInsert(){
        return view('admin/insert'); 
    }

    public function Insert(Request $request){

        // $admin = new Admin(); 

        // $admin->name = Input::get('name');
        // $admin->email = Input::get('email');
        // $admin->password = Hash::make(Input::get('password'));
        // $admin->save();
        // $request['name'] = $request->name;
        // $request['email'] = $request->email;
        $request['password'] = bcrypt($request->password);

        //$admin = Admin::create($request->all());
        $admin = Admin::create($request->all());
    
        return redirect('/admin/show');
    }


}
