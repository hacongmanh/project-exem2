<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('orders')->truncate();
        DB::table('orders')->insert([
            [
                'id'=>1,
                'total'=>200000,
                'status'=>'Chưa duyệt',
                'ship_name'=>'Nguyễn thị thảo',
                'ship_phone'=>'025874188',
                'ship_address'=>'156 quang trung đống đa',
                'ship_email'=>'thao@gmail.com',
                'notes'=>'ship trước 10h sáng tối',
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>2,
                'total'=>200000,
                'status'=>'Chưa duyệt',
                'ship_name'=>'Trịnh minh hiếu ',
                'ship_phone'=>'018511512',
                'ship_address'=>'định công hoàng mai',
                'ship_email'=>'hieu@gmail.com',
                'notes'=>'Cho mình thêm 1 lồng chó',
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>3,
                'total'=>200000,
                'status'=>'Chưa duyệt',
                'ship_name'=>'Nguyễn thị thu',
                'ship_phone'=>'018511512',
                'ship_address'=>'156 tân mai hoàng mai hà nội',
                'ship_email'=>'thu1@gmail.com',
                'notes'=>'ship trước 10h tối',
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>4,
                'total'=>200000,
                'status'=>'Chưa duyệt',
                'ship_name'=>'Nguyễn thị thu',
                'ship_phone'=>'018511512',
                'ship_address'=>'156 tân mai hoàng mai hà nội',
                'ship_email'=>'thu1@gmail.com',
                'notes'=>'ship trước 10h tối',
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>5,
                'total'=>200000,
                'status'=>'Chưa duyệt',
                'ship_name'=>'Nguyễn thị thu',
                'ship_phone'=>'018511512',
                'ship_address'=>'156 tân mai hoàng mai hà nội',
                'ship_email'=>'thu1@gmail.com',
                'notes'=>'ship trước 10h tối',
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>6,
                'total'=>200000,
                'status'=>'Chưa duyệt',
                'ship_name'=>'Nguyễn thị thu',
                'ship_phone'=>'018511512',
                'ship_address'=>'156 tân mai hoàng mai hà nội',
                'ship_email'=>'thu1@gmail.com',
                'notes'=>'ship trước 10h tối',
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],


        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }

}
