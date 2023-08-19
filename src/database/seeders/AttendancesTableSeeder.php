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
            'date' => Carbon::create(2023, 8, 17),
            'start_time' => Carbon::createFromTime(9, 0, 0),
            'end_time' =>Carbon::createFromTime(16, 0, 0),
            'breakTime'=>Carbon::createFromTime(0, 30, 0),
            'workingTime'=>Carbon::createFromTime(6, 30, 0),
            'created_at' => Carbon::create(2023, 8, 17, 16, 10, 0),
            'updated_at' =>Carbon::create(2023, 8, 17, 16, 10, 0),       
        ];
        DB::table('attendances')->insert($param);

        $param = [
            'user_id'=>'2',
            'date' => Carbon::create(2023, 8, 17),
            'start_time' => Carbon::createFromTime(9, 0, 0),
            'end_time' =>Carbon::createFromTime(18, 0, 0),
            'breakTime'=>Carbon::createFromTime(1, 0, 0),
            'workingTime'=>Carbon::createFromTime(8, 0, 0),
            'created_at' => Carbon::create(2023, 8, 17, 18, 10, 0),
            'updated_at' =>Carbon::create(2023, 8, 17, 18, 10, 0),  
        ];
        DB::table('attendances')->insert($param);

        $param = [
            'user_id'=>'3',
            'date' => Carbon::create(2023, 8, 17),
            'start_time' => Carbon::createFromTime(9, 0, 0),
            'end_time' =>Carbon::createFromTime(18, 0, 0),
            'breakTime'=>Carbon::createFromTime(2, 0, 0),
            'workingTime'=>Carbon::createFromTime(7, 0, 0),
            'created_at' => Carbon::create(2023, 8, 17, 18, 10, 0),
            'updated_at' =>Carbon::create(2023, 8, 17, 18, 10, 0),  
        ];
        DB::table('attendances')->insert($param);

        $param = [
            'user_id'=>'4',
            'date' => Carbon::create(2023, 8, 17),
            'start_time' => Carbon::createFromTime(9, 0, 0),
            'end_time' =>Carbon::createFromTime(17, 0, 0),
            'breakTime'=>Carbon::createFromTime(1, 0, 0),
            'workingTime'=>Carbon::createFromTime(7, 0, 0),
            'created_at' => Carbon::create(2023, 8, 17, 17, 10, 0),
            'updated_at' =>Carbon::create(2023, 8, 17, 17, 10, 0),  
        ];
        DB::table('attendances')->insert($param);

        $param = [
            'user_id'=>'5',
            'date' => Carbon::create(2023, 8, 17),
            'start_time' => Carbon::createFromTime(9, 0, 0),
            'end_time' =>Carbon::createFromTime(13, 0, 0),
            'breakTime'=>Carbon::createFromTime(0, 0, 0),
            'workingTime'=>Carbon::createFromTime(4, 0, 0),
            'created_at' => Carbon::create(2023, 8, 17, 13, 10, 0),
            'updated_at' =>Carbon::create(2023, 8, 17, 13, 10, 0),  
        ];
        DB::table('attendances')->insert($param);

        $param = [
            'user_id'=>'6',
            'date' => Carbon::create(2023, 8, 17),
            'start_time' => Carbon::createFromTime(9, 0, 0),
            'end_time' =>Carbon::createFromTime(14, 0, 0),
            'breakTime'=>Carbon::createFromTime(0, 30, 0),
            'workingTime'=>Carbon::createFromTime(4, 30, 0),
            'created_at' => Carbon::create(2023, 8, 17, 14, 10, 0),
            'updated_at' =>Carbon::create(2023, 8, 17, 14, 10, 0),  
        ];
        DB::table('attendances')->insert($param);

        $param = [
            'user_id'=>'7',
            'date' => Carbon::create(2023, 8, 17),
            'start_time' => Carbon::createFromTime(9, 0, 0),
            'end_time' =>Carbon::createFromTime(20, 0, 0),
            'breakTime'=>Carbon::createFromTime(1, 0, 0),
            'workingTime'=>Carbon::createFromTime(12, 0, 0),
            'created_at' => Carbon::create(2023, 8, 17, 20, 10, 0),
            'updated_at' =>Carbon::create(2023, 8, 17, 20, 10, 0),  
        ];
        DB::table('attendances')->insert($param);

        $param = [
            'user_id'=>'8',
            'date' => Carbon::create(2023, 8, 18),
            'start_time' => Carbon::createFromTime(9, 0, 0),
            'end_time' =>Carbon::createFromTime(12, 30, 33),
            'breakTime'=>Carbon::createFromTime(0, 0, 0),
            'workingTime'=>Carbon::createFromTime(3, 30, 33),
            'created_at' => Carbon::create(2023, 8, 18, 12, 35, 0),
            'updated_at' =>Carbon::create(2023, 8, 18, 12, 35, 0),  
        ];
        DB::table('attendances')->insert($param);

        $param = [
            'user_id'=>'9',
            'date' => Carbon::create(2023, 8, 18),
            'start_time' => Carbon::createFromTime(9, 0, 0),
            'end_time' =>Carbon::createFromTime(18, 30, 0),
            'breakTime'=>Carbon::createFromTime(1, 0, 0),
            'workingTime'=>Carbon::createFromTime(8, 30, 0),
            'created_at' => Carbon::create(2023, 8, 18, 18, 35, 0),
            'updated_at' =>Carbon::create(2023, 8, 18, 18, 35, 0),  
        ];
        DB::table('attendances')->insert($param);

        $param = [
            'user_id'=>'10',
            'date' => Carbon::create(2023, 8, 18),
            'start_time' => Carbon::createFromTime(9, 0, 0),
            'end_time' =>Carbon::createFromTime(17, 0, 0),
            'breakTime'=>Carbon::createFromTime(1, 0, 0),
            'workingTime'=>Carbon::createFromTime(7, 0, 0),
            'created_at' => Carbon::create(2023, 8, 18, 17, 5, 0),
            'updated_at' =>Carbon::create(2023, 8, 18, 17, 5, 0),  
        ];
        DB::table('attendances')->insert($param);
    

    }
}
