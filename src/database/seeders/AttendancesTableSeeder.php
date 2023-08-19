<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class AttendancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $param=[
            'user_id'=>'1',
            'date' => Carbon::create(2023, 8, 15),
            'start_time' => Carbon::createFromTime(9, 0, 0),
            'end_time' =>Carbon::createFromTime(16, 0, 0),
            'breakTime'=>Carbon::createFromTime(0, 30, 0),
            'workingTime'=>Carbon::createFromTime(0, 6, 30),
            'created_at' => Carbon::create(2023, 8, 15,16,10,0),
            'updated_at' =>Carbon::create(2023, 8, 15,16,10,0),       
        ];
        DB::table('attendances')->insert($param);

        $param = [
            'user_id'=>'2',
            'date' => Carbon::create(2023, 8, 17),
            'start_time' => Carbon::createFromTime(9, 0, 0),
            'end_time' =>Carbon::createFromTime(18, 0, 0),
            'breakTime'=>Carbon::createFromTime(1, 0, 0),
            'workingTime'=>Carbon::createFromTime(0, 8, 0),
            'created_at' => Carbon::create(2023, 8, 17,18,10,0),
            'updated_at' =>Carbon::create(2023, 8, 17,18,10,0),  
        ];
        DB::table('attendances')->insert($param);

        $param = [
            'user_id'=>'3',
            'date' => Carbon::create(2023, 8, 17),
            'start_time' => Carbon::createFromTime(9, 0, 0),
            'end_time' =>Carbon::createFromTime(18, 0, 0),
            'breakTime'=>Carbon::createFromTime(2, 0, 0),
            'workingTime'=>Carbon::createFromTime(0, 7, 0),
            'created_at' => Carbon::create(2023, 8, 17,18,10,0),
            'updated_at' =>Carbon::create(2023, 8, 17,18,10,0),  
        ];
        DB::table('attendances')->insert($param);

        $param = [
            'user_id'=>'4',
            'date' => Carbon::create(2023, 8, 17),
            'start_time' => Carbon::createFromTime(9, 0, 0),
            'end_time' =>Carbon::createFromTime(17, 0, 0),
            'breakTime'=>Carbon::createFromTime(1, 0, 0),
            'workingTime'=>Carbon::createFromTime(0, 7, 0),
            'created_at' => Carbon::create(2023, 8, 17,17,10,0),
            'updated_at' =>Carbon::create(2023, 8, 17,17,10,0),  
        ];
        DB::table('attendances')->insert($param);

        $param = [
            'user_id'=>'5',
            'date' => Carbon::create(2023, 8, 17),
            'start_time' => Carbon::createFromTime(9, 0, 0),
            'end_time' =>Carbon::createFromTime(13, 0, 0),
            'breakTime'=>Carbon::createFromTime(0, 0, 0),
            'workingTime'=>Carbon::createFromTime(0, 4, 0),
            'created_at' => Carbon::create(2023, 8, 17, 13, 10, 0),
            'updated_at' =>Carbon::create(2023, 8, 17, 13, 10, 0),  
        ];
        DB::table('attendances')->insert($param);





    

    }
}
