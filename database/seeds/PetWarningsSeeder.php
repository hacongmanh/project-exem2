<?php

use Illuminate\Database\Seeder;

class PetWarningsSeeder extends Seeder
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
                'thumbnail' => 'https://livedemo00.template-help.com/wt_55156/images/page-4_img01.jpg',
                'description' => 'Hunting Dog Training 101: Basic Tips for Training Hunting Dogs',
                'detail' => 'Nunc vestibulum massa risus, eu vulputate enim lobortis et. In semper, dui sed eleife.'
            ],
            [
                'id' => 2,
                'thumbnail' => 'https://livedemo00.template-help.com/wt_55156/images/page-4_img02.jpg',
                'description' => 'Nam dignissim odio et feugiat hendreri, vestibulum massa risus.',
                'detail' => 'Duis mollis lorem ac ipsum faucibus tincidunt. Donec eget dictum est. Aenean ut varius augue, vitae sollicitudin tellus. Pellentesque non metus sed libero fringilla egestas ultrices nec.'
            ],
            [
                'id' => 3,
                'thumbnail' => 'https://livedemo00.template-help.com/wt_55156/images/page-4_img02.jpg',
                'descriptiom' => 'Duis mollis lorem ac ipsum faucibus nec eget dictum est.',
                'detail' => 'Aliquam tempor ultricies sem vulputate ullamcorper. Aenean tristique turpis quis est molestie consectetur. In tristique tincidunt lacus. Nulla mi urna, luctus sed eget, hendrerit eu nisi.'
            ],
            [
                'id' => 4,
                'thumbnail' => 'https://livedemo00.template-help.com/wt_55156/images/page-4_img03.jpg',
                'description' => 'Morbi malesuada dolor placerat lacus fringilla mollis.',
                'detail' => 'Quisque nec eros pretium, facilisis risus in, sodales quam. Donec et mattis velit. Vivamus maximus diam sed urna venenatis dictum. Etiam placerat venenatis eget pellentesque.'
            ],
//            [
//                'id' => 5,
//                'thumbnail' => 'https://cdn.shopify.com/s/files/1/0267/2515/4894/t/3/assets/description_image_How_To_Keep_Your_Dog_Off_Furniture_1.jpg?88',
//                'description' => 'How To Keep Your Dog off Furniture in the House',
//                'detail' => 'How To Train Your Dog to Walk on a Leash... Without Pulling!'
//            ],
//            [
//                'id' => 6,
//                'thumbnail' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSDGillfy1V3KQJUSilIUBIohlRwdBOiMP0aQ&usqp=CAU',
//                'descriptiom' => 'How To Train Your Dog to Walk on a Leash... Without Pulling!',
//                'detail' => 'Bibendum augue nibh nec sapien. Morbi malesuada dolor placerat lacus fringilla.'
//            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
