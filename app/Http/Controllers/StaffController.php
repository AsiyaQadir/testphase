<?php

namespace App\Http\Controllers;
use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    //
    function addStaff(Request $req)
    {
        $staff = new Staff;
        $staff->stationid=$req->sid;
        $staff->name=$req->name;
        $staff->address=$req->address;
        $staff->phone=$req->phone;
        $staff->role=$req->role;
        $staff->cnic=$req->cnic;
        $staff->save();
        return redirect('dashboard');
    }

    function viewMechanic(Request $req){
        $staff=new Staff;
        $mechanicsTable=$staff->where('role','mechanic')->get();
        return view('viewmechanic',['mechanicArr'=>$mechanicsTable]);
    }

}
