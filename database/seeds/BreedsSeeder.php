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
                'name'=>'Chó Pug',
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
                'name'=>'Chó Poodle',
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
                'name'=>'Chó Beagle',
                'description'=>'Chó Beagle xuất hiện cách đây từ khoảng 2400 năm về trước và đó là kết quả của sự lai tạo giữa chó bản địa Anh và chó săn thỏ Talbot. Khoảng thế kỷ XIX, Beagle du nhập đến Anh Quốc và dần trở nên phổ biến khắp châu Âu.',
                'detail'=>'Chó Beagle là giống chó săn cỡ nhỏ được rất nhiều người yêu thích trên toàn thế giới. Chúng có thể vừa trông nhà, vừa làm bạn, chơi đùa được với trẻ nhỏ trong gia đình. Nếu bạn đang tìm kiếm một người bạn đồng hành đáng yêu, thân thiện nhưng không kém phần sôi động thì Beagle chính là lựa chọn tuyệt vời dành cho bạn.
                Chó Beagle xuất hiện cách đây khoảng 2,400 năm trước (kết quả của sự lai tạo giữa giống chó săn thỏ Talbot và chó bản địa ở Anh). Ban đầu chúng được nuôi nhằm mục đích đánh hơi, săn thỏ. Cái tên Beagle (be’geule) bắt nguồn từ những tiếng reo hú của chúng khi đi săn.

