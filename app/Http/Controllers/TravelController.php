<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trips;

class TravelController extends Controller
{
    public function home(){
        return view('e-sacco.layout');
    }
    public function index(){
        return view('e-sacco.home');
    }
    public function trips(){
        return view('e-sacco.trips');
    }
    public function About(){
        return view('e-sacco.AboutUs');
    }
    public function Admdashboard(){
        return view('e-sacco.AdminDashboard');
    }
    public function Userdashboard(){
        return view('e-sacco.userdashboard');
    }

//Backend routes ->connects to the dashboard
    public function createTrips(Request $request){
       $data = $request->validate([
        'Trip_Name' => ['required','string','min:3','max:255'],
        'Trip_Date' => ['required', 'date'],
        'Number_of_seats'  => ['required','numeric','min:14'],
        'price'=>['required','min:500','numeric'],
        'Description'=>['required','string'],
        'Destination_Image'=>['required', 'string', 'mimes:png,svg,jpg,bmp,gif,jpeg']
       ]);
       if($request->hasFile('Destination_Image')){
          $image = $request->file('Destination_Image');
          $imageName = time().'_'.$image->getClientOriginalName();
          $imagepath = $image->storeAs('image',$imageName,'public');
          $data['Destination_Image']= 'storage/'.$imagepath;
       }
       Trips::create($data);
    }
}
