<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class BreedsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('breeds')->truncate();
        DB::table('breeds')->insert([
            [
                'id'=>1,
                'name'=>'Chó săn',
                'description'=>'Pug là giống chó mặt xệ nổi tiếng xuất hiện khá lâu đời từ Trung Quốc. Được mang đến châu Âu và bắt đầu phát triển rộng rãi vào thế kỷ 16. Chúng trở thành thú cưng rất được yêu thích trong Hoàng gia, đặc biệt là ở Anh và Hà Lan.
                Năm 1885, chó Pug được Hiệp hội AKC chính thức công nhận là một giống chó riêng. Từ thế kỷ 19 cho đến nay, dòng chó quý tộc này ngày càng phổ biến, được xếp vào top những giống chó yêu chuộng nhất thế giới.',
                'detail'=>'Khuôn mặt biểu cảm độc đáo với rất nhiều nếp nhăn của loài chó này khiến những người không yêu thích chó mèo cũng phải ấn tượng ngay trong lần đầu tiên tiếp xúc. Chúng được xếp vào Top 1 giống chó cảnh có khuôn mặt xệ nhất trong tất cả các giống chó mặt xệ.
                Chó Pug sống tình cảm, gần gũi và thích quấn quýt chủ. Chúng yêu thích trẻ em, sống hòa đồng với mọi người và các loài vật nuôi khác..
                Chó Pug cực kỳ thông minh và lanh lợi. Bạn sẽ nhận thấy điều đó trong quá trình huấn luyện giống chó này. Pug nhận thức nhanh, ham học hỏi và có khả năng hoàn thành các bài tập huấn luyện một cách dễ dàng.
                Dòng chó này cực kì thông minh, có phần ranh mãnh & “đanh đá” dù chúng chỉ có kích thước khiêm tốn. Chúng luôn vui vẻ, ồn ào và đặc biệt hiếu động. Đó là lý do chó Pug trở thành người bạn lý tưởng khiến cuộc sống của mọi gia đình trở nên sôi động hơn.',
                'thumbnail'=>'https://azpet.com.vn/wp-content/uploads/2019/01/cho-pug-mat-xe-dang-yeu.jpg',
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>2,
                'name'=>'Chó cảnh',
                'description'=>'Chó Poodle được biết đến ở Tây Âu vào khoảng 400 năm trước và chúng chính là hậu duệ của các giống chó như French Water Dog, Hungarian Water Hound và Barbet. Ngày nay, con người đã lai tạo giống chó săn vịt này thành một hình tượng quý tộc và xinh xắn, trở thành chú chó được nhiều người yêu thích.',
                'detail'=>'Chó Poodle (hay chó săn vịt) là giống chó chuyên dùng để săn các loại thủy cầm, chủ yếu là vịt. Chúng được biết đến trên khắp Tây Âu vào khoảng 400 năm trước, là hậu duệ của các giống chó French Water Dog, Hungarian Water Hound và Barbet. Cái tên “Poodle” xuất phát từ “Pudel” trong tiếng Đức, nghĩa là “thợ lặn”.
                Ngày nay, giống chó lội nước này được lai tạo thành chó cảnh với hình tượng quý tộc, xinh xắn. Chúng được nuôi trong nhiều gia đình và rất được yêu thích trong giới thú cưng trên toàn thế giới.
                Dù là người già, trẻ em hay thậm chí là những người bận rộn cả ngày vẫn có thể nuôi được giống chó này. Tính cách ngoan ngoãn, dễ bảo – Poodle có thể hòa hợp, chơi với tất cả mọi thành viên trong gia đình. Đặc biệt, Poodle không kén ăn – Chúng có thể ăn được hầu hết các loại thức ăn như: Cơm, cháo, thức ăn hạt, sữa, bánh snack…
                Điểm thu hút nhất ở Poodle chính là ngoại hình. Giống chó này có khả năng “đánh gục” bất cứ ai ở ngay lần đầu tiếp xúc bởi vẻ ngoài đáng yêu của mình. Đặc biệt sau khi được Spa sang chảnh, chúng lại càng toát ra sức hút “quý tộc”. Với dáng vẻ xinh đẹp vượt trội, Poodle ngày càng được ưa chuộng, nuôi thịnh hành trên toàn Thế Giới.
                Poodle được xếp hạng là giống chó thông minh thứ 2 thế giới (Sau Border Collie). Chúng ham học hỏi và có khả năng bắt chước hành vi rất nhanh. Chúng rất dễ huấn luyện và thích tham gia các hoạt động mang tính thử thách như săn bắt, tìm kiếm, diễn xiếc.',
                'thumbnail'=>'https://azpet.com.vn/wp-content/uploads/2019/07/cho-poodle-thong-minh-thu-hai-the-gioi.jpg',
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>3,
                'name'=>'Chó nghiệp vụ',
                'description'=>'Chó Beagle xuất hiện cách đây từ khoảng 2400 năm về trước và đó là kết quả của sự lai tạo giữa chó bản địa Anh và chó săn thỏ Talbot. Khoảng thế kỷ XIX, Beagle du nhập đến Anh Quốc và dần trở nên phổ biến khắp châu Âu.',
                'detail'=>'Chó Beagle là giống chó săn cỡ nhỏ được rất nhiều người yêu thích trên toàn thế giới. Chúng có thể vừa trông nhà, vừa làm bạn, chơi đùa được với trẻ nhỏ trong gia đình. Nếu bạn đang tìm kiếm một người bạn đồng hành đáng yêu, thân thiện nhưng không kém phần sôi động thì Beagle chính là lựa chọn tuyệt vời dành cho bạn.
                Chó Beagle xuất hiện cách đây khoảng 2,400 năm trước (kết quả của sự lai tạo giữa giống chó săn thỏ Talbot và chó bản địa ở Anh). Ban đầu chúng được nuôi nhằm mục đích đánh hơi, săn thỏ. Cái tên Beagle (be’geule) bắt nguồn từ những tiếng reo hú của chúng khi đi săn.
Đầu thế kỷ 19, loài chó này được du nhập đến Anh Quốc và dần trở nên phổ biến trên toàn Châu Âu. Hiện tại, chó Beagle đã có mặt tại nhiều quốc gia trên thế giới, trở thành một trong những giống chó cảnh được mọi người yêu thích nhất hiện nay.
Beagle là loài chó hiếu động và luôn tràn đầy năng lượng. Chúng rất sôi động, dễ gần với con người và đặc biệt yêu thích trẻ nhỏ. Tuy nhiên, do bản năng thích săn mồi nên Beagle có thể làm hại tới các vật nuôi nhỏ khác trong nhà như: Mèo, thỏ, chuột hamster…',
                'thumbnail'=>'https://azpet.com.vn/wp-content/uploads/2019/07/cho-beagle-11-768x513.png',
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')

            ],

        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
