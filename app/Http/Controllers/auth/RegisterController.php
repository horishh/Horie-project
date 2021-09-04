<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Validator;
use Redirect;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function view()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $input = $request->input();

//        $messages = [
//            'email.unique' => 'Custom validation message.',
//        ];

        $validator = Validator::make($input, [
            'name' => 'required|max:255',
            'email' => 'required|unique:users,email',
            'password' => 'required|confirmed|min:6',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors()->all(':message');
            return Redirect::back()
                ->withInput($input)
                ->withErrors($errors);
        }

        $input['password'] = bcrypt($input['password']);

        $user = User::create($input);

        auth()->login($user);

        return view('auth.login');
    }
}
