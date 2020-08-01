<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('accounts')->truncate();
        DB::table('accounts')->insert([
            [
                'id' => 1,
                'user_name' => 'langioxanh1',
                'password_hash' => 'langioxanh',
                'email' => 'langioxanh@gmail.com',
                'full_name' => 'làn gió xanh',
                'phone' => '0314654747',
                'address' => 'Thanh xuân',
                'thumbnail'=>'',
                'role' => '1',
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 2,
                'user_name' => 'trinhhoanghieu',
                'password_hash' => 'hieu123',
                'email' => 'hieu@gmail.com',
                'full_name' => 'trịnh hoàng hiếu',
                'phone' => '031466565',
                'thumbnail'=>'',
                'address' => 'Thanh xuân',
                'role' => '1',
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 3,
                'user_name' => 'admin',
                'password_hash' => 'admin',
                'email' => 'admin@gmail.com',
                'full_name' => 'admin',
                'phone' => '099999999',
                'thumbnail'=>'',
                'address' => 'Singgapo',
                'role' => '2',
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 4,
                'user_name' => 'vuonghathanh',
                'password_hash' => 'tranthutrang',
                'email' => 'thanh@gmail.com',
                'full_name' => 'Vương hà thanh',
                'phone' => '0565147552',
                'thumbnail'=>'',
                'address' => 'Long biên',
                'role' => '1',
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 5,
                'user_name' => 'langioxanh2',
                'password_hash' => 'langioxanh2',
                'email' => 'langioxanh2@gmail.com',
                'full_name' => 'làn gió xanh',
                'phone' => '0369811474',
                'thumbnail'=>'',
                'address' => 'Nam từ liêm',
                'role' => '1',
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 6,
                'user_name' => 'langioxanh3',
                'password_hash' => 'langioxanh3',
                'email' => 'langioxanh3@gmail.com',
                'full_name' => 'làn gió xanh',
                'phone' => '021489563',
                'thumbnail'=>'',
                'address' => ' Hoàn kiếm',
                'role' => '1',
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 7,
                'user_name' => 'nguyeng123',
                'password_hash' => 'abcsass',
                'email' => 'nguyen@gmail.com',
                'full_name' => 'Triệu thạnh nguyên',
                'phone' => '035985625',
                'thumbnail'=>'',
                'address' => ' Đống đa',
                'role' => '1',
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 8,
                'user_name' => 'ninhto111',
                'password_hash' => 'toninh123',
                'email' => 'ninh@gmail.com',
                'full_name' => 'tô tuấn ninh',
                'phone' => '086899999',
                'thumbnail'=>'',
                'address' => 'Long biên ',
                'role' => '1',
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 9,
                'user_name' => 'Haituan123',
                'password_hash' => 'tuuaancut',
                'email' => 'tuan@gmail.com',
                'full_name' => 'Đỗ hải tuân',
                'phone' => '0236598541',
                'thumbnail'=>'',
                'address' => 'Mỹ',
                'role' => '1',
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 10,
                'user_name' => 'dung314241',
                'password_hash' => 'dungkhoa',
                'email' => 'dungyeukhoa@gmail.com',
                'full_name' => 'Doãn văn dũng',
                'phone' => '035414966',
                'thumbnail'=>'',
                'address' => 'Vinh',
                'role' => '1',
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s')
            ],

        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
