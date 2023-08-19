<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class RestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'attendance_id'=>'1',
            'start_time' => Carbon::createFromTime(13, 0, 0),
            'end_time' =>Carbon::createFromTime(13, 30, 0),
            'total_time'=>'1800',
            'created_at' => Carbon::create(2023, 8, 17, 13, 31, 0),
            'updated_at' =>Carbon::create(2023, 8, 17, 13, 31, 0),  
        ];
        DB::table('rests')->insert($param);

        $param = [
            'attendance_id'=>'2',
            'start_time' => Carbon::createFromTime(13, 0, 0),
            'end_time' =>Carbon::createFromTime(14, 0, 0),
            'total_time'=>'3600',
            'created_at' => Carbon::create(2023, 8, 17, 14, 1, 0),
            'updated_at' =>Carbon::create(2023, 8, 17, 14, 1, 0),  
        ];
        DB::table('rests')->insert($param);

        $param = [
            'attendance_id'=>'3',
            'start_time' => Carbon::createFromTime(13, 0, 0),
            'end_time' =>Carbon::createFromTime(15, 0, 0),
            'total_time'=>'7200',
            'created_at' => Carbon::create(2023, 8, 17, 15, 1 ,0),
            'updated_at' =>Carbon::create(2023, 8, 17, 15, 1, 0),  
        ];
        DB::table('rests')->insert($param);

        $param = [
            'attendance_id'=>'4',
            'start_time' => Carbon::createFromTime(13, 0, 0),
            'end_time' =>Carbon::createFromTime(14, 0, 0),
            'total_time'=>'3600',
            'created_at' => Carbon::create(2023, 8, 17, 14, 1, 0),
            'updated_at' =>Carbon::create(2023, 8, 17, 14, 1, 0),  
        ];
        DB::table('rests')->insert($param);

        $param = [
            'attendance_id'=>'6',
            'start_time' => Carbon::createFromTime(11, 0, 0),
            'end_time' =>Carbon::createFromTime(11, 30, 0),
            'total_time'=>'1800',
            'created_at' => Carbon::create(2023, 8, 17, 11, 31, 0),
            'updated_at' =>Carbon::create(2023, 8, 17, 11, 31, 0),  
        ];
        DB::table('rests')->insert($param);

        $param = [
            'attendance_id'=>'7',
            'start_time' => Carbon::createFromTime(12, 30, 0),
            'end_time' =>Carbon::createFromTime(13, 0, 0),
            'total_time'=>'1800',
            'created_at' => Carbon::create(2023, 8, 17, 13, 31, 0),
            'updated_at' =>Carbon::create(2023, 8, 17, 13, 31, 0),  
        ];
        DB::table('rests')->insert($param);

        $param = [
            'attendance_id'=>'7',
            'start_time' => Carbon::createFromTime(16, 30, 0),
            'end_time' =>Carbon::createFromTime(17, 0, 0),
            'total_time'=>'1800',
            'created_at' => Carbon::create(2023, 8, 17, 17, 31, 0),
            'updated_at' =>Carbon::create(2023, 8, 17, 17, 31, 0),  
        ];
        DB::table('rests')->insert($param);

        $param = [
            'attendance_id'=>'9',
            'start_time' => Carbon::createFromTime(14, 30, 0),
            'end_time' =>Carbon::createFromTime(15, 30, 0),
            'total_time'=>'3600',
            'created_at' => Carbon::create(2023, 8, 18, 15, 35, 0),
            'updated_at' =>Carbon::create(2023, 8, 18, 15, 35, 0),  
        ];
        DB::table('rests')->insert($param);

        $param = [
            'attendance_id'=>'10',
            'start_time' => Carbon::createFromTime(13, 0, 0),
            'end_time' =>Carbon::createFromTime(14, 0, 0),
            'total_time'=>'3600',
            'created_at' => Carbon::create(2023, 8, 18, 14, 5, 0),
            'updated_at' =>Carbon::create(2023, 8, 18, 14, 5, 0),  
        ];
        DB::table('rests')->insert($param);
        

    }
    
}
