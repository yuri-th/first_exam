<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Rest extends Model
{
    protected $fillable = ['attendance_id','start_time', 'end_time','total_time'];

    // リレーション
    public function Attendance()
    {
       return $this->belongsTo('App\Models\Attendance');
    }

//     public function calculateTotalBreakTime()

//     {   
//     $breaks = $this->where('attendance_id', auth()->user()->id)->get();
//     $totalBreakTime = 0;
    
//     foreach ($breaks as $break) {
//         $start = strtotime($break->start_time);
//         $end = strtotime($break->end_time);
//         $breakTime = $end - $start;
//         $totalBreakTime += $breakTime;
//     }
    
//     return $totalBreakTime;
// }





    // public function getAmount()
    // {
    //   return DB::table('rests')
    //           ->selectRaw('DATE_FORMAT(created_at, "%Y%m%d") AS date')
    //           ->selectRaw('SUM(amount) AS total_amount')
    //           ->groupBy('date')
    //           ->get();
    // }

    

}
