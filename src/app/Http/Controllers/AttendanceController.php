<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Attendance;
use App\Models\Rest;
use Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector;


class AttendanceController extends Controller
{
      //出勤アクション
    public function startAttendance(request $request) {
        // ログインしているユーザーの情報を取得
        $user = auth()->user();
        
        //一番最新のレコードを取得
        $paststart = Attendance::where('user_id',$user->id)->latest()->first();
        //一番最初はこれがないとエラーになる
        $pastDay = '';

        //退勤前に出勤を2度押せない制御
        if($paststart) {
            $pastDay = new Carbon($paststart->date);
        }

        $today = Carbon::today();
        
        if(($today == $pastDay) && (empty($paststart->end_time))) {
            
            return redirect()->back();

        }
        
        Attendance::create([
            'user_id' => $user->id,
            'start_time' => Carbon::now(),
            'date' => Carbon::today()
        ]);



        return redirect()->back();

    }

    //退勤アクション

    public function endAttendance() {
        $user = auth()->user();
        $timeOut = Attendance::where('user_id',$user->id)->latest()->first();

        $now = new Carbon();
        $punchIn= new Carbon($timeOut->start_time);

        //1日の休憩時間の合計
        $breakTime = Rest::where('attendance_id', $timeOut->id)->select('total_time')->sum('total_time');
       
        //実労働時間の計算
        $stayTime = $punchIn->diffInSeconds($now);      
        $workingTime = $stayTime - $breakTime;
                
        
        $timeOut->update([
                        'end_time' => Carbon::now(),
                        'breakTime'=> $breakTime,
                        'workingTime'=>$workingTime,
                        
                    ]);



        return redirect()->back();

    }



    // 日付一覧ページ
    public function getAttendance(Request $request)
        {
        


        // $attendances = attendance::all(); 
        // $group = $attendances->groupBy('date');
        
        
        if($request->date==null){$date = Carbon::today();}
        $result=attendance::GetDayAttendance($date)->paginate(5);

        return view('attendance',['forms' => $result]);

       
      }



    public function subAttendance()
    {      
        $date = Carbon::today();
        $result = attendance::GetDayAttendance($date->subDay())->paginate(5);
        
        
        return view('attendance',['forms' => $result]);

    }

    public function addAttendance()
    {
        $date = Carbon::today();
        $result = attendance::GetDayAttendance($date->addDay())->paginate(5);
        return view('attendance',['forms' => $result]);
    }


   
     
}