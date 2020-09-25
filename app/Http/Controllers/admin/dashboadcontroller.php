<?php

namespace App\Http\Controllers\admin;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dashboadcontroller extends Controller
{
    public function registered(){

$users = User::all();

return view('admin.register')->with("users", $users);

    }

    public function Sproviders(){

        $servicep = User::all();
        
        return view('admin.serviceP')->with("servicep", $servicep);


}



public function registeredit(Request $request, $id)
{

    $users = User ::findOrFail( $id);
    return view('admin.register-edit')->with('users',$users);


}

public function registerupdate(Request $request, $id){
    $users= User::find($id);
$users->name=$request->input('name');

$users->usertype=$request->input('usertype');
$users->update();

return redirect('/role-register')->with('status','Your Data is updated');
}


public function registerdelete($id){
$users =User::findOrFail($id);
$users->delete();

return redirect('/role-register')->with('status','Your Data is Deleted');
}

public function profile(){

    $users = User::all();
    
    return view('search')->with("users", $users);
    
        }


        
public function MDprofile(){

    $users = User::all();
    
    return view('traveller.moreD')->with("users", $users);
    
        }

             
public function EXPprofile(){

    $users = User::all();
    
    return view('traveller.Experiences')->with("users", $users);
    
        }


        public function store(Request $request){

            $users= new users;
        
      
        $users->picture = $request->input('picture');

        $users->save();
        
        return redirect('/profile')->with('status','Data added');
        }
        



        public function registereditP(Request $request, $id)
        {
        
            $users = User ::findOrFail( $id);
            return view('traveller.profile-edit')->with('users',$users);
        
        
        }
        

        
public function registerupdateP(Request $request, $id){
    $users= User::find($id);
$users->name=$request->input('name');
$users->phone=$request->input('phone');
$users->email=$request->input('email');

$users->update();

return redirect('/profile')->with('status','Your Data is updated');
}



}