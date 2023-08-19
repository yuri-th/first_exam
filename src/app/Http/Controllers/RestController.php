<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Rest;
use App\Models\Attendance;
use Illuminate\Http\Request;

class RestController extends Controller
{
    //休憩開始
    public function startRest(request $request) {
        $user = auth()->user();           
        $pastattendance = Attendance::where('user_id',$user->id)->latest()->first();
        

        Rest::create([
            'attendance_id' => $pastattendance->id,
            'start_time' => Carbon::now(),
        ]);
        
        
        return view('index', [
            'startDisabled' => true,
            'endDisabled' => true,
            'rest_sDisabled' => true,
            'rest_eDisabled' => false,
        
        ]);
        
    }

    //休憩終了
    public function endRest(request $request) {
        $user = auth()->user();
        $attendance = Attendance::where('user_id',$user->id)->latest()->first();           
        $restOut = Rest::where('attendance_id',$attendance->id)->latest()->first();
        
        $start_time = new Carbon($restOut->start_time);
        $end_time = Carbon::now();
        $total_time = $start_time->diffInSeconds($end_time);



        //最新の休憩開始を取得      
        $restOut->update([
                        'end_time' => $end_time,
                        'total_time' =>$total_time,       
                                   
                    ]);
        
        return view('index', [
            'startDisabled' => true,
            'endDisabled' => false,
            'rest_eDisabled' => true,
            'rest_sDisabled' => false
            
            ]);
    
    }



}
