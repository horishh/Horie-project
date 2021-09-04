<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Validator;
use Redirect;
use Hash;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function view()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $input = $request->input();

        $validator = Validator::make($input, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors()->all(':message');
            return Redirect::back()
                ->withInput($input)
                ->withErrors($errors);
        }

        $user = User::where('email', $input['email'])->first();

        $errors = [];

        if (!$user || !Hash::check($input['password'], $user->password)) {
            $errors[] = __('translate.login_form.errors.invalid_creds');
            $email = $input['email'];
            return view('auth.login', compact('errors', 'email'));
        }

        auth()->login($user);

        return redirect('dashboard');
    }

    public function logout()
    {
        auth()->logout();

        return redirect('login');
    }
}
