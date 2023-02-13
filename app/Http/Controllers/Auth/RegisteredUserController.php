<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            // 'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'age' => $request->age,
            'grade' => $request->grade,
            'parent_name' => $request->pName,
            'parent_phone' => $request->phone,
            'location' => $request->location,
            'program_name' => $request->program,
            'location' => $request->location,
            'is_acitve' => 0,
            'password' => Hash::make($this->whatIsThePass(10)),
        ]);


        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
    public function whatIsThePass($length_of_string)
    {

        $str_result = 'ABCDEFGHIJKL0123456789MNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';

        return substr(
            str_shuffle(str_shuffle($str_result)),
            0,
            $length_of_string
        );
    }
}
