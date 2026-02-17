<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Company;
use Illuminate\Support\Facades\DB;
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
        $request->validate(
            [
                'company_name' => ['required', 'string', 'max:150'],
                'name'         => ['required', 'string', 'max:150'],
                'email'        => ['required', 'email', 'max:150', 'unique:companies,email'],
                'password'     => ['required', 'confirmed', Rules\Password::defaults()],
            ],
            [
                'email.unique' => 'A company with this email already exists.',
            ]
        );


        DB::transaction(function () use ($request) {

            $company = Company::create([
                'name'  => $request->company_name,
                'email' => $request->email,
            ]);

        User::create([
            'name'       => $request->name,
            'email'      => $request->email,
            'password'   => Hash::make($request->password),
            'company_id' => $company->id,
        ]);
    });

    return redirect(RouteServiceProvider::HOME);
}

}
