<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Models\{About, Contact, Student};

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $contact = Contact::first();
        $about = About::first();
        return view('auth.register')->with('contact', $contact)->with('about', $about);
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => 'user',
            'password' => Hash::make($request->password),
        ]);

        $student = Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'nisn' => $request->nisn,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'is_approved' => 0
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('user.home', absolute: false));
    }
}
