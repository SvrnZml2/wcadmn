<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'password_old' => [
                'required',
                function ($attribute, $value, $fail) {
                    if(!Hash::check($value, Auth::user()->password)) {
                        return $fail('Ancien mot de passe erroné');
                    }
                },
            ],
            'password' => 'required|string|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $user = Auth::user();

        $user->password = Hash::make($request->password);

        $user->save();

        return back()->withStatus('Mot de passe changé');
    }

    public function settings()
    {
        return view('settings');
    }



}
