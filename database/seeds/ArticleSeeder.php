<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('articles')->truncate();
        DB::table('articles')->insert([
            [
                'id' => 1,
                'category_id' => '1',
                'create_by' => '1',
                'status' => 1,
                'title' => 'Chó sục Yorkshire có nguồn gốc từ nước Anh, chúng là giống chó nhỏ bé có bộ lông dáng óng mượt, là giống chó cảnh được yêu chuộng tại các nước Châu Âu.',
                'description' => 'Chú chó Pug có chiều cao từ 25 - 35 cm và có cân nặng khoảng 6 - 10kg. Sở hữu chiều cao lùn và thân hình to mập nên chó Pug có thân hình vuông. Lưng Pug thẳng, không lõm cũng không căng nên chúng có dáng đi khá oai vệ và vững chắc. Chó Pug có làn da khá mềm và mỗi khi vuốt ve chúng sẽ cảm thấy vô cùng dễ chịu.
                Những chú chó Pug thuần chủng sẽ có đầu hình vòng cung khi nhìn ngang. Đặc biệt, chúng hầu như không có xương mũi, vì vậy chúng thường gặp khó khăn khi hít thở. Còn khi nhìn chính diện thì chó Pug có khuôn mặt to tròn với nhiều nếp nhăn xếp chồng lên nhau. Nếu những con chó Pug nào càng nhiều nếp nhăn càng được yêu thích. ',
                'thumbnail' => 'https://petmaster.vn/petroom/wp-content/uploads/2020/03/ngoai-hinh-cho-pug.jpg',
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s')
            ],

            [
                'id' => 2,
                'category_id' => '2',
                'create_by' => '2',
                'status' => 1,
                'title' => 'Chó Poodle được biết đến ở Tây Âu vào khoảng 400 năm trước và chúng chính là hậu duệ của các giống chó như French Water Dog, Hungarian Water Hound và Barbet. Ngày nay, con người đã lai tạo giống chó săn vịt này thành một hình tượng quý tộc và xinh xắn, trở thành chú chó được nhiều người yêu thích.',
                'description' => 'Chó Poodle là giống chó săn vịt cực đáng yêu, loài Poodle hiện phổ biến với 3 loại là Toy Poodle, Mini Poodle và Standard Poodle và đều có tuổi thọ từ 12 - 15 năm. Còn hai kích thước không được công nhận là Tiny và Teacup thì có tuổi thọ khá ngắn, từ 5 - 8 năm.',
                'thumbnail' => 'https://petmaster.vn/petroom/wp-content/uploads/2020/03/hinh-anh-cho-poodle.jpg',
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 3,
                'category_id' => '3',
                'create_by' => '4',
                'status' => 0,
                'title' => 'Chó Beagle xuất hiện cách đây từ khoảng 2400 năm về trước và đó là kết quả của sự lai tạo giữa chó bản địa Anh và chó săn thỏ Talbot',
                'description' => 'Chó Beagle xuất hiện cách đây từ khoảng 2400 năm về trước và đó là kết quả của sự lai tạo giữa chó bản địa Anh và chó săn thỏ Talbot. Khoảng thế kỷ XIX, Beagle du nhập đến Anh Quốc và dần trở nên phổ biến khắp châu Âu.',
                'thumbnail' => 'https://petmaster.vn/petroom/wp-content/uploads/2020/03/cho-beagle-1.jpg',
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 4,
                'category_id' => '4',
                'create_by' => '4',
                'status' => 1,
                'title' => 'Chihuahua là chú chó nhỏ nhất trong mọi loài chó trên thế giới và cũng là giống chó lâu đời nhất ở châu Mỹ. Chú chó này có nguồn gốc từ Mexico nhưng lại được cả thế giới biết đến nhờ Trung Quốc. Tên của chúng được lấy từ tên một bang của Mexico, bang Chihuahuan, là nơi mà chú chó được tìm thấy.',
                'description' => 'Những chú chó Beagle sôi động, dễ gần và thân thiện với con người có tuổi thọ dao động từ 12 - 15 năm. ',
                'thumbnail' => 'https://petmaster.vn/petroom/wp-content/uploads/2020/03/cho-chihuahua-2.jpg',
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 5,
                'category_id' => '5',
                'create_by' => '5',
                'status' => 0,
                'title' => 'Chó Bully xuất hiện từ những năm 1995 và là hậu duệ của chó Pitbull nhưng chúng sở hữu vẻ ngoài đô hơn và cơ bắp hơn. Đây là giống chó cảnh đang được yêu thích tại Việt Nam.',
                'description' => 'Chó Bully có ngoại hình săn chắc cùng những khối cơ bắp vạm vỡ và nở nang khiến khuôn mặt chúng có phần hơi dữ dằn. Bully có một chiếc đầu to trông rất hầm hố và đồ sộ. Vầng trán chúng rộng chứng tỏ chú chó này rất thông minh. Hai mắt của chúng cách xa nhau, mõm chúng tương đối rộng cùng với hàm răng sắc nhọn. Nhờ vào hàm răng khỏe mà chúng nhai rất tốt.
                Đôi chân của Bully thẳng và khỏe. Hai chân sau có xu hướng chếch ra ngoài nên khiến dáng đi chúng hơi khệnh khạng.
                Bộ lông của chúng phổ biến với màu đơn, khoang và màu đốm. Có những chú Bully sở hữu cả 3 màu khác biệt và giá của chúng không hề rẻ.',
                'thumbnail' => 'https://petmaster.vn/petroom/wp-content/uploads/2020/03/american-bully.jpg',
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 6,
                'category_id' => '6',
                'create_by' => '6',
                'status' => 1,
                'title' => 'Corgi là chú chó đến từ Anh quốc và đây là giống chó lùn vô cùng nổi tiếng với đôi chân ngắn ngủn.',
                'description' => 'Giống chó Corgi có đặc điểm chung là thân hình dài và 4 chân ngắn, những chú chó nào có thân hình càng dài thì càng đẹp. Chó Corgi có đôi tai hình tam giác dựng thẳng rất đáng yêu. Tai và mặt chúng có tỷ lệ hết sức cân đối, mắt to tròn, miệng và khuôn hàm nhỏ cực kỳ sắc nhọn. Nhìn tổng thể chú ta rất giống loài cáo và Corgi còn được gọi với cái tên là Foxy Dog.
                Corgi có bộ lông ngắn, mỏng và cực kỳ mềm mượt sẽ giúp cho Corgi giữ ấm cơ thể khi thời tiết lạnh. ',
                'thumbnail' => 'https://petmaster.vn/petroom/wp-content/uploads/2020/03/cho-corgi-1.jpg',
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 7,
                'category_id' => '7',
                'create_by' => '7',
                'status' => 0,
                'title' => 'Chó Doberman là giống chó được lai tạo tại Đức những năm 1860 từ giống chó Pinschers với giống chó Rottweiler, Beauceron và Pinschers,... Tên Doberman được lấy từ chính tên của người đã có công lai tạo chú chó này, ông Doberman.',
                'description' => 'Những chú chó Doberman có thân hình lực lưỡng, cao to khỏe mạnh và rất cứng cáp. Doberman đực sở hữu chiều cao lý tưởng từ 68 đến 72 cm và nặng khoảng 40 - 45cm, còn những chú Doberman cái sở hữu chiều cao từ 63 - 68 cm và nặng khoảng 32 đến 35kg.
                Dòng Doberman hiện nay phổ biến với hai màu lông là màu đen viền vàng và màu hung viền đỏ. Đặc biệt, bộ lông của chúng lúc nào cũng bóng bẩy mượt mà trông rất quý ông. ',
                'thumbnail' => 'https://petmaster.vn/petroom/wp-content/uploads/2020/03/cho-doberman.jpg',
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 8,
                'category_id' => '8',
                'create_by' => '8',
                'status' => 0,
                'title' => 'Chó Ngao Tây Tạng xuất hiện từ khá lâu và người ta ước tính được khoảng thời gian là 5000 - 6000 năm trước tại vùng cao nguyên Tây Tạng của Trung Quốc.',
                'description' => 'Chó Ngao Tây Tạng có 4 chân lớn được ví như 4 bàn trụ vững chãi, cắm chặt xuống đất. Một khi đã chạy, chó ngao Tây Tạng có thể vượt qua tốc độ của chó sói, được các nhà thám hiểm phương Tây ví là “to hơn chó sói, mạnh hơn hổ báo và nhanh hơn hươu nai”.
                Chó Tây Tạng sở hữu cái đầu lớn và khuôn mặt xệ, nhìn rất lạnh lùng và lì lợm. Phần mõm dài và vuông với một cái miệng rộng. Chúng có hàm răng sắc nhọn và lực cắn rất lớn, vì vậy chúng có thể giết bất kỳ con thú nào chỉ bằng một nhát cắn. Ngao Tây Tạng có đôi mắt nhỏ và sắc, hơi xếch một chút. Bộ lông của chúng thì siêu dày và có cấu tạo như lông cừu, có hai lớp bao phủ toàn bộ cơ thể.',
                'thumbnail' => 'https://petmaster.vn/petroom/wp-content/uploads/2020/03/cho-ngao-tay-tang-1.jpg',
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 9,
                'category_id' => '9',
                'create_by' => '9',
                'status' => 1,
                'title' => 'Chó Pitbull có nguồn gốc từ châu Mỹ và là một trong những hung thần của những loài chó khác trong nhóm chó chiến. Trong những năm gần đây, Pitbull khá phổ biến ở Việt Nam',
                'description' => 'Loại thức ăn tốt nhất dành riêng cho Pitbull là loại thức ăn khô dành riêng cho dòng chó cơ bắp của các thương hiệu lớn như Royal Canin, Morando, Smartheart hay Fitmin.',
                'thumbnail' => 'https://petmaster.vn/petroom/wp-content/uploads/2020/03/khuon-mat-cho-pitbull-1.jpg',
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 10,
                'category_id' => '10',
                'create_by' => '10',
                'status' => 1,
                'title' => 'Chó sục Yorkshire có nguồn gốc từ nước Anh, chúng là giống chó nhỏ bé có bộ lông dáng óng mượt, là giống chó cảnh được yêu chuộng tại các nước Châu Âu.',
                'description' => 'Đặc điểm nổi bật của Yorkshire đó chính là kích thước nhỏ nhắn, cân nặng của chúng rơi vào khoảng 3,2kg và chiều cao khoảng 23 cm. Bộ lông phát triển, dài và khá óng mượt.
                Giống chó cảnh này bắt chuột rất giỏi, chúng rất tinh nhanh và nhạy bén. Tính cách thân thiện hòa động và gần gũi với mọi người. Vì nhỏ bé nên Yorkshire hợp với làm thú cưng thay vì làm các công việc nặng nhọc khác. Yorkshire thông minh và cũng rất cần sự quan tâm của chủ nhân, nên khi nuôi chúng hãy dành nhiều thời gian bên cạnh chúng.',
                'thumbnail' => 'https://petmaster.vn/petroom/wp-content/uploads/2020/03/cho-yorkshire-terrier.jpg',
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s')
            ],

        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

    }
}
