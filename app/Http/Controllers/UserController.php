<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Doctors;

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
}
