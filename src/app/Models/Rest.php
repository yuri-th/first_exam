<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Rest extends Model
{
    
    protected $fillable = ['attendance_id','start_time', 'end_time','total_time'];

    // リレーション
    public function attendance()
    {
       return $this->belongsTo('App\Models\Attendance');
    }


}
