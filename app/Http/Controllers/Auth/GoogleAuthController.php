<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;


class GoogleAuthController extends Controller
{
    public function googleLogin() {
        return Socialite::driver('google')->redirect();
    }
    

    public function googleAuthentication() {
        try {
            $googleUser = Socialite::driver('google')->user();

            $user = User::where('google_id', $googleUser->id)->first();
    
            if ($user) {
                Auth::login($user);
                return redirect()->route('dashboard');
            } else {
                $userData = User::create([
                    'name' => $googleUser->name,
                    'email' => $googleUser->email,
                    'password' => Hash::make('Password@1234'),
                    'google_id' => $googleUser->id,
                ]);
    
                if ($userData) {
                    Auth::login($userData);
                    return redirect()->route('dashboard');
                }
            }

        } catch (Exception $e) {
            dd($e);

        }
    }
}