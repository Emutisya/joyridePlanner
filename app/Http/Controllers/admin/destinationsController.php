<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\destinations;

class destinationsController extends Controller
{
    
        public function index(){



    
            return view('admin.destinations');
        }



        public function destinations(){

            $destinations = destinations::all();
        
            
           return view('admin.destinations')->with("destinations", $destinations);
        
        }


        public function store(Request $request){

            $destinations= new destinations;
        
        $destinations->continent = $request->input('continent');
        $destinations->country = $request->input('country');
        $destinations->city = $request->input('city');
        $destinations->currency = $request->input('currency');
        $destinations->picture = $request->input('picture');

        $destinations->save();
        
        return redirect('/destinations')->with('status','Data added for travel destinations');
        }
        


        
    public function registeredit(Request $request, $id)
    {
    
        $destinations = destinations ::findOrFail( $id);
        return view('admin.destinations-edit')->with("destinations", $destinations);
    
    
    }


    
    public function registerdelete($id){
        $destinations=destinations::findOrFail($id);
        $destinations->delete();
        
        return redirect('/destinations')->with('status','Your Data is Deleted');
        }



    
    
public function registerupdate(Request $request, $id){
    $destinations= destinations::find($id);
$destinations->continent=$request->input('continent');
$destinations->country=$request->input('country');
$destinations->city=$request->input('city');
$destinations->currency=$request->input('currency');
$destinations->picture=$request->input('picture');
$destinations->update();

return redirect('/destinations')->with('status','Your Data is updated');
}




}