Đầu thế kỷ 19, loài chó này được du nhập đến Anh Quốc và dần trở nên phổ biến trên toàn Châu Âu. Hiện tại, chó Beagle đã có mặt tại nhiều quốc gia trên thế giới, trở thành một trong những giống chó cảnh được mọi người yêu thích nhất hiện nay.
Beagle là loài chó hiếu động và luôn tràn đầy năng lượng. Chúng rất sôi động, dễ gần với con người và đặc biệt yêu thích trẻ nhỏ. Tuy nhiên, do bản năng thích săn mồi nên Beagle có thể làm hại tới các vật nuôi nhỏ khác trong nhà như: Mèo, thỏ, chuột hamster…',
                'thumbnail'=>'https://azpet.com.vn/wp-content/uploads/2019/07/cho-beagle-11-768x513.png',
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>4,
                'name'=>' Chó Chihuahua',
                'description'=>'Chihuahua là chú chó nhỏ nhất trong mọi loài chó trên thế giới và cũng là giống chó lâu đời nhất ở châu Mỹ. Chú chó này có nguồn gốc từ Mexico nhưng lại được cả thế giới biết đến nhờ Trung Quốc. Tên của chúng được lấy từ tên một bang của Mexico, bang Chihuahuan, là nơi mà chú chó được tìm thấy.',
                'detail'=>'Chó Chihuahua là giống chó nhỏ bé nhất trên thế giới. Có lẽ bởi vì sự nhỏ nhắn có phần tinh nghịch và thông minh của mình mà giống chó này trở thành thú cưng được yêu thích trên thế giới. Và nếu bạn đang có ý định nuôi một chú Chihuahua thì tham khảo ngay bài viết dưới đây của chúng tôi để có cái nhìn rõ nhất và biết thêm những thông tin về chú chó nổi tiếng này
                Tên của chú chó Chihuahua được đặt theo tên của bang Chihuahua ở Mexico và đây cũng là giống chó lâu đời nhất ở Bắc Mỹ. Giống chó này được nhiều người yêu thích bởi sự nhỏ nhắn dễ thương và sự thông minh nhanh nhẹn của chúng.

                Đặc biệt, giống chó này còn khiến nhiều người tò mò bởi những sự thật không phải ai cũng biết về chúng như:
                Chihuahua là giống chó có thân hình nhỏ bé nhất thế giới: cân nặng của chúng chỉ đạt khoảng 0,5kg và có chiều cao dưới 23cm
                Chihuahua là giống chó lâu đời nhất ở Bắc Mỹ
                Bộ não của Chihuahua không hề nhỏ bé như thân hình của nó
                Chihuahua có bất kỳ màu lông nào cũng được
                Chihuahua từng là một con vật linh thiêng
                Chihuahua không thích làm thân với bất kỳ giống chó nào khác trừ đồng loại của mình
                Chihuahua là con vật chỉ trung thành với một chủ duy nhất
                Vào năm 1977 thì giống chó Chihuahua đã trở thành biểu tượng cho văn hóa nhạc Pop. Cụ thể là có một chú chó có tên là Gidget đã xuất hiện trong một đoạn quảng cáo của hãng Taco Bell. Nhiều người đã bày tỏ sự thích thú với chú chó này và cũng bắt đầu từ đây mà Chihuahua xuất hiện nhiều hơn ở các bộ phim, chương trình truyền hình.
                Chihuahua dù sở hữu kích thước nhỏ bé, hơi gầy nhưng chúng lại có tuổi thọ khá cao, từ 10 - 18 năm do sức đề kháng tốt và ít mắc bệnh.
                Có thể miêu tả ngoại hình của giống chó này một cách chung chung nhất là nhỏ nhắn và chắc khỏe. Đầu chú tròn và có mõm ngắn, đôi mắt của chúng thật đặc biệt vì rất to và tròn, có màu đen sẫm và có con là màu đỏ sẫm. Đôi tai chúng lúc nào cũng vểnh lên như đang nghe ngóng điều gì đó. Chúng còn có một hõm mềm ở phần thóp trên đỉnh đầu và lỗ hổng này sẽ được xương sợ phủ hết khi mà chúng trưởng thành.
                Nhìn những chú chó Chihuahua nhỏ nhắn vậy thôi nhưng thân hình chúng lại vô cùng săn chắc và linh hoạt. Màu lông của chúng cũng rất đa dạng từ màu cát vàng, đen nâu, màu bạc, nâu hạt dẻ.
                Nếu bạn là một người cô đơn, luôn bộn bề với công việc thì có một chú chó Chihuahua để làm bạn thực sự rất tuyệt bởi Chihuahua là giống chó rất thích hợp để bầu bạn. Chú chó này có tính cách năng động, kiêu hãnh, mạnh dạn và luôn bày tỏ tình cảm thân thiết với người chủ của nó. Vì nhỏ con nên chúng di chuyển rất nhanh và nhẹ để tránh bị dẫm phải. Đặc biệt, chúng rất nhanh nhẹn, thông minh và thính giác cực kỳ phát triển.',
                'thumbnail'=>'https://petmaster.vn/petroom/wp-content/uploads/2020/03/cho-chihuahua-3.jpg',
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>5,
                'name'=>'Chó Bully',
                'description'=>'Chó Bully xuất hiện từ những năm 1995 và là hậu duệ của chó Pitbull nhưng chúng sở hữu vẻ ngoài đô hơn và cơ bắp hơn. Đây là giống chó cảnh đang được yêu thích tại Việt Nam.',
                'detail'=>'Chó Bully có tên đầy đủ là American Bully. Ngay từ tên gọi đã nói lên nguồn gốc xuất xứ của loài chó này. Bully là một giống chó có nguồn gốc từ Mỹ và được cho là bắt đầu xuất hiện tại Mỹ từ năm 1995.

                Ngay từ khi mới xuất hiện, Bully American đã nhanh chóng làm nên cơn sốt tại Mỹ sau đó phủ sóng sang toàn châu Âu, nhân rộng sự phổ biến sang một số nước châu Á, trong đó có Thái Lan và Việt Nam.
                Bully là kết quả không thể hoàn hảo hơn của sự lai tạo giữa hai giống chó Pitbull và Bulldog. American Bully mang trong mình sự tinh túy của cả hai nguồn gen này. Chúng “lừa người” bằng vẻ ngoài dữ dằn và bặm trợn song bản tính lại rất hiền lành và quấn chủ.
                Bully American hiện nay chỉ được thừa nhận là loài chó lai của Pitbull. Chúng vẫn chưa được thế giới công nhận là một giống chó độc lập do có hệ gen chưa ổn định.
                Mỹ là nơi chó Bully American lần đầu tiên xuất hiện. Do đó, đây vẫn là cái nôi nuôi dưỡng đại đa số những con Bully trên toàn thế giới. Để đáp ứng nhu cầu mua chó Bully American, rất nhiều trại chó Bully tại Mỹ đã được lập lên để nhân giống loài chó này.
                American Bully xuất hiện phổ biến ở Việt Nam khoảng 6 năm trở lại đây. Chúng đang được nhiều trại chó nhập về từ tận nước Mỹ xa xôi để nhân giống bởi cơn sốt Bully American ở Việt Nam vẫn chưa có dấu hiệu hạ nhiệt.
                Ấn tượng chung về ngoại hình của chó Bully là hình thể săn chắc và vạm vỡ với vẻ ngoài hầm hố và có phần dữ dằn.
                Chó Bully American là loài chó có kích thước trung bình, không quá to cũng không quá nhỏ. Chiều cao và cân nặng của bất kỳ loài chó nào cũng cần phải cân đối. Bởi nó sẽ đánh giá một con chó bất kỳ có phải là một con chó đẹp hay không.
                Chiều cao của Bully dao động trong khoảng từ 43 – 53 cm. Những con chó Bully đực có phần nhỉnh hơn so với những con cái. Tuy nhiên, sự chênh lệch này là không nhiều.
                Ở con đực khoảng 46 – 53cm
                Ở con cái khoảng 43 – 51cm
                Cân nặng của Bully dao động trong khoảng từ 14 – 27kg. Những con đực cũng có ưu thế về cân nặng hơn các con cái.
                Ở con đực khoảng 16–27 kg
                Ở con cái khoảng 14–23 kg
                Chiều cao của chó Bully tuy thấp hơn tổ tiên của nó là giống chó Pitbull song đổi lại, Bully có thân hình cơ bắp và săn chắc hơn.',
                'thumbnail'=>'https://sieupet.com/sites/default/files/pictures/images/cho-bully-3.jpg',
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],

        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
