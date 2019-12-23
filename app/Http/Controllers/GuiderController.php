<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Travelplace;
use App\Userinfo;
use App\User;

class GuiderController extends Controller
{
    public function index(Request $req){
        if($req->session()->has('travelplace')){

            $travelplace=$req->session()->get('travelplace');
           
            $req->session()->forget('travelplace');
            
        }
        else{
            $travelplace="";
        }
        return view('guider.index')->with('travelplace',$travelplace);
    }

    public function addPlace(){
        return view('guider.guiderAddPlace');
    }

    public function addPlacePost(Request $req){

        $validation=Validator::make($req->all(),[
            'travelplace'=>'required',
            'division'=>'required',
            'location'=>'required',
            'description'=>'required',
            'file'=>'required'
            
            ]);
            if($validation->fails()){
            
                return back()
                        ->with('errors',$validation->errors())
                        ->withInput();
            
        }
        $req->session()->put('travelplace',"success");
        if($req->hasFile('file')){
            $file=$req->file('file');
            $title=str_replace(".jpg", "",$file->getClientOriginalName());
            if($file->move('images/travelplace/'.$req->division.'/',$file->getClientOriginalName())) {
                // echo "success";
                
                
                $place=new Travelplace();
                $place->travelguidermail=$req->session()->get('usermail');
                $place->travelplace=$req->travelplace;
                $place->description=$req->description;
                $place->division=$req->division;
                $place->location=$req->location;
                $place->pictures=$title;
                $place->status="permitted";
                

                if($place->save()){
                    
                    return redirect('/guider');
                
                    
                }
                else{
                    
                    return redirect('/guider');
                }

            }
            else{
                // echo "upload fail";
            }
        }
        else{
            // echo "upload fail";

        }
        ////

    }

    public function profile(Request $req){

        $userinfo=Userinfo::where('usermail',$req->session()->get('usermail'))
                        ->first();
        return view('guider.guiderProfile')->with('users',$userinfo);

    }

    public function profilePost(Request $req){

        if($req->submit=="delete account"){
            $dlt=Userinfo::where('usermail',$req->email)->delete();
            $dlt=User::where('usermail',$req->email)->delete();
            return redirect('/logout');

        }

        $validation=Validator::make($req->all(),[
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required',
            'phoneno'=>'required',
            'address'=>'required'
            
            ]);
            if($validation->fails()){
               
                return back()
                        ->with('errors',$validation->errors())
                        ->withInput();
            
        }
        if($req->password!=""){

            $validation=Validator::make($req->all(),[
                
                'password'=>'required|min:6|alpha_num|regex:/[A-Za-z]/|regex:/[0-9]/|confirmed'
                
                ]);
                if($validation->fails()){
                   
                    return back()
                            ->with('errors',$validation->errors())
                            ->withInput();
                
            }

        }
        $userinfo=Userinfo::where('usermail',$req->session()->get('usermail'))
                        ->first();
        // $userinfo->usermail=$req->email;
        $userinfo->firstname=$req->firstname;
        $userinfo->lastname=$req->lastname;
        $userinfo->phoneno=$req->phoneno;
        $userinfo->address=$req->address;
      
        if($req->password != ""){

            $userinfo->password=$req->password;
        }
       
        $userinfo->save();


        $user=User::where('usermail',$req->session()->get('usermail'))
                ->first();
        // $user->usermail=$req->email;
        if($req->password != ""){

            $user->password=$req->password;
            $user->save();
        }

        return redirect('/guider');
       
        //
    }

    public function myPlace(Request $req){
        $place=Travelplace::where('travelguidermail',$req->session()->get('usermail'))
                        ->get();
        return view('guider.guiderMyPlaces')->with('result',$place);
    }

    public function myPlacePost(Request $req){
        if($req->submit=="delete this"){
            $place=Travelplace::where('id',$req->travelid)
                            ->first();
            unlink(public_path('images\travelplace\\'.$place->division.'\\'.$place->pictures.'.jpg'));
            $delete=Travelplace::where('id',$req->travelid)->delete();
            return redirect('/guider/guiderMyPlaces');

        }
        else{
            return redirect()->route('guider.updatePlace',$req->travelid);
        }
    }

    public function updatePlace(Request $req,$id){
        $place=Travelplace::where('id',$id)
                        ->first();
        return view('guider.guiderUpdatePlace')->with('result',$place);
    }

    public function updatePlacePost(Request $req,$id){

        $validation=Validator::make($req->all(),[
            'travelplace'=>'required',
            'division'=>'required',
            'location'=>'required',
            'description'=>'required'
            
            ]);
            if($validation->fails()){
               
                return back()
                        ->with('errors',$validation->errors())
                        ->withInput();
            
        }

        $place=Travelplace::where('id',$id)
                        ->first();
        $place->travelplace=$req->travelplace;
        $place->division=$req->division;
        $place->location=$req->location;
        $place->description=$req->description;

        if($req->hasFile('file')){
            $file=$req->file('file');
            $title=str_replace(".jpg","",$file->getClientOriginalName());
            if($file->move('images/travelplace/'.$req->division.'/',$file->getClientOriginalName())){

                $place->pictures=$title;

            }
            else{
                echo "upload failed";
            }
        }
        if($place->save()){
            
            return redirect('/guider/guiderMyPlaces');
        }


    }


    public function destinations(Request $req,$destination){
        $place=Travelplace::where('division',$destination)
                        ->get();
        return view('guider.guiderDestinations')->with('result',$place);
    }
}
