<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function addDoctor()
    {
        return view('admin.add_doctor');
    }


    public function upload(Request $request){
        $doctor = new Doctor();
        $image = $request->photo;
        $imagename = time().'.'.$image->getClientoriginalExtension();
        $request->photo->move('doctorimage',$imagename);
        $doctor->image = $imagename;






        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->speciality = $request->speciality;
        $doctor->room = $request->room;

        $doctor->save();
        return redirect()->back()->with('message','Doctor Added Successfully');



//        $image = $request->file;
//        $imagename = time().'.'.$request->file('photo')->extension();
//        $path = $request->file('photo')->storeAs('photos',$imagename,'public');
//
//        $doctor = Doctor::create([
//            'name' => $request->name,
//            'phone' => $request->phone,
//            'speciality' => $request->speciality,
//            'room' => $request->room,
//
//
//        ]);

////        $image =  new Doctor();
//        $doctor->image = $path;
//        $doctor->save($doctor);


//         return redirect()->back();


    }
}
