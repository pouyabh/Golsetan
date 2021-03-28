<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use App\Models\Flower;

class DefController extends Controller
{
    public function home(Request $request)
    {
        $search = $request->search;
        $data = Flower::where('name', 'like', '%' . $search . '%')->latest()->get();
        return view('home', compact('data'));

    }

    public function admin_profile()
    {
        $user = User::all();
        return view('admin_profile', compact('user'));
    }

    public function client_profile()
    {
        return view('client_profile');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }


}
