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
        $salt1 = substr(sha1(rand()), 0, 7);
        $salt2 = substr(sha1(rand()), 0, 7);
        $salt3 = substr(sha1(rand()), 0, 7);
        $salt4 = substr(sha1(rand()), 0, 7);
        $salt5 = substr(sha1(rand()), 0, 7);
        $salt6 = substr(sha1(rand()), 0, 7);
        if (env('DB_CONNECTION') == 'mysql') {
            \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('accounts')->truncate();
        DB::table('accounts')->insert([
            [
                'id' => 1,
                'user_name' => 'langioxanh1',
                'password_hash' => md5('trangtran'. $salt1 ),
                'email' => 'langioxanh@gmail.com',
                'full_name' => 'làn gió xanh',
                'phone' => '0314654747',
                'address' => 'Thanh xuân',
                'thumbnail'=>'',
                'role' => '1',
                'status'=>2,
                'salt' => $salt1,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 2,
                'user_name' => 'trinhhoanghieu',
                'password_hash' => md5('hoanghuy'. $salt2 ),
                'email' => 'hieu@gmail.com',
                'full_name' => 'trịnh hoàng hiếu',
                'phone' => '031466565',
                'thumbnail'=>'',
                'address' => 'Thanh xuân',
                'role' => '1',
                'status'=>2,
                'salt' => $salt2,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 3,
                'user_name' => 'admin',
                'password_hash' => md5('hathanh'. $salt3 ),
                'email' => 'admin@gmail.com',
                'full_name' => 'admin',
                'phone' => '099999999',
                'thumbnail'=>'',
                'address' => 'Singgapo',
                'role' => '2',
                'status'=>2,
                'salt' => $salt3,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 4,
                'user_name' => 'vuonghathanh',
                'password_hash' => md5('congmanh'. $salt4 ),
                'email' => 'thanh@gmail.com',
                'full_name' => 'Vương hà thanh',
                'phone' => '0565147552',
                'thumbnail'=>'',
                'address' => 'Long biên',
                'role' => '1',
                'status'=>2,
                'salt' => $salt4,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 5,
                'user_name' => 'langioxanh2',
                'password_hash' => md5('haituan'. $salt5 ),
                'email' => 'langioxanh2@gmail.com',
                'full_name' => 'làn gió xanh',
                'phone' => '0369811474',
                'thumbnail'=>'',
                'address' => 'Nam từ liêm',
                'role' => '1',
                'status'=>2,
                'salt' => $salt5,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 6,
                'user_name' => 'langioxanh3',
                'password_hash' => md5('adminvip'. $salt6 ),
                'email' => 'langioxanh3@gmail.com',
                'full_name' => 'làn gió xanh',
                'phone' => '021489563',
                'thumbnail'=>'',
                'address' => ' Hoàn kiếm',
                'role' => '1',
                'status'=>2,
                'salt' => $salt6,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s')
            ],

        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
