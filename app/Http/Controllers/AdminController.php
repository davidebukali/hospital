<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctors;

class AdminController extends Controller
{
    public function AddDoctors()
    {
        return view('admin.add_doctors');
    }

    public function PostDoctors(Request $request)
    {
        $doctor = new Doctors();
        $doctor->doctor_name = $request->doctor_name;
        $doctor->doctor_phone = $request->doctor_phone;
        $doctor->doctor_speciality = $request->doctor_speciality;
        $doctor->room_number = $request->room_number;
        $image = $request->file('doctor_image');
        
        if($image){
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $doctor->doctor_image = $imageName;
        }
        $doctor->save();

        if($image && $doctor->save()) {
            $request->doctor_image->move(public_path('doctor_images'), $imageName);
        }
        return redirect()->back()->with('success', 'Doctor added successfully');
    }

    public function ViewDoctors()
    {
        $doctors = Doctors::all();
        return view('admin.view_doctors', compact('doctors'));
    }
}
