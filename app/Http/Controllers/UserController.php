<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function searchStation(Request $req){
        $query = $_GET['query'];
        $stationsArrList=User::where('stationname','LIKE','%'.$query.'%')->get();
        return view('stationlist',['stationsArrList'=>$stationsArrList]);
    }
}
