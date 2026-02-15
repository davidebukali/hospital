<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Doctors;
use App\Models\Appointment;

class UserController extends Controller
{
    public function Dashboard()
    {
        if (Auth::check() && Auth::user()->user_type == 'admin') {
            return view('admin.dashboard');
        }
        else if (Auth::check() && Auth::user()->user_type == 'user') {
            return view('dashboard');
        } else {
            return redirect('/');
        }
    }

    public function Index()
    {
        $doctors = Doctors::all();
        return view('index', compact('doctors'));
    }

    public function allDoctors()
    {
        $doctors = Doctors::all();
        return view('doctors', compact('doctors'));
    }

    public function MakeAnAppointment(Request $request)
    {
        $appointment = new Appointment();
        $appointment->full_name = $request->full_name;
        $appointment->email_address = $request->email_address;
        $appointment->submission_date = $request->submission_date;
        $appointment->speciality = $request->speciality;
        $appointment->number = $request->number;
        $appointment->message = $request->message;
        $appointment->status = 'in_progress';
        $appointment->save();
        return redirect()->back()->with('appointment_message', 'Appointment made successfully');
    }
}
