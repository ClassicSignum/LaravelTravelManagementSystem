<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\Salarysheets;
use Maatwebsite\Excel\Facades\Excel;
use Validator;
use App\Travelplace;
use App\Userinfo;
use App\Hotelinfo;
use App\User;
use App\Salarysheet;
use App\Servicecharge;
use App\Messagetocare;

class AdminController extends Controller
{
    public function index(){
        $traveller=Userinfo::where('usertype','Traveller')->get();
        $tracount=count($traveller);
        
        $traveller=Userinfo::where('usertype','Travel guider')->get();
        $guidcount=count($traveller);
        
        $traveller=Userinfo::where('usertype','Hotel Emp')->get();
        $hotelcount=count($traveller);

        $traveller=Userinfo::where('usertype','customercare')->get();
        $carecount=count($traveller);

        $travelplace=Travelplace::where('division','sylhet')->get();
        $sylcount=count($travelplace);
        $travelplace=Travelplace::where('division','chittagong')->get();
        $chicount=count($travelplace);

        $travelplace=Travelplace::where('division','rajshahi')->get();
        $rajcount=count($travelplace);
        $travelplace=Travelplace::where('division','khulna')->get();
        $khucount=count($travelplace);
        
        return view('admin.index')->with('traveller',$tracount)
                                ->with('guider',$guidcount)
                                ->with('care',$carecount)
                                ->with('syl',$sylcount)
                                ->with('raj',$rajcount)
                                ->with('khu',$khucount)
                                ->with('chit',$chicount)
                                ->with('hotel',$hotelcount);
    }

    public function adminTravellerinfo(Request $req){

        $userinfo=Userinfo::where('usertype','Traveller')->get();

        return view('admin.adminUserinfo')->with('users',$userinfo);

    }
    public function adminTravelGuiderinfo(Request $req){

        $userinfo=Userinfo::where('usertype','Travel guider')->get();

        return view('admin.adminUserinfo')->with('users',$userinfo);

    }
    public function adminHotelempinfo(Request $req){

        $userinfo=Userinfo::where('usertype','Hotel emp')->get();

        return view('admin.adminUserinfo')->with('users',$userinfo);

    }

    public function adminCustcareinfo(Request $req){

        $userinfo=Userinfo::where('usertype','customercare')->get();

        return view('admin.adminCustCare')->with('users',$userinfo);

    }

    public function adminUserinfoPost(Request $req){
        if($req->submit=="permitted"){
            $userinfo=Userinfo::where('usermail',$req->email)->first();
            $userinfo->status="restricted";
            $userinfo->save();
            return redirect('/admin');
        }
        else if($req->submit=="restricted"){
            $userinfo=Userinfo::where('usermail',$req->email)->first();
            $userinfo->status="permitted";
            $userinfo->save();
            return redirect('/admin');
        }
        else if($req->submit=="send"){
            $msg=$req->messagebox;
            $email=$req->email;
            $msgtocare=new Messagetocare();
            $msgtocare->sendto=$email;
            $msgtocare->message=$msg;
            $msgtocare->save();

            return redirect('/admin/adminCustCare');
        }
        else{
            ///delete account
            DB::statement('delete users,userinfos from users inner join userinfos on userinfos.usermail=users.usermail where users.usermail="'.$req->email.'"');
            return redirect('/admin');
        }
    }

    public function adminHotelinfo(Request $req){
        $hotel=Hotelinfo::all();
        return view('admin.adminHotelinfo')->with('hotel',$hotel);
    }

    public function adminHotelinfoPost(Request $req){
        if($req->submit=="permit"){
            $hotel=Hotelinfo::where('hotelname',$req->hotelname)->first();
            $hotel->status='permitted';
            $hotel->save();
            return redirect('/admin/adminHotelinfo');
        }
        else if($req->submit=="restrict"){
            $hotel=Hotelinfo::where('hotelname',$req->hotelname)->first();
            $hotel->status='restricted';
            $hotel->save();
            return redirect('/admin/adminHotelinfo');
        }
        else{
            $dlt=Hotelinfo::where('hotelname',$req->hotelname)->delete();
            return redirect('/admin/adminHotelinfo');
        }

    }

    public function adminTravelPlace(Request $req){
        $travelplace=Travelplace::all();

        return view('admin.adminTravelPlace')->with('travelplace',$travelplace);
    }

    public function adminTravelPlacePost(Request $req){
       
            $dlt=Travelplace::where('travelplace',$req->travelplace)
                            ->first()
                            ->delete();
            return redirect('/admin/adminTravelPlace');
        
    }

    public function adminAddCust(Request $req){
        return view('admin.adminAddCust');
    }

    public function adminAddCustPost(Request $req){
        $validation=Validator::make($req->all(),[
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required',
            'phoneno'=>'required',
            'address'=>'required',
            'password'=>'required|min:6|alpha_num|regex:/[A-Za-z]/|regex:/[0-9]/|confirmed'
            
            ]);
            if($validation->fails()){
            
                return back()
                        ->with('errors',$validation->errors())
                        ->withInput();
            
        }

        $userinfo=new Userinfo();
        $userinfo->firstname=$req->firstname;
        $userinfo->lastname=$req->lastname;
        $userinfo->usermail=$req->email;
        $userinfo->password=$req->password;
        $userinfo->address=$req->address;
        $userinfo->phoneno=$req->phoneno;
        $userinfo->usertype='customercare';
        $userinfo->status="permitted";

        $userinfo->save();

        $user=new User();
        $user->usermail=$req->email;
        $user->password=$req->password;
        $user->usertype='customercare';
        $user->save();
        return redirect('/admin');

    }

    public function adminProfile(Request $req){
        $userinfo=Userinfo::where('usermail',$req->session()->get('usermail'))
                        ->first();
        return view('admin.adminProfile')->with('users',$userinfo);
    }

    public function adminProfilePost(Request $req){

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

        return redirect('/admin/adminProfile');
    }


    public function custSalarySheet(Request $req){

        $salarysheet=Salarysheet::where('custcaremail',$req->session()->get('custcaremail'))->get();

        return view('admin.adminCustSalarySheet')->with('audits',$salarysheet);

    }

    public function custSalarySheetPost(Request $req){
        $email=$req->email;
        $month=$req->month;
        $amount=$req->amount;
        if($req->submit=="submit"){

            $salarysheet=new Salarysheet();
            $salarysheet->custcaremail=$email;
            $salarysheet->salarypaid=$amount;
            $salarysheet->paidmonth=$month;

            $salarysheet->save();

            return redirect('/admin/adminCustSalarySheet');

        }
        else{
            $dlt=Salarysheet::where('custcaremail',$email)
                            ->where('paidmonth',$month)
                            ->delete();
            return redirect('/admin');
        }
    
    
    }


    public function serviceCharge(Request $req){
        $servicecharge=Servicecharge::all();
        $total=$servicecharge->sum('amount');
        return view('admin.adminServiceCharge')->with('service',$servicecharge)
                                            ->with('total',$total);
    }


    public function serviceChargePost(Request $req){

        if($req->submit=="Excel"){

            return Excel::download(new Salarysheets,'salary.xlsx');

        }
        else{

            $servicecharge=new Servicecharge();
            $servicecharge->usermail=$req->email;
            $servicecharge->paidmonth=$req->month;
            $servicecharge->amount=$req->amount;
            $servicecharge->save();
            
            return redirect('/admin/adminServiceCharge');
        }
    }






///
}
