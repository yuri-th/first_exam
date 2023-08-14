<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Attendance extends Model
{
    // use HasFactory;
    protected $fillable = ['user_id','date', 'start_time', 'end_time','breakTime','workingTime'];
    
    
    // リレーション
    public function user()
    {
       return $this->belongsTo('App\Models\User');
    }

    //ユーザーから名前を取得
    public function getUser(){
        return ($this->user)->name;
    }

    public function rests(){
        return $this->hasMany('App\Models\Rest');
    }


    //勤怠をスコープ
    public function scopeGetDayAttendance($query,$date) {
        return $query->where('date',$date);
    }

    
    

    

    

    
    


}
