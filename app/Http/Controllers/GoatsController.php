<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Goat;
use App\Models\Breed;
use Carbon\Carbon;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class GoatsController extends Controller
{
    public function GoatCreate(){
        
        return view('infarmer.goat.goat_create');
    }


    public function GoatView(){

        $ewes = Goat::where('goat_gender','Ewe')->latest()->get();
        $rams = Goat::where('goat_gender','Ram')->latest()->get();

        return view('infarmer.goat.goat_view',compact('ewes','rams'));
    }

    public function GoatStore(Request $request){

            $goat_id = Goat::insertGetId([
            'name' => $request->name,
            'goat_gender' => $request->goat_gender,
            'created_by' => auth()->user()->name,
            'created_at' => Carbon::now(),   

                ]);
        

        

        
        $notification = array(
            'message' => $request->name . ' ' . 'The'. ' '. $request->goat_gender. ' ' .'Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('goat.view')->with($notification);

    }

    public function GoatUpdate(Request $request){    

        $goat_id = $request->id;

        Goat::findOrFail($goat_id)->update([
        'name' => $request->name,
        'goat_gender' => $request->goat_gender,

        'updated_at' => Carbon::now(),   

            ]);
        $notification = array(
            'message' => 'Sheep Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('goat.view')->with($notification);

    }

   

    public function GoatEdit($id){

        $goat = Goat::findOrFail($id);
        return view('infarmer.goat.goat_edit',compact('goat'));

    }


     public function GoatDelete($id){
        $goat = Goat::findOrFail($id);
    
        Goat::findOrFail($id)->delete();

        

        $notification = array(
            'message' => 'Sheep  Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

     }// end method 


     
    

}
