<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('comments')->truncate();
        DB::table('comments')->insert([

            [
                'id'=>1,
                'comment'=> 'Chó đang lớn lên từng ngày tôi rất yêu quý nó',
                'timeline_id'=>1,
                'create_by'=>1,
                'status'=>0,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>2,
                'comment'=> 'Chó đang lớn lên từng ngày tôi rất yêu quý nó',
                'timeline_id'=>2,
                'create_by'=>2,
                'status'=>1,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>3,
                'comment'=> 'Chó đang lớn lên từng ngày tôi rất yêu quý nó',
                'timeline_id'=>3,
                'create_by'=>3,
                'status'=>0,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>4,
                'comment'=> 'Chó đang lớn lên từng ngày tôi rất yêu quý nó',
                'timeline_id'=>4,
                'create_by'=>4,
                'status'=>1,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>5,
                'comment'=> 'Chó đang lớn lên từng ngày tôi rất yêu quý nó',
                'timeline_id'=>5,
                'create_by'=>5,
                'status'=>0,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>6,
                'comment'=> 'Chó đang lớn lên từng ngày tôi rất yêu quý nó',
                'timeline_id'=>6,
                'create_by'=>6,
                'status'=>1,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>7,
                'comment'=> 'Chó đang lớn lên từng ngày tôi rất yêu quý nó',
                'timeline_id'=>7,
                'create_by'=>7,
                'status'=>0,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>8,
                'comment'=> 'Chó đang lớn lên từng ngày tôi rất yêu quý nó',
                'timeline_id'=>8,
                'create_by'=>8,
                'status'=>1,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>9,
                'comment'=> 'Chó đang lớn lên từng ngày tôi rất yêu quý nó',
                'timeline_id'=>9,
                'create_by'=>9,
                'status'=>0,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>10,
                'comment'=> 'Chó đang lớn lên từng ngày tôi rất yêu quý nó',
                'timeline_id'=>10,
                'create_by'=>10,
                'status'=>1,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],

        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
