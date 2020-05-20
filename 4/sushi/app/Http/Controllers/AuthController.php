<?php

namespace App\Http\Controllers;

use App\Notifications\ForgotPasswordNotification;
use App\Sushi;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function login()
    {
        return view('login');
    }

    public function registerUser(Request $request)
    {
        $request->validate([
            'first_name' => [
                'required',
                'min:5'
            ],

            'last_name' => [
                'required',
                'min:5'
            ],

            'email' => [
                'required',
                'min:5',
                'email',
                'unique:users',
            ],

            'password' => [
                'required',
                'min:5',
                'confirmed',
            ],
        ]);

        $user = User::create([
            'first_name' => $request->get('first_name'),

            'last_name' => $request->get('last_name'),

            'email' => $request->get('email'),

            'password' => Hash::make($request->get('password'))
        ]);

        Auth::login($user);

        return redirect(action('AuthController@profile'));
    }

    public function loginUser(Request $request)
    {
        $request->validate([
            'email' => [
                'required',
                'min:5',
                'email',
            ],

            'password' => [
                'required',
                'min:5',
            ],
        ]);


        $user = User::where('email', $request->get('email'))->first();

        if (!$user) {
            abort(404, 'User not found.');
        }

        $isCorrect = Hash::check($request->get('password'), $user->password);

        if (!$isCorrect) {
            abort(401, 'Invalid credentials');
        }

        Auth::login($user);

        return redirect(action('AuthController@profile'));
    }

    public function profile()
    {
        return view('profile');
    }

    public function forgot()
    {
        return view('forgot');
    }

    public function reset()
    {
        $reset = DB::table('password_resets')->where('token', request('token'))->first();

        if (!$reset) {
            session()->flush('status', 'Expired token');

            return redirect()->back();
        }

        return view('reset', [
            'token' => request('token'),
        ]);
    }

    public function forgotPassword(Request $request)
    {
        $request->validate([
            'email' => [
                'required',
                'min:5',
                'email',
            ],
        ]);


        $user = User::where('email', $request->get('email'))->first();

        $token = Str::random(64);

        DB::table('password_resets')->insert([
            'email' => $user->email,
            'token' => $token,
            'created_at' => now(),
        ]);

        if ($user) {

            $user->notify(new ForgotPasswordNotification($token));

        }

        $request->session()->flash('status', 'Email was sent successfully.');

        return redirect()->back();
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'password' => [
                'required',
                'min:5',
                'confirmed',
            ],
        ]);

        $reset = DB::table('password_resets')->where('token', $request->get('reset_token'))->first();

        if (!$reset) {
            session()->flush('status', 'Expired token');

            return redirect()->back();
        }

        $createdDateTime = $reset->created_at;


        if (now()->diffInMinutes(Carbon::make($createdDateTime)) >= 60) {
            $reset->delete();

            session()->flush('status', 'Expired token');

            return redirect()->back();
        }


        $user = User::where('email', $reset->email)->first();

        if (!$user) {
            session()->flush('status', 'Invalid token.');

            return redirect()->back();
        }

        $user->password = Hash::make($request->get('password'));
        $user->save();

        Auth::login($user);

        return redirect(action('AuthController@profile'));


    }

    public function logout()
    {
        Auth::logout();

        return redirect()->back();
    }
}
