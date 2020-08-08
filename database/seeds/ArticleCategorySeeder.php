<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ArticleCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('article_categories')->truncate();
        DB::table('article_categories')->insert([
            [
                'id' => 1,
                'name' => 'Gặp gỡ chú chó siêu yêu chơi thân với tất cả bươm bướm trong vườn',
                'thumbnail'=>'photo-2-1596014225838608326699_jk9lnf,photo-3-1596014225838642370549_asvog9',
                'description'=>'Chú khuyển săn vịt Nova Scotia đáng yêu dưới đây tên là Milo.

Theo lời chủ thì Milo là "1 gã khổng lồ nhẹ nhàng" vì toàn chơi bời với bươm bướm trong vườn.

Mới đây, video kiên nhẫn ngồi yên để bướm đậu lên đầu đã thu hút tới 2,2 triệu lượt xem, 230.000 like và 50.000 re-tweet.

Cô chủ Jennifer Bennett nói với B.P rằng: "Trước Milo, tôi từng nuôi chú chó khác tên là Boden. Ít ai biết rằng Milo chính là cháu của Boden".

"Milo rất đáng yêu, tự tin, yêu thiên nhiên và thích lên rừng xuống biển với cả gia đình".

Ngoài chơi với bướm, Milo cũng kết bạn với tụi gà trong vườn."Điều khiến tôi tự hào nhất chính là tình cảm, sự quan tâm mà Milo dành cho mọi người. Nếu cho Milo ăn, chú sẽ ăn một nửa rồi thơm bạn sau đó mới ăn tiếp".

Thậm chí, việc Milo đối xử nhẹ nhàng với cả trăm con bướm là hoàn toàn tự nhiên, không do ai dạy bảo cả.Trên thực tế, giống chó săn vịt Nova Scotia có kích thước khá lớn, tuổi thọ trung bình từ 10 - 14 năm. Chúng ưa vận động, bơi giỏi, thích leo núi và theo chủ đi săn bắn.',
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 2,
                'name' => 'Chó Pug',
                'thumbnail'=>'',
                'description'=>'',
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 3,
                'name' => 'Chó Beagle',
                'thumbnail'=>'',
                'description'=>'',
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 4,
                'name' => 'Chó Chihuahua',
                'thumbnail'=>'',
                'description'=>'',
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 5,
                'name' => 'Chó Bully',
                'thumbnail'=>'',
                'description'=>'',
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s')
            ], [
                'id' => 6,
                'name' => 'Chó Corgi',
                'thumbnail'=>'',
                'description'=>'',
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 7,
                'name' => 'Chó Doberman',
                'thumbnail'=>'',
                'description'=>'',
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 8,
                'name' => 'Chó Ngao Tây Tạng',
                'thumbnail'=>'',
                'description'=>'',
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 9,
                'name' => 'Chó Pitbull',
                'thumbnail'=>'',
                'description'=>'',
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 10,
                'name' => 'Chó Yorkshire',
                'thumbnail'=>'',
                'description'=>'',
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s')
            ],

        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
