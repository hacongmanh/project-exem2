<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class TimelineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('timelines')->truncate();
        DB::table('timelines')->insert([

            [
                'id'=> 1,
                'dog_id'=>1,
                'type'=>'Chó qua huấn luyện',
                'created_by'=>'1',
                'content'=>'Được huấn luyện bài bản từ nhỏ, huấn luyện từ các lệnh cơ bản như: lệnh ngồi, lệnh đứng, lệnh nằm, lệnh yên, lệnh bắt tay và một số lệnh khác....',
                'links'=>'',
                'video'=>'',
                'status'=>0,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=> 2,
                'dog_id'=>2,
                'type'=>'Chó cảnh',
                'created_by'=>'2',
                'content'=>'Rất nghe lời, ngoan ngoãn và đã qua quá trình được đào tạo',
                'links'=>'',
                'video'=>'',
                'status'=>1,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=> 3,
                'dog_id'=>3,
                'type'=>'Chó chông nhà',
                'created_by'=>'3',
                'content'=>'Tính cách cẩn thận, thân thiện hòa nhã với các chó và loài vật khác vì đã được bảo ban dạy dỗ',
                'links'=>'',
                'video'=>'',
                'status'=>0,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=> 4,
                'dog_id'=>4,
                'type'=>'Chó chưa qua huấn luyện',
                'created_by'=>'4',
                'content'=>'Tính cách cẩn thận, thân thiện hòa nhã với các chó và loài vật khác vì đã được bảo ban dạy dỗ',
                'links'=>'',
                'video'=>'',
                'status'=>1,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=> 5,
                'dog_id'=>5,
                'type'=>'Chó cảnh',
                'created_by'=>'5',
                'content'=>'Tính cách cẩn thận, thân thiện hòa nhã với các chó và loài vật khác vì đã được bảo ban dạy dỗ',
                'links'=>'',
                'video'=>'',
                'status'=>0,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=> 6,
                'dog_id'=>6,
                'type'=>'Chó con',
                'created_by'=>'6',
                'content'=>'Tính cách cẩn thận, thân thiện hòa nhã với các chó và loài vật khác vì đã được bảo ban dạy dỗ',
                'links'=>'',
                'video'=>'',
                'status'=>1,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=> 7,
                'dog_id'=>7,
                'type'=>'Chó đặc vụ',
                'created_by'=>'7',
                'content'=>'Khi tức giận có thể cắn đồ dùng và sủa khi gặp người lạ.',
                'links'=>'',
                'video'=>'',
                'status'=>0,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=> 8,
                'dog_id'=>8,
                'type'=>'Chó giống ',
                'created_by'=>'8',
                'content'=>'Khi tức giận có thể cắn đồ dùng và sủa khi gặp người lạ.',
                'links'=>'',
                'video'=>'',
                'status'=>1,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=> 9,
                'dog_id'=>9,
                'type'=>'chó con ',
                'created_by'=>'9',
                'content'=>'Đáng yêu dễ gần. Đặc biệt ít tỏ ra hung dữ khi k có lệnh của chủ nhân',
                'links'=>'',
                'video'=>'',
                'status'=>0,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=> 10,
                'dog_id'=>10,
                'type'=>'chó đã qua đào tạo',
                'created_by'=>'10',
                'links'=>'',
                'content'=>'Đáng yêu dễ gần. Đặc biệt ít tỏ ra hung dữ khi k có lệnh của chủ nhân',
                'video'=>'',
                'status'=>1,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],

        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
