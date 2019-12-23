<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Travelplace;
use App\Userinfo;
use App\User;
use App\Hotelinfo;
use App\Bookinginfo;
use App\Messagetohotel;
use \DateTime;

class TravellerController extends Controller
{
    public function index(Request $req){
        $booking="";
        if($req->session()->has('booking')){
            $booking=$req->session()->get('booking');
            
        }
        $req->session()->forget('booking');
        return view('traveller.index')->with('booking',$booking);
    }

    public function profile(Request $req){

        $userinfo=Userinfo::where('usermail',$req->session()->get('usermail'))->first();
        return view('traveller.travellerProfile')->with('users',$userinfo);

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
    
            return redirect('/traveller');

        }
    }

    public function destination(Request $req,$division){
        $place=Travelplace::where('division',$division)->get();
        return view('traveller.travellerDestination')->with('result',$place);
    }

    public function destinationPost(Request $req,$div){
        $travelplace=$req->location;

        $hotels=Hotelinfo::where('location',$travelplace)
                        ->where('status','permitted')
                        ->get();
        return view('traveller.travellerHotels')->with('hotel',$hotels);

    }

    public function hotelPost(Request $req){
        $hotelroom=$req->hotelroom;
        $hotelempmail=$req->hotelempmail;
        $hotelname=$req->hotelname;

        return view('traveller.travellerBooking',compact('hotelroom','hotelempmail','hotelname'));
    }

    public function bookingPost(Request $req){
        $checkin=new DateTime($req->checkin);
        $checkout=new DateTime($req->checkout);
        if($checkin>$checkout){
            $req->session()->put('booking','invalid');
            return redirect('/traveller');
        }
        else{
            $totaldays=$checkin->diff($checkout);
            $roomtype=$req->roomtype;
            $cost = preg_replace('/\D/', '', $roomtype);
            $totalcost=$totaldays->d*$cost;

            $bookinginfo[0]=$req->session()->get('usermail');
            $bookinginfo[1]=$req->hotelempmail;
            $bookinginfo[2]=$req->hotelname;
            $bookinginfo[3]=$checkin->format('Y-m-d');
            $bookinginfo[4]=$checkout->format('Y-m-d');;
            $bookinginfo[5]=$totaldays->d;
            $bookinginfo[6]=$roomtype;
            $bookinginfo[7]=$totalcost;

            $req->session()->put('bookinginfo',$bookinginfo);

            return redirect()->route('traveller.invoice');
        }

    }

    public function invoice(Request $req){
        return view('traveller.travellerInvoice')->with('bookinginfo',$req->session()->get('bookinginfo'));
    }

    public function invoicePost(Request $req){

        $booking=new Bookinginfo();
        $booking->travellermail=$req->session()->get('usermail');
        $booking->hotelempmail=$req->hotelempmail;
        $booking->hotelname=$req->hotelname;
        $booking->checkin=$req->checkin;
        $booking->checkout=$req->checkout;
        $booking->days=$req->totaldays;
        $booking->roomtype=$req->roomtype;
        $booking->totalcost=$req->totalcost;
        $booking->status='requested';

        if($booking->save()){

            $req->session()->put('booking','valid');
            return redirect('/traveller');

        }



    }

    public function mybooking(Request $req){

        $message="";
        if($req->session()->has('message')){
            $message="message sent";
            $req->session()->forget('message');
        }

        $booking=Bookinginfo::where('travellermail',$req->session()->get('usermail'))
                            ->get();
        return view('traveller.travellerMyBooking')->with('result',$booking)
                                                    ->with('msg',$message);
        
    }

    public function mybookingPost(Request $req){

        if($req->submit=="Cancel"){
            $bookinginfo=Bookinginfo::where('id',$req->id)->first();
            $bookinginfo->status='cancelled';
            $bookinginfo->save();

            return redirect('/traveller/travellerMyBooking');

        }
        else{

            $hotelempmail=$req->hotelempmail;
            $travellermail=$req->session()->get('usermail');
            $message=$req->messagebox;
            $msg=new Messagetohotel();
            
            $msg->msgfrom=$travellermail;
            $msg->msgto=$hotelempmail;
            $msg->msg=$message;
            $msg->save();
            
            $req->session()->put('message',"message sent");
            return redirect('/traveller/travellerMyBooking');
        }
        
    }


}
