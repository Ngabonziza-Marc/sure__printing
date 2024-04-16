<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Exception;

class googlecontroller extends Controller
{
    public function redirect(){
        return Socialite::driver('google')->redirect();
    }

    public function callback(){
        try{

            $google_user = socialite::driver('google')->user();
            $finduser = User::where('google_id',$google_user->getId())->first();

            if(!$finduser){
                $newuser = User::create([
                    'name'=> $google_user->getName(),
                    'email'=> $google_user->getEmail(),
                    'google_id'=>$google_user->getId(),
                    'password'=>encrypt('1234dummy')
                ]);

                Auth::login($newuser);
                return redirect()->intended('dashboard');
                
            }else{
                Auth::login($finduser);
                return redirect()->intended('dashboard');
            }
        }  catch (Exception $e){
            dd('something went wrong!'.$e->getMessage());
    }
   }
}

