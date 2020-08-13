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
                'type'=>'Chó cảnh',
                'created_by'=>1,
                'content'=>'chó rất thông minh',
                'links'=>'cho-pug-mat-xe_gcno1p,ngoai-hinh-cho-pug_fbudvh',
                'video'=>'https://www.youtube.com/watch?v=goh4OHteuLU',
                'status'=>0,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=> 2,
                'dog_id'=>2,
                'type'=>'Chó cảnh',
                'created_by'=>2,
                'content'=>'Rất hài lòng khi mua từ shop',
                'links'=>'cho-poodle-teacup_hdr9ps,cho-poodle-thong-minh-thu-hai-the-gioi_efv5yh',
                'video'=>'https://www.youtube.com/watch?v=vXuH8eC_-EM',
                'status'=>1,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=> 3,
                'dog_id'=>3,
                'type'=>'Chó săn',
                'created_by'=>3,
                'content'=>'Chó rất xinh',
                'links'=>'cho-beagle-1_frtb2x,cho-beagle_tdy3dz',
                'video'=>'https://www.youtube.com/watch?v=c4Xeya5yOaA',
                'status'=>0,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=> 4,
                'dog_id'=>4,
                'type'=>'Chó cảnh',
                'created_by'=>4,
                'content'=>'Chó mua về rất ngoan',
                'links'=>'Teacup-Chihuahua_ut5ds7,dac-diem-cho-chihuahua_h6wjda',
                'video'=>'https://www.youtube.com/watch?v=LYQnAiP52bs',
                'status'=>1,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=> 5,
                'dog_id'=>5,
                'type'=>'Chó huấn luyện',
                'created_by'=>5,
                'content'=>'Chó rất đẹp',
                'links'=>'cho-bully_pruhgc,tj0s4r51bfgpmxq3fjdd',
                'video'=>'https://www.youtube.com/watch?v=i3y6-cUuD30',
                'status'=>0,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=> 6,
                'dog_id'=>6,
                'type'=>'Chó cảnh',
                'created_by'=>6,
                'content'=>'Chó rất ngoan',
                'links'=>'cho-corgi-1_dg6v7q,cho-corgi-an-theo-tung-giai-doan_zvtcyd',
                'video'=>'https://www.youtube.com/watch?v=YGNzBEqy9DM',
                'status'=>1,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=> 7,
                'dog_id'=>7,
                'type'=>'Chó săn',
                'created_by'=>7,
                'content'=>'Chó mua về rất nghe lời',
                'links'=>'cho-doberman-1_szmv5j,cho-doberman_dhkkhg',
                'video'=>'https://www.youtube.com/watch?v=vkvIXLwa5fg',
                'status'=>1,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=> 8,
                'dog_id'=>8,
                'type'=>'Chó săn',
                'created_by'=>8,
                'content'=>'Chó rất thông minh',
                'links'=>'cho-ngao-tay-tang-1_riumgd,photo1520995339066-15209953390661546496817_jm1wtz',
                'video'=>'https://www.youtube.com/watch?v=YZh3t9gyNhU',
                'status'=>1,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=> 9,
                'dog_id'=>9,
                'type'=>'Chó qua huấn luyện',
                'created_by'=>9,
                'content'=>'chó rất vâng lời',
                'links'=>'khuon-mat-cho-pitbull-1_oze1ga,giong-cho-pitbull-13_tsxyu4',
                'video'=>'https://www.youtube.com/watch?v=l5ahKD6MnE4',
                'status'=>1,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=> 10,
                'dog_id'=>10,
                'type'=>'Chó cảnh',
                'created_by'=>10,
                'content'=>'Chó săn rất giỏi',
                'links'=>'cho-yorkshire-terrier_pwtfeh,yorkshire_dog3_0_qman00',
                'video'=>'https://www.youtube.com/watch?v=DgYb3YX5hsk',
                'status'=>1,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],

        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
