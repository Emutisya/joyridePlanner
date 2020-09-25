<?php

namespace App\Http\Controllers\admin;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\providers;

class providersController extends Controller
{
    public function index(){

        return view('admin.providers');
    }


    public function registeredit(Request $request, $id)
    {
    
        $providers = providers ::findOrFail( $id);
        return view('admin.providers-edit')->with("providers", $providers);
    
    
    }



    public function registerdelete($id){
        $providers =providers::findOrFail($id);
        $providers->delete();
        
        return redirect('/providers')->with('status','Your Data is Deleted');
        }


    
public function registerupdate(Request $request, $id){
    $providers= providers::find($id);
$providers->OwnerN=$request->input('OwnerN');
$providers->Phone=$request->input('Phone');
$providers->ServiceN=$request->input('ServiceN');
$providers->Description=$request->input('Description');

$providers->update();

return redirect('/providers')->with('status','Your Data is updated');
}


public function providers(){

    $providers = providers::all();

    
   return view('admin.providers')->with("providers", $providers);

}

public function store(Request $request){

    $providers= new providers;

$providers->OwnerN = $request->input('OwnerN');
$providers->Phone = $request->input('Phone');
$providers->ServiceN = $request->input('ServiceN');
$providers->Description = $request->input('Description');

$providers->save();

return redirect('/providers')->with('status','Data added for Service Providers');
}

}
