<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Attendance extends Model
{
    
    protected $fillable = ['user_id','date', 'start_time', 'end_time','breakTime','workingTime'];
    
    
    // リレーション
    public function user()
    {
       return $this->belongsTo('App\Models\User');
    }

    public function rests(){
        return $this->hasMany('App\Models\Rest');
    }


    //ユーザーから名前を取得
    public function getUser(){
        return ($this->user)->name;
    }



    //勤怠をスコープ
    public function scopeGetDayAttendance($query,$date) {
        return $query->where('date',$date);
    }



}
