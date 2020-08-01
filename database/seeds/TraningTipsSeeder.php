<?php

use Illuminate\Database\Seeder;

class TraningTipsSeeder extends Seeder
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
                'thumbnail' => 'https://livedemo00.template-help.com/wt_55156/images/page-5_img01.jpg',
                'description' => 'Hunting Dog Training 101: Basic Tips for Training Hunting Dogs',
                'detail' => 'Nunc vestibulum massa risus, eu vulputate enim lobortis et. In semper, dui sed eleife.'
            ],
            [
                'id' => 2,
                'thumbnail' => 'https://livedemo00.template-help.com/wt_55156/images/page-5_img02.jpg',
                'description' => 'How To Keep Your Dog off Furniture in the House',
                'detail' => 'How To Train Your Dog to Walk on a Leash... Without Pulling!'
            ],
            [
                'id' => 3,
                'thumbnail' => 'https://livedemo00.template-help.com/wt_55156/images/page-5_img03.jpg',
                'descriptiom' => 'How To Train Your Dog to Walk on a Leash... Without Pulling!',
                'detail' => 'Bibendum augue nibh nec sapien. Morbi malesuada dolor placerat lacus fringilla.'
            ],
            [
                'id' => 4,
                'thumbnail' => 'https://mossyoak-cezjaqp1wr.netdna-ssl.com/sites/default/files/inline-images/dog-with-duck.jpg',
                'description' => 'Hunting Dog Training 101: Basic Tips for Training Hunting Dogs',
                'detail' => 'Nunc vestibulum massa risus, eu vulputate enim lobortis et. In semper, dui sed eleife.'
            ],
            [
                'id' => 5,
                'thumbnail' => 'https://cdn.shopify.com/s/files/1/0267/2515/4894/t/3/assets/description_image_How_To_Keep_Your_Dog_Off_Furniture_1.jpg?88',
                'description' => 'How To Keep Your Dog off Furniture in the House',
                'detail' => 'How To Train Your Dog to Walk on a Leash... Without Pulling!'
            ],
            [
                'id' => 6,
                'thumbnail' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSDGillfy1V3KQJUSilIUBIohlRwdBOiMP0aQ&usqp=CAU',
                'descriptiom' => 'How To Train Your Dog to Walk on a Leash... Without Pulling!',
                'detail' => 'Bibendum augue nibh nec sapien. Morbi malesuada dolor placerat lacus fringilla.'
            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
