<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Attendance;
use App\Models\Rest;



class AttendanceController extends Controller
{
      //出勤アクション
    public function startAttendance(request $request) {
        
        // ログインしているユーザーの情報を取得
        $user = auth()->user();   
        
        Attendance::create([
            'user_id' => $user->id,
            'start_time' => Carbon::now(),
            'date' => Carbon::today()
        ]);


        return view('index', [
            'startDisabled' => true,
            'endDisabled'=> false,
            'rest_sDisabled' => false,
            'rest_eDisabled' => true
        
        ]);

    }

    //退勤アクション

    public function endAttendance(request $request) {
        $user = auth()->user();
        $timeOut = Attendance::where('user_id',$user->id)->latest()->first();

        $now = new Carbon();
        $punchIn= new Carbon($timeOut->start_time);

        //1日の休憩時間の合計
        $breakTime = Rest::where('attendance_id', $timeOut->id)->select('total_time')->sum('total_time');

        //休憩時間を修正
        $hours = floor($breakTime / 3600);
        $minutes = floor(($breakTime % 3600) / 60);
        $seconds = $breakTime % 60;

        // フォーマットして表示
        $break_timeFormat = sprintf('%02d:%02d:%02d', $hours, $minutes, $seconds);

        //実労働時間の計算
        $stayTime = $punchIn->diffInSeconds($now);      
        $workingTime = $stayTime - $breakTime;
        
        //実労働時間を修正
        $hours = floor($workingTime / 3600);
        $minutes = floor(($workingTime % 3600) / 60);
        $seconds = $workingTime % 60;

        // フォーマットして表示
        $working_timeFormat = sprintf('%02d:%02d:%02d', $hours, $minutes, $seconds);
        
                        
        $timeOut->update([
                        'end_time' => Carbon::now(),
                        'breakTime'=> $break_timeFormat,
                        'workingTime'=>$working_timeFormat,
                        
                    ]);


        return view('index', [
            'startDisabled' => true,
            'endDisabled' => true,
            'rest_sDisabled' => true,
            'rest_eDisabled' => true
        
        ]);

    }



    // 日付一覧ページ
    public function getAttendance(Request $request)
        {
        
        if($request->date==null){$date = Carbon::today();}
        $result=attendance::GetDayAttendance($date)->paginate(5);
        $dateDisplay=Carbon::today()->format('Y-m-d');

        
        return view('attendance',['forms' => $result],['dateDisplay' => $dateDisplay]);

       
      }



    public function subAttendance(request $request)
    {

        $date = new Carbon($request->input('date_Display'));
        $result = attendance::GetDayAttendance($date->subDay())->paginate(5);
        
        $dateDisplay = (new Carbon($date))->format('Y-m-d');

        return view('attendance',['forms' => $result],['dateDisplay' => $dateDisplay]);


    }

    public function addAttendance(request $request)
    {
        $date = new Carbon($request->input('date_Display'));
        $result = attendance::GetDayAttendance($date->addDay())->paginate(5);

        $dateDisplay = (new Carbon($date))->format('Y-m-d');
        
        return view('attendance',['forms' => $result],['dateDisplay' => $dateDisplay]);

    }

   
     
}