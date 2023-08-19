<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Rest extends Model
{
    use HasFactory;
    protected $fillable = ['attendance_id','start_time', 'end_time','total_time'];

    // リレーション
    public function attendance()
    {
       return $this->belongsTo('App\Models\Attendance');
    }


}
