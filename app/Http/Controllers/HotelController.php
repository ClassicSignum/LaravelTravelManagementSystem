<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotelinfo;
use App\Userinfo;
use App\Travelplace;
use App\Bookinginfo;
use App\User;
use Validator;
class HotelController extends Controller
{
    public function index(Request $req){

        $hotel=Hotelinfo::where('hotelempmail',$req->session()->get('usermail'))
                    ->first();
        
        return view('hotel.index')->with('result',$hotel);

    }

    public function indexPost(Request $req){
        if($req->submit=="delete"){
            $dlt=Hotelinfo::where('hotelempmail',$req->session()->get('usermail'))->delete();
            return redirect('/hotel');
        }
        else{


            $validation=Validator::make($req->all(),[
                'hotelname'=>'required',
                'totalroom'=>'required',
                'singlebed'=>'required',
                'doublebed'=>'required',
                'suit'=>'required'
                
                ]);
                if($validation->fails()){
                   
                    return back()
                            ->with('errors',$validation->errors())
                            ->withInput();
                
                 }

                 $singlebed=$req->singlebed;
                 $doublebed=$req->doublebed;
                 $suit=$req->suit;
                 $hotelname=$req->hotelname;
                 $totalroom=$req->totalroom;

                 $price = "single bed room-bdt ".$singlebed.", double bed room-bdt ".$doublebed.", suit room-bdt ".$suit."";

                 $hotel=Hotelinfo::where('hotelempmail',$req->session()->get('usermail'))->first();
                 $hotel->hotelempmail=$req->session()->get('usermail');
                 $hotel->hotelname=$hotelname;
                 $hotel->totalroom=$totalroom;
                 $hotel->roomtypes=$price;
                 $hotel->status="permitted";
                 $hotel->save();

                 return redirect('/hotel');



        }
    
    
    }

    public function profile(Request $req){

        $userinfo=Userinfo::where('usermail',$req->session()->get('usermail'))->first();
        return view('hotel.hotelProfile')->with('users',$userinfo);

    }


    public function profilePost(Request $req){
        if($req->submit=="Delete"){
            $dlt=Userinfo::where('usermail',$req->email)->delete();
            $dlt=User::where('usermail',$req->email)->delete();
            return redirect('/logout');
        }
        else{

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
    
            return redirect('/hotel');

        }
    }



    public function hotelAdd(Request $req){
        $place=Travelplace::all();
        return view('hotel.hotelAdd')->with('result',$place);
    }


    public function hotelAddPost(Request $req){
        
        $dlt=Hotelinfo::where('hotelempmail',$req->session()->get('usermail'))->delete();

        $validation=Validator::make($req->all(),[
            'location'=>'required',
            'totalroom'=>'required',
            'singlebed'=>'required',
            'doublebed'=>'required',
            'suitbed'=>'required',
            'description'=>'required'
            
            ]);
            if($validation->fails()){
               
                return back()
                        ->with('errors',$validation->errors())
                        ->withInput();
                        
            
        }

        if($req->hasFile('file')){
            $file=$req->file('file');
            $title=str_replace(".jpg", "",$file->getClientOriginalName());
            if($file->move('images/hotel/',$file->getClientOriginalName())) {
                // echo "success";
                $singlebed=$req->singlebed;
                $doublebed=$req->doublebed;
                $suit=$req->suitbed;
                $price = "single bed room-bdt ".$singlebed.", double bed room-bdt ".$doublebed.", suit room-bdt ".$suit."";
              
                $hotel=new Hotelinfo();
                $hotel->hotelempmail=$req->session()->get('usermail');
                $hotel->hotelname=$req->hotelname;
                $hotel->description=$req->description;
                $hotel->division=$req->division;
                $hotel->location=$req->location;
                $hotel->roomtypes=$price;
                $hotel->pictures=$title;
                $hotel->totalroom=$req->totalroom;
                
                $hotel->status="permitted";
                

                if($hotel->save()){
                    
                    return redirect('/hotel');
                
                    
                }
                else{
                    
                    return redirect('/hotel');
                }

            }
            else{
                // echo "upload fail";
            }
        }
        else{

        }
        
    }


    public function hotelReq(Request $req){
        $bookinginfo=Bookinginfo::where('hotelempmail',$req->session()->get('usermail'))->get();
        return view('hotel.hotelReq')->with('result',$bookinginfo);
    }

    public function hotelReqPost(Request $req){
        $id=$req->id;
        if($req->submit=="Accept"){
            $bookinginfo=Bookinginfo::where('id',$id)->first();
            $bookinginfo->status="successful";
            if($bookinginfo->save()){
                return redirect('/hotel/hotelReq');
            }
        }
        else{

            $bookinginfo=Bookinginfo::where('id',$id)->first();
            $bookinginfo->status="cancelled";
            if($bookinginfo->save()){
                return redirect('/hotel/hotelReq');
            }

        }
    }






}
