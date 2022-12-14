<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
   public function redirect()
   {
       if (Auth::id()) {
           if (Auth::user()->user_type == '0') {
               $doctor = Doctor::all();
               return view('user.home',compact('doctor'));
           }
           else{
                   return view('admin.home');
               }

       }else{
           return redirect()->back();
       }


   }


   public function index()
   {
       if (Auth::id()) {
             return redirect('home');
       }
       else{
           $doctor = Doctor::all();
           return view('user.home', compact('doctor'));
       }

   }
}
