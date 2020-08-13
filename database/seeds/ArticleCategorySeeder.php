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
                'name' => 'Chó Pug',
                'thumbnail'=>'cho-pug-mat-xe_gcno1p,ngoai-hinh-cho-pug_fbudvh',
                'description'=>'Pug, hay thường được gọi là chó mặt xệ, là giống chó thuộc nhóm chó cảnh có nguồn gốc từ Trung Quốc, chúng có một khuôn mặt nhăn, mõm ngắn, và đuôi xoăn. Giống chó này có bộ lông mịn, bóng, có nhiều màu sắc nhưng phổ biến nhất là màu đen và nâu vàng. Cơ thể của Pug nhỏ gọn hình vuông với các cơ bắp rất phát triển.',
                'status'=>1,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 2,
                'name' => 'Chó Poodle',
                'thumbnail'=>'cho-poodle-teacup_hdr9ps,cho-poodle-thong-minh-thu-hai-the-gioi_efv5yh',
                'description'=>'Chó săn vịt là một giống chó săn dùng để săn các loại thủy cầm trong đó chủ yếu là vịt. Ngày nay giống chó này được lai tạo để trở thành dòng chó cảnh với hình tượng là là những quý cô xinh xắn, yêu kiều.',
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 3,
                'name' => 'Chó Beagle',
                'thumbnail'=>'cho-beagle-1_frtb2x,cho-beagle_tdy3dz',
                'description'=>'Chó săn thỏ là một giống chó nhỏ trong các chó săn và chuyên dùng để săn thỏ, chúng dễ nhận biết bởi bộ lông tam thể mềm mượt đặc trưng. Chúng rất dễ nuôi, thân thiện và đáng yêu với con người, có thể vừa trông nhà, vừa chơi đùa cùng trẻ con trong nhà.',
                'status' => 0,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 4,
                'name' => 'Chó Chihuahua',
                'thumbnail'=>'Teacup-Chihuahua_ut5ds7,dac-diem-cho-chihuahua_h6wjda',
                'description'=>'Chó Chihuahua là một trong những giống chó nuôi nhỏ nhất trên thế giới. Cái tên Chihuahua được đặt theo tên của bang Chihuahua ở México. Giống chó này rất thông minh.',
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 5,
                'name' => 'Chó Bully',
                'thumbnail'=>'cho-bully_pruhgc,tj0s4r51bfgpmxq3fjdd',
                'description'=>'Chó Bully Mỹ hay chó Bully là một giống chó có nguồn gốc từ Mỹ, chúng là hậu duệ của chó American Pit Bull Terrier, American Staffordshire Terrier và Chó bò Mỹ.',
                'status' => 0,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s')
            ], [
                'id' => 6,
                'name' => 'Chó Corgi',
                'thumbnail'=>'cho-corgi-1_dg6v7q,cho-corgi-an-theo-tung-giai-doan_zvtcyd',
                'description'=>'Chó Corgi xứ Wales cổ là loại chó có xuất xứ từ Anh quốc ở xứ Wales, chúng thuộc giống chó chăn gia súc và chó săn đuổi, chúng đặc biệt thích chặn các con chuột xâm nhập lãnh địa để chơi trò đuổi bắt chuột.',
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 7,
                'name' => 'Chó Doberman',
                'thumbnail'=>'cho-doberman-1_szmv5j,cho-doberman_dhkkhg',
                'description'=>'Doberman là tên của một giống chó có thể nuôi để giữ nhà, canh gác hoặc làm nghiệp vụ. Tên gọi đầy đủ và chính xác của nó là Dobermann Pinscher. Dobermann là một trong số ít những loại chó được đặt theo tên người.',
                'status' => 0,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 8,
                'name' => 'Chó Ngao Tây Tạng',
                'thumbnail'=>'cho-ngao-tay-tang-1_riumgd,photo1520995339066-15209953390661546496817_jm1wtz',
                'description'=>'Chó ngao Tây Tạng hay còn gọi là Ngao Tạng, tên tiếng Anh là Tibetan Mastiff, là một giống chó Ngao được người Tây Tạng nuôi và huấn luyện để bảo vệ gia súc và bảo vệ cuộc sống của những người dân bản địa trên vùng núi Himalaya khỏi những con thú hoang như chó sói, hổ, gấu và để canh gác các tu viện ở Tây Tạng.',
                'status' => 0,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 9,
                'name' => 'Chó Pitbull',
                'thumbnail'=>'khuon-mat-cho-pitbull-1_oze1ga,giong-cho-pitbull-13_tsxyu4',
                'description'=>'Chó sục Pit Bull Mỹ hay còn gọi với những cái tên là American Pit Bull Terrier hay Pit Bull tiếng Anh gọi là chó Pit Bull Terrier Mỹ. là một giống chó có nguồn gốc từ Mỹ. Đây là một giống chó có kích cỡ trung bình và có nguồn gốc từ dòng chó chọi.',
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 10,
                'name' => 'Chó Yorkshire',
                'thumbnail'=>'cho-yorkshire-terrier_pwtfeh,yorkshire_dog3_0_qman00',
                'description'=>'Chó sục Yorkshire có nguồn gốc từ nước Anh, chúng là giống chó nhỏ bé có bộ lông dáng óng mượt, là giống chó cảnh được yêu chuộng tại các nước Châu Âu.Đặc điểm nổi bật của giống chó này đó chính là kích thước nhỏ nhắn, cân nặng của chúng rơi vào khoảng 3,2kg và chiều cao khoảng 23 cm. Bộ lông phát triển, dài và khá óng mượt.Giống chó cảnh này bắt chuột rất giỏi, chúng rất tinh nhanh và nhạy bén. Tính cách thân thiện hòa động và gần gũi với mọi người.',
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s')
            ],

        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
