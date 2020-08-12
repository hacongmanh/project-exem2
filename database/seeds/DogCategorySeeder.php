<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class DogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('dog_categories')->truncate();
        DB::table('dog_categories')->insert([
            [
                'id'=>1,
                'thumbnail'=>'cho-samoyed_jqsskm',
                'name'=>'Chó Samoyed',
                'breedType'=>2,
                'status'=>1,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>2,
                'thumbnail'=>'cho-husky_jzowvm',
                'name'=>'Chó Husky',
                'breedType'=>2,
                'status'=>1,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>3,
                'thumbnail'=>'cho-alaska_ijzdbr',
                'name'=>' Chó Alaska',
                'breedType'=>2,
                'status'=>1,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>4,
                'thumbnail'=>'rottweiler-115971_idrtda',
                'name'=>'Rottweiler',
                'breedType'=>3,
                'status'=>1,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>5,
                'thumbnail'=>'cho-san-pharaoh-cho-san-ai-cap_tv2f29',
                'name'=>'Chó săn pharaoh',
                'breedType'=>1,
                'status'=>1,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>6,
                'thumbnail'=>'german-shepherd-89006_pgk81s',
                'name'=>'German Shepherd',
                'breedType'=>3,
                'status'=>1,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>7,
                'thumbnail'=>'cho-huan-luyen-Cocker-min_j2afwj',
                'name'=>'Cocker ',
                'breedType'=>3,
                'status'=>1,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>8,
                'thumbnail'=>'Cho-san-chuot-Valencia_uscuow',
                'name'=>'Valencia',
                'breedType'=>1,
                'status'=>1,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>9,
                'thumbnail'=>'cho-san-basset_fo6be6',
                'name'=>'basset hound',
                'breedType'=>1,
                'status'=>1,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>10,
                'thumbnail'=>'cho-poodle-59270_o6n1sl',
                'name'=>'Poodle',
                'breedType'=>2,
                'status'=>1,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],

                ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }

}
