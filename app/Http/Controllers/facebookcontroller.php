<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Exception;
class facebookcontroller extends Controller
{
    public function facebookpage(){

        return Socialite::driver('facebook')->redirect();
    }

    public function facebookredirect(){

        try{
            $user = socialite::driver('facebook')->user();
            $finduser = User::where('facebook_id',$user->id)->first();

            if($finduser){
                Auth::login($finduser);
                return redirect()->intended('dashboard');
            }else{
                $newuser = User::updateOrCreate(['email' => $user->email],[
                    'name'=> $user->name,
                    'facebook_id'=>$user->id,
                    'password'=>encrypt('1234dummy')
                ]);

                Auth::login($newuser);
                return redirect()->intended('dashboard');
            }
        }   catch (Exception $e){
            dd($e->getMessage());
        }
    }
}
