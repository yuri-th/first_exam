<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Rest;
use App\Models\Attendance;

use Illuminate\Http\Request;

class RestController extends Controller
{
    //休憩開始
    public function startRest() {
        $user = auth()->user();           
        $pastattendance = Attendance::where('user_id',$user->id)->latest()->first();
        //最新の勤怠を取得      

        Rest::create([
            'attendance_id' => $pastattendance->id,
            'start_time' => Carbon::now(),
        ]);
        
        return redirect()->back();
    }

    //休憩終了
    public function endRest() {
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
        
        return redirect()->back();
    }



}
