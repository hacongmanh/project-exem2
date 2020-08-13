<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class DogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('dogs')->truncate();
        DB::table('dogs')->insert([
            [
                'id'=>1,
                'name'=>'Pug xệ',
                'price'=>'13000000',
                'birthday'=>'2019-05-10',
                'gender'=>'1',
                'category_id'=>1,
                'breedType'=>1,
                'color'=>'Trắng',
                'thumbnail'=>'ngoai-hinh-cho-pug_fbudvh',
                'description'=>'Chú chó Pug có chiều cao từ 25 - 35 cm và có cân nặng khoảng 6 - 10kg. Sở hữu chiều cao lùn và thân hình to mập nên chó Pug có thân hình vuông. Lưng Pug thẳng, không lõm cũng không căng nên chúng có dáng đi khá oai vệ và vững chắc. Chó Pug có làn da khá mềm và mỗi khi vuốt ve chúng sẽ cảm thấy vô cùng dễ chịu. ',
                'detail'=>'Những chú chó Pug thuần chủng sẽ có đầu hình vòng cung khi nhìn ngang. Đặc biệt, chúng hầu như không có xương mũi, vì vậy chúng thường gặp khó khăn khi hít thở. Còn khi nhìn chính diện thì chó Pug có khuôn mặt to tròn với nhiều nếp nhăn xếp chồng lên nhau. Nếu những con chó Pug nào càng nhiều nếp nhăn càng được yêu thích.
Chó Pug sở hữu những đôi mắt to tròn và lồi, những chú chó Pug thuần chủng mắt sẽ có màu sẫm. Tai chúng luôn luôn cụp và to. Khuôn miệng chúng khá rộng, phần xương hàm to và chắc khỏe. Riêng hàm dưới sẽ hơi nhô so với hàm trên. ...
Trái với khuôn mặt dữ dằn và nghiêm túc, tính cách chó Pug lại rất hiền lành và hòa đồng. Hơn nữa, chúng cực kỳ thông minh, lanh lợi, trung thành và rất thân thiện với con người và những chú chó khác.',
                'mother_id'=>1,
                'father_id'=>1,
                'status'=>0,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>2,
                'name'=>'Pug bự',
                'price'=>'10000000',
                'birthday'=>'2019-05-10',
                'gender'=>'2',
                'category_id'=>2,
                'breedType'=>1,
                'color'=>'Đen',
                'thumbnail'=>'cho-pug-mat-xe_gcno1p',
                'description'=>'Chó Pug sở hữu những đôi mắt to tròn và lồi, những chú chó Pug thuần chủng mắt sẽ có màu sẫm. Tai chúng luôn luôn cụp và to. Khuôn miệng chúng khá rộng, phần xương hàm to và chắc khỏe. Riêng hàm dưới sẽ hơi nhô so với hàm trên. ...

Trái với khuôn mặt dữ dằn và nghiêm túc, tính cách chó Pug lại rất hiền lành và hòa đồng. Hơn nữa, chúng cực kỳ thông minh, lanh lợi, trung thành và rất thân thiện với con người và những chú chó khác.',
                'detail'=>'Chú chó Pug có chiều cao từ 25 - 35 cm và có cân nặng khoảng 6 - 10kg. Sở hữu chiều cao lùn và thân hình to mập nên chó Pug có thân hình vuông. Lưng Pug thẳng, không lõm cũng không căng nên chúng có dáng đi khá oai vệ và vững chắc. Chó Pug có làn da khá mềm và mỗi khi vuốt ve chúng sẽ cảm thấy vô cùng dễ chịu.
Chó Pug ham ăn nên rất dễ béo phì, bạn không nên cho chó ăn quá nhiều axit béo. Hơn nữa, chúng lại rất lười nên bạn cần thường xuyên dẫn chúng ra ngoài vận động và vận động, mỗi ngày nên cho chúng chạy nhảy khoảng 15 - 30 phút để có một sức khỏe tốt.
Trên mặt chúng có rất nhiều nếp nhăn nên bạn phải thường xuyên vệ sinh sạch sẽ để tránh các bệnh nhiễm trùng cho da
Chó Pug hay bị bệnh răng miệng nên bạn hãy đánh răng cho chúng khoảng 3 lần/tuần.',
                'mother_id'=>1,
                'father_id'=>1,
                'status'=>1,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>3,
                'name'=>'Kity',
                'price'=>'9000000',
                'birthday'=>'2019-05-10',
                'gender'=>'2',
                'category_id'=>3,
                'breedType'=>2,
                'color'=>'Vàng',
                'thumbnail'=>'cho-poodle-teacup_hdr9ps',
                'description'=>'Chó Poodle là giống chó săn vịt cực đáng yêu, loài Poodle hiện phổ biến với 3 loại là Toy Poodle, Mini Poodle và Standard Poodle và đều có tuổi thọ từ 12 - 15 năm. Còn hai kích thước không được công nhận là Tiny và Teacup thì có tuổi thọ khá ngắn, từ 5 - 8 năm.',
                'detail'=>'Những chú chó Poodle luôn khiến người khác đổ gục bởi vẻ ngoài xinh xắn và đáng yêu của mình. Nổi bật hơn hết là bộ lông xoăn đặc trưng với các màu như nâu đỏ, trắng, đen, vàng mơ, kem, xám, trắng, socola.

Về tính cách thì hầu hết nhà Poodle đều là những chú chó thân thiện, nghịch ngợm và thông minh. Đặc biệt, chúng học rất nhanh và khả năng học hỏi của chúng rất tốt.',
                'mother_id'=>2,
                'father_id'=>2,
                'status'=>0,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>4,
                'name'=>'Lucky',
                'price'=>'11000000',
                'birthday'=>'2019-05-10',
                'gender'=>'1',
                'category_id'=>4,
                'breedType'=>2,
                'color'=>'Vàng Nâu',
                'thumbnail'=>'cho-poodle-thong-minh-thu-hai-the-gioi_efv5yh',
                'description'=>'Chó Poodle được biết đến ở Tây Âu vào khoảng 400 năm trước và chúng chính là hậu duệ của các giống chó như French Water Dog, Hungarian Water Hound và Barbet. Ngày nay, con người đã lai tạo giống chó săn vịt này thành một hình tượng quý tộc và xinh xắn, trở thành chú chó được nhiều người yêu thích.',
                'detail'=>'Chó Poodle là giống chó săn vịt cực đáng yêu, loài Poodle hiện phổ biến với 3 loại là Top Poodle, Mini Poodle và Standard Poodle và đều có tuổi thọ từ 12 - 15 năm. Còn hai kích thước không được công nhận là Tiny và Teacup thì có tuổi thọ khá ngắn, từ 5 - 8 năm.
Chó Poodle không chịu được khí hậu quá nóng hay quá lạnh. Vì vậy một nơi ở sạch sẽ, rộng rãi và thoáng mát là điều kiện tốt về nơi ở cho chúng. Vào mùa đông bạn nên hạn chế dắt Poodle đi dạo vì thời tiết mùa đông ở ngoài khá lạnh, chúng có bộ lông dày và xù nhưng khả năng giữ ấm cơ thể lại rất kém.
Chó Poodle là loài chó thích vận động, chạy nhảy nên mỗi ngày bạn nên dắt chúng đi dạo và cho chúng giao tiếp với những chú chó khác.
Poodle dễ bị cảm lạnh nên bạn dùng nước ấm để tắm cho chúng
Sở hữu bộ lông dày nên phải tắm cho Poodle thường xuyên, khoảng 2 -3 lần một tuần.
Poodle mọc lông rất nhanh nên cứ 1 tháng bạn tỉa lông cho Poodle 1 lần',
                'mother_id'=>2,
                'father_id'=>2,
                'status'=>1,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>5,
                'name'=>'Kaixa',
                'price'=>'5000000',
                'birthday'=>'2019-05-10',
                'gender'=>'2',
                'category_id'=>5,
                'breedType'=>3,
                'color'=>'Tam thể',
                'thumbnail'=>'cho-beagle-1_frtb2x',
                'description'=>'Chó Beagle xuất hiện cách đây từ khoảng 2400 năm về trước và đó là kết quả của sự lai tạo giữa chó bản địa Anh và chó săn thỏ Talbot. Khoảng thế kỷ XIX, Beagle du nhập đến Anh Quốc và dần trở nên phổ biến khắp châu Âu.',
                'detail'=>'Sở hữu một ngoại hình đáng yêu và thu hút nên chó Beagle được rất nhiều người yêu thích và muốn sở hữu chúng để là thú cưng. Chúng có chiều cao khoảng 33 - 41cm ở độ tuổi trưởng thành và cân nặng từ 10 - 11kg với chó đực, 9 - 10kg với chó cái. Chúng có thân hình vuông vắn, cứng cáp và nổi bật với bộ lông tam thể mượt mà cùng đôi tai cụp đặc trưng.

Chó Beagle là loài chó vui nhộn và năng động, trông chúng lúc nào cũng tràn đầy năng lực và có vẻ như chúng rất thích các hoạt động ngoài trời. Nhưng tuy nhiên chúng có bản tính săn mồi, có thể làm hại những vật nuôi khác như mèo, thỏ, hamster,...',
                'mother_id'=>3,
                'father_id'=>3,
                'status'=>1,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>6,
                'name'=>'Tetdy',
                'price'=>'12500000',
                'birthday'=>'2019-05-10',
                'gender'=>'2',
                'category_id'=>6,
                'breedType'=>3,
                'color'=>'Tam Thể',
                'thumbnail'=>'cho-beagle_tdy3dz',
                'description'=>'Sở hữu một ngoại hình đáng yêu và thu hút nên chó Beagle được rất nhiều người yêu thích và muốn sở hữu chúng để là thú cưng. Chúng có chiều cao khoảng 33 - 41cm ở độ tuổi trưởng thành và cân nặng từ 10 - 11kg với chó đực, 9 - 10kg với chó cái. Chúng có thân hình vuông vắn, cứng cáp và nổi bật với bộ lông tam thể mượt mà cùng đôi tai cụp đặc trưng.
Chó Beagle là loài chó vui nhộn và năng động, trông chúng lúc nào cũng tràn đầy năng lực và có vẻ như chúng rất thích các hoạt động ngoài trời. Nhưng tuy nhiên chúng có bản tính săn mồi, có thể làm hại những vật nuôi khác như mèo, thỏ, hamster,...',
                'detail'=>'- Chó Beagle là chú chó hiếu động và tràn đầy năng lượng nên chúng rất hay đi lang thang. Vì vậy bạn nên cẩn thận khi chú ta ra khỏi nhà và chó chúng dạo chơi, tốt nhất là nên xích chúng lại để kiểm soát dễ hơn.
Vì sở hữu bộ lông ngắn nên chỉ thỉnh thoảng tắm cho chúng mà thôi. Khi tắm nên sử dụng nước ấm vừa, hãy loại bỏ toàn bộ lông rụng của chúng, sau đó làm sạch các nếp nhăn trên khuôn mặt.
Đến bác sĩ thú ý và tiêm phòng định kỳ
Chế độ dinh dưỡng
Trong khoản ăn uống thì chó Beagle lại cực kỳ dễ tính, chúng không quá kén ăn và có thể ăn mọi thứ. Bạn có thể cho chúng ăn các món ăn đóng gói, đóng hộp sẵn hoặc tự nấu cho chúng.',
                'mother_id'=>3,
                'father_id'=>3,
                'status'=>1,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>7,
                'name'=>'HuaLa',
                'price'=>'9500000',
                'birthday'=>'2019-05-10',
                'gender'=>'2',
                'category_id'=>7,
                'breedType'=>4,
                'color'=>'Trắng',
                'thumbnail'=>'Teacup-Chihuahua_ut5ds7',
                'description'=>'Chihuahua là chú chó nhỏ nhất trong mọi loài chó trên thế giới và cũng là giống chó lâu đời nhất ở châu Mỹ. Chú chó này có nguồn gốc từ Mexico nhưng lại được cả thế giới biết đến nhờ Trung Quốc. Tên của chúng được lấy từ tên một bang của Mexico, bang Chihuahuan, là nơi mà chú chó được tìm thấy.',
                'detail'=>'Đặc điểm:Chó Chihuahua là giống chó nhỏ con có đầu tròn và mõm ngắn. Đôi mắt chúng to, tròn và lồi. Đôi tai của Chihuahua to đùng luôn trong trạng thái vểnh lên.
Tuổi thọ:Chihuahua là giống chó nhỏ nhất thế giới hiện nay. Tuổi thọ của chúng khá cao, từ 10 - 18 năm tùy vào khí hậu và môi trường chúng sống. Ví dụ như nếu sống ở châu Âu và Mỹ thì tuổi thọ từ 15 - 18 năm, còn sống tại quê hương Mexico của chúng thì tuổi thọ từ 13 - 16 năm và ở Việt Nam thì Chihuahua có tuổi thọ từ 10 - 15 năm',
                'mother_id'=>4,
                'father_id'=>4,
                'status'=>1,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>8,
                'name'=>'TiTi',
                'price'=>'10000000',
                'birthday'=>'2019-05-10',
                'gender'=>'2',
                'category_id'=>8,
                'breedType'=>4,
                'color'=>'Vàng Nâu',
                'thumbnail'=>'dac-diem-cho-chihuahua_h6wjda',
                'description'=>'Chó Chihuahua là giống chó nhỏ con có đầu tròn và mõm ngắn. Đôi mắt chúng to, tròn và lồi. Đôi tai của Chihuahua to đùng luôn trong trạng thái vểnh lên. ',
                'detail'=>'Những chú chó Chihuahua sở hữu bộ lông mượt tự nhiên nên chúng không cần tắm nhiều, bạn chỉ cần tắm cho chúng 1 tuần/lần là đủ. Khi tắm cho chúng bạn nên nhớ vệ sinh tai, mắt thật kỹ. Hơn nữa, Chihuahua rất hay liếm mặt chủ nên bạn cũng cần vệ sinh răng miệng cho chúng thường xuyên để chúng có hơi thở thơm tho.

- Đến bác sĩ thú ý để tiêm phòng định kỳ và nhớ tiêm vacxin để phòng tránh các bệnh nguy hiểm.

- Chỗ ở của chúng phải thật thoáng và sạch sẽ, những ngày thời tiết mùa đông nên giữ ấm cho chúng vì chúng rất sợ lạnh.

- Bạn nên cho chúng vận động thường xuyên và vận động mỗi ngày khoảng 15 phút để chúng được tự do đi lại, giao tiếp với thế giới bên ngoài.',
                'mother_id'=>4,
                'father_id'=>4,
                'status'=>0,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>9,
                'name'=>'Bự',
                'price'=>'20000000',
                'birthday'=>'2019-05-10',
                'gender'=>'1',
                'category_id'=>9,
                'breedType'=>5,
                'color'=>'Đen',
                'thumbnail'=>'cho-bully_pruhgc',
                'description'=>'Chó Bully xuất hiện từ những năm 1995 và là hậu duệ của chó Pitbull nhưng chúng sở hữu vẻ ngoài đô hơn và cơ bắp hơn. Đây là giống chó cảnh đang được yêu thích tại Việt Nam.',
                'detail'=>'Chó Bully có ngoại hình săn chắc cùng những khối cơ bắp vạm vỡ và nở nang khiến khuôn mặt chúng có phần hơi dữ dằn. Bully có một chiếc đầu to trông rất hầm hố và đồ sộ. Vầng trán chúng rộng chứng tỏ chú chó này rất thông minh. Hai mắt của chúng cách xa nhau, mõm chúng tương đối rộng cùng với hàm răng sắc nhọn. Nhờ vào hàm răng khỏe mà chúng nhai rất tốt.

Đôi chân của Bully thẳng và khỏe. Hai chân sau có xu hướng chếch ra ngoài nên khiến dáng đi chúng hơi khệnh khạng.

Bộ lông của chúng phổ biến với màu đơn, khoang và màu đốm. Có những chú Bully sở hữu cả 3 màu khác biệt và giá của chúng không hề rẻ.

',
                'mother_id'=>5,
                'father_id'=>5,
                'status'=>1,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>10,
                'name'=>'Huk',
                'price'=>'21000000',
                'birthday'=>'2019-05-10',
                'gender'=>'1',
                'category_id'=>10,
                'breedType'=>5,
                'color'=>'Trắng',
                'thumbnail'=>'tj0s4r51bfgpmxq3fjdd',
                'description'=>'Bully American là một trong những loài chó ngoại mới du nhập vào Việt Nam khoảng 6 năm trở lại đây. Do cơn sốt Bully chưa có dấu hiệu dừng lại nên cho tới thời điểm hiện nay, giá chó Bully vẫn ở mức tương đối cao.',
                'detail'=>'Bully có tuổi thọ từ 8 đến 12 năm. Cách nuôi Chăm sóc sức khỏeThường xuyên cho Bully vận động để có một thân hình đẹpChế độ dinh dưỡng
Khẩu phần ăn của chó Bully đòi hỏi có độ đạm cao như các loại thịt, lòng trắng trứng, gan lợn, cổ gà, phổi bò, nội tạng động vật, sữa, trứng vịt lộn,... Bên cạnh đó, nên kết hợp thức ăn giàu đạm với những thức ăn chứa tinh bột cao.',
                'mother_id'=>5,
                'father_id'=>5,
                'status'=>0,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],

        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
