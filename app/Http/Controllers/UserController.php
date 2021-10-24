<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $this->validate($request, [
            'password' => 'required|same:conf_password',
            'conf_password' => 'required',
        ], [
            'required' => 'Password harus diisi.',
            'same' => 'Password tidak sesuai.',
        ]);

        $newCustomer = new User;
        $newCustomer->name = $request->name;
        $newCustomer->email = $request->email;
        $newCustomer->phone = $request->phone;
        $newCustomer->password = \Hash::make($request->password);

        $newCustomer->save();
        Auth::login($newCustomer);

        return redirect(RouteServiceProvider::HOME);
    }
}
