<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Validator;
use App\User;
use App\Userinfo;
use App\Travelplace;

class TraveliaController extends Controller
{
    public function index(Request $req){

       

        if(Cookie::get('usermail') !== ""){
            $login[0]=Cookie::get('usermail');
            $login[1]=Cookie::get('password');
            $login[3]="checked";
            $login[4]=""; //session value will store 
           
        }
        else{

           
            $login[0]="";
            $login[1]="";
            $login[3]="";
            $login[4]=""; //session value will store 

        }
        if($req->session()->has('correctreg')){

            if($req->session()->get('correctreg')=="unsuccessful"){
                $login[4]="unsuccessful";
            }
            else{
                $login[4]="successful";

            }
            $req->session()->forget('correctreg');
            
        }
        return view('travelia.index')->with('login',$login);
    }

    public function registration(Request $req){

        $validation=Validator::make($req->all(),[
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required',
            'phoneno'=>'required',
            'usertype'=>'required',
            'address'=>'required',
            'password'=>'required|min:6|alpha_num|regex:/[A-Za-z]/|regex:/[0-9]/|confirmed'
            
            ]);
            if($validation->fails()){
                $req->session()->put("correctreg","unsuccessful");
                return back()
                        ->with('errors',$validation->errors())
                        ->withInput();
            
        }
        $req->session()->put("correctreg","successful");

            $userinfo=new Userinfo();
            $userinfo->usermail=$req->email;
            $userinfo->firstname=$req->firstname;
            $userinfo->lastname=$req->lastname;
            $userinfo->phoneno=$req->phoneno;
            $userinfo->address=$req->address;
            $userinfo->usertype=$req->usertype;
            $userinfo->password=$req->password;
            $userinfo->status="permitted";

            $userinfo->save();


            $user=new User();
            $user->usermail=$req->email;
            $user->password=$req->password;
            $user->usertype=$req->usertype;
            $user->save();


            return redirect('/travelia');

    }

    public function destinations(Request $req,$destination){
        $place=Travelplace::where('division',$destination)
                        ->get();

        return view('travelia.traveliaDestinations')->with('result',$place);
    }
}
