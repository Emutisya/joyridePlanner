<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\places;

class placesController extends Controller
{
    
        public function index(){
    
            return view('admin.places');
        }



        public function places(){

            $places= places::all();
        
            
           return view('admin.places')->with("places", $places);
        
        }


        public function store(Request $request){

            $places= new places;
        
        $places->continent = $request->input('continent');
        $places->country = $request->input('country');
        $places->city = $request->input('city');
        $places->currency = $request->input('currency');
        

        $places->save();
        
        return redirect('/places')->with('status','Data added for travel locations');
        }
        


        
    public function registeredit(Request $request, $id)
    {
    
        $places = places ::findOrFail( $id);
        return view('admin.places-edit')->with("places", $places);
    
    
    }


    
    public function registerdelete($id){
        $places=places::findOrFail($id);
        $places->delete();
        
        return redirect('/places')->with('status','Your Data is Deleted');
        }



    
    
public function registerupdate(Request $request, $id){
    $places= places::find($id);
$places->continent=$request->input('continent');
$places->country=$request->input('country');
$places->city=$request->input('city');
$places->currency=$request->input('currency');

$places->update();

return redirect('/places')->with('status','Your Data is updated');
}




}
