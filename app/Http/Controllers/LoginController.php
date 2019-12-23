<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\facades\DB;
use App\User;

class LoginController extends Controller
{
    public function index(Request $req){

        $usermail=$req->email;
        $password=$req->password;

        $user=User::where('usermail',$usermail)
                  ->where('password',$password)
                  ->first();
        if(!empty($user)){
            $req->session()->put('usermail',$usermail);
            $req->session()->put('usertype',$user->usertype);
            if($req->remember){
                Cookie::queue(Cookie::make('usermail', $usermail, 60));
                Cookie::queue(Cookie::make('password', $password, 60));
                
                
            }
            else{

                Cookie::queue(Cookie::make('usermail', "", 60));
                Cookie::queue(Cookie::make('password', "", 60));
                
            }
            if($user->usertype=="admin"){

                return redirect('/admin');

            }
            else if($user->usertype=="Travel guider"){
                return redirect('/guider');
            }
            else if($user->usertype=="Traveller"){
                return redirect('/traveller');
            }
            else{
                return redirect('/hotel');
            }
        }
        else{
            return redirect('/travelia');
        }

    }
}
