<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Attendance;
use App\Models\Rest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
       {  
          $user = auth()->user();
          //一番最新のレコードを取得
          $paststart = Attendance::where('user_id',$user->id)->latest()->first();
          
          $pastDay = '';

          // 最新の休憩レコードを取得
          if($paststart!= null){
          $attendance = $paststart->id;
          $pastrest = Rest::where('attendance_id', $attendance)->latest()->first();
          }
    

        //出勤開始後のボタン制御
        if($paststart) {
            $pastDay = new Carbon($paststart->date);
        }

        $today = Carbon::today();

        if (($today == $pastDay) && (empty($paststart->end_time))&& (empty($pastrest->start_time)) ){
        
         return view('index', [
        'startDisabled' => true,
        'endDisabled' => false,
        'rest_sDisabled' => false,
        'rest_eDisabled' => true
        ]);   
        
        }else if(($today == $pastDay) && (empty($paststart->end_time))&& (empty($pastrest->end_time)) ){

          return view('index', [
        'startDisabled' => true,
        'endDisabled' => true,
        'rest_sDisabled' => true,
        'rest_eDisabled' => false
        ]); 

        }else if(($today == $pastDay) && (!empty($pastrest->start_time)) && (!empty($pastrest->end_time))&& (empty($paststart->end_time)) ){

        return view('index', [
        'startDisabled' => true,
        'endDisabled' => false,
        'rest_sDisabled' => false,
        'rest_eDisabled' => true
        ]); 

        }else if(($today == $pastDay) && (!empty($paststart->end_time))){

        return view('index', [
        'startDisabled' => true,
        'endDisabled' => true,
        'rest_sDisabled' => true,
        'rest_eDisabled' => true
        ]); 

        }

        // 新規のログイン後画面

       return view('index', [
            'startDisabled' => false,
            'endDisabled' => true,
            'rest_sDisabled' => true,
            'rest_eDisabled' => true
            ]);

       }

}