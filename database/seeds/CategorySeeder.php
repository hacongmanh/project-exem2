<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
 DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('categories')->truncate();
        DB::table('categories')->insert([
            [
                'id'=>1,
                'name'=>'Chó Pug',
                'thumbnail'=>'https://petmaster.vn/petroom/wp-content/uploads/2020/03/ngoai-hinh-cho-pug.jpg',
                'description'=>'Nguồn gốc thật sự của những chú chó Pug “mặt xệ” hiện nay vẫn chưa được xác định. theo nhiều nguồn thông tin thì chú chó “mặt xệ” này đã xuất hiện từ thời nhà Hán - Trung Quốc vào khoảng những năm 200 TCN. Lúc bấy giờ, chó Pug được xếp vào dòng dõi quý tộc, được hưởng thụ cuộc sống xa hoa và những người nuôi chó Pug chủ yếu là quan lại, hoàng thân, quốc thích Trung Quốc.',
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>2,
                'name'=>'Chó Poodle',
                'thumbnail'=>'https://petmaster.vn/petroom/wp-content/uploads/2020/03/cho-poodle-teacup.jpeg',
                'description'=>'Chó Poodle được biết đến ở Tây Âu vào khoảng 400 năm trước và chúng chính là hậu duệ của các giống chó như French Water Dog, Hungarian Water Hound và Barbet. Ngày nay, con người đã lai tạo giống chó săn vịt này thành một hình tượng quý tộc và xinh xắn, trở thành chú chó được nhiều người yêu thích.',
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>3,
                'name'=>'Chó Beagle',
                'thumbnail'=>'https://petmaster.vn/petroom/wp-content/uploads/2020/03/cho-beagle-1.jpg',
                'description'=>'Chó Beagle xuất hiện cách đây từ khoảng 2400 năm về trước và đó là kết quả của sự lai tạo giữa chó bản địa Anh và chó săn thỏ Talbot. Khoảng thế kỷ XIX, Beagle du nhập đến Anh Quốc và dần trở nên phổ biến khắp châu Âu.',
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>4,
                'name'=>'Chó Chihuahua',
                'thumbnail'=>'https://petmaster.vn/petroom/wp-content/uploads/2020/03/cho-chihuahua-2.jpg',
                'description'=>'Chihuahua là chú chó nhỏ nhất trong mọi loài chó trên thế giới và cũng là giống chó lâu đời nhất ở châu Mỹ. Chú chó này có nguồn gốc từ Mexico nhưng lại được cả thế giới biết đến nhờ Trung Quốc. Tên của chúng được lấy từ tên một bang của Mexico, bang Chihuahuan, là nơi mà chú chó được tìm thấy.',
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>5,
                'name'=>'Chó Bully',
                'thumbnail'=>'https://petmaster.vn/petroom/wp-content/uploads/2020/03/cho-bully.jpg',
                'description'=>'Chó Bully xuất hiện từ những năm 1995 và là hậu duệ của chó Pitbull nhưng chúng sở hữu vẻ ngoài đô hơn và cơ bắp hơn. Đây là giống chó cảnh đang được yêu thích tại Việt Nam.',
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],

        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }

}
