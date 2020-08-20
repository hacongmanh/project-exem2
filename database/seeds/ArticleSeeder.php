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
                'title' =>  '5 điều chăm sóc chó mùa đông người nuôi chó nhất định phải biết để chó không bị cảm lạnh, tê cóng hay mắc các bệnh về hô hấp.',
                'description'=>'<h2 class="mb-3">5 điều chăm sóc chó mùa đông người nuôi chó nhất định phải biết để chó không bị cảm lạnh, tê cóng hay mắc các bệnh về hô hấp.</h2>
<p>Thời tiết những ngày đông lạnh giá, hay khi mưa phùn ẩm ướt là môi trường lý tưởng khiến cho các vi khuẩn sinh sôi nảy nở. Nguy cơ tiềm ẩn nhiều mầm bệnh con người và vật nuôi. Chó cũng cảm thấy lạnh như con người, nhất là những giống chó có khả năng chịu lạnh kém như Doberman, chó nhỏ, chó lông ngắn hoặc không có lông, Greyhound (chó săn thỏ). Chúng rất dễ bị cảm cúm, sốt hoặc cảm lạnh hay mắc các bệnh về đường hô hấp trong khí hậu ẩm ướt, hoại tử vì tê cóng,… nếu không được chăm sóc, giữ ấm và vệ sinh đúng cách.</p>
<img src="https://meocun.com/wp-content/uploads/5-dieu-chu-y-khi-cham-soc-cho-mua-dong-nhat-dinh-phai-biet-meocunpetshop.jpg" alt="">
<p><span style="font-size: 30px;font-weight: bold">1.</span> <span style="font-weight: bold"> Mặc áo ấm cho chó, nhất là mỗi khi đưa chúng ra ngoài</span>
<p>Bạn có thể cho chó mặc những chiếc áo ấm của con người hoặc có thể mua những bộ quần áo dễ thương dành riêng cho các bé.  Chú ý mua các loại vải chất liệu bông hoặc nỉ hoặc len có khả năng giữ ấm tốt.</p>
<p><span style="font-size: 30px;font-weight: bold">2.</span> <span style="font-weight: bold">Chăm sóc chó mùa đông đúng cách.</span>
<p>Bộ lông có tác dụng giữ ấm cơ thể, nhất là vào mùa đông. Vì thế không nên cắt tỉa lông chó quá ngắn bạn nhé.</p>
<p>Tắm cho chó bằng nước ấm và trong phòng kín, tránh gió lùa. Sau khi tắm nên dùng khăn lau hoặc máy sấy tránh để lông ướt dễ gây cảm lạnh cho chó.</p>
<p>Cũng không nên tắm cho chó quá thường xuyên. Tuần tắm 2-3 lần là đủ.</p>
<p> Hạn chế cho chó ra ngoài trời lạnh giá. Nếu có cho chó ra ngoài vận động thì cũng không nên quá lâu. Có thể để chúng hoạt động, chơi ở trong nhà là tốt nhất nếu thời tiết quá lạnh.</p>
<p><span style="font-size: 30px;font-weight: bold">3.</span> <span style="font-weight: bold">Không nên để chó ngủ ngoài trời hoặc trên nền đất.</span>
<p>Nên chuẩn bị ổ nằm cho chó bằng lồng nệm, chăn và quần áo cũ để giữ ấm.</p>
<p>Để chó nằm trong nhà hoặc ngoài hiên.</p>
<p>Chuồng nên được che chắn cách nhiệt và sưởi ấm, tránh gió lùa. Bởi gió là tác nhân tăng cường điều kiện thời tiết lạnh.</p>
<p><span style="font-size: 30px;font-weight: bold">4.</span> <span style="font-weight: bold">Vệ sinh nơi ở, đồ dùng cho chó luôn sạch sẽ khô ráo.</span>
<p>Đảm bảo môi trường sống và sinh hoạt của chó luôn được sạch sẽ, khô ráo. Điều này giúp hạn chế sinh sôi, lây lan của các vi khuẩn, bọ chét và đất bẩn gây bệnh tấn công cún cưng.</p>
<p> Vệ sinh chuồng, cũi, lồng cho chó thường xuyên đảm bảo luôn khô ráo, sạch sẽ.</p>
<p> Nệm hoặc quần áo mặc cho chó nên thay, giặt giũ sạch sẽ thường xuyên.</p>
<p><span style="font-size: 30px;font-weight: bold">5.</span> <span style="font-weight: bold">Sử dụng giày ấm để bảo vệ chân cho các bé khi đi ra ngoài.</span>
<p>Nếu cún gặp khó khăn trong việc đi giày, các sen hãy huấn luyện từ từ cho quen dần.</p>
<p>Nếu bạn nghi ngờ cún nhà mìnhbị ốm thì hãy xem ngay các Dấu hiệu nhận biết khi cún bị ốm cảm lạnh để còn có biện pháp cứu chữa kịp thời nhé.</p>',
                'thumbnail'=>'5-dieu-chu-y-khi-cham-soc-cho-mua-dong-nhat-dinh-phai-biet-meocunpetshop_lcdrcp',
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s')
            ],

            [
                'id' => 2,
                'category_id' => '2',
                'create_by' => '2',
                'status' => 1,
                'title' => 'NGƯỜI NUÔI CHÓ ĐÃ NẮM RÕ LUẬT KHI ĐEM CHÓ RA ĐƯỜNG CHƯA ?',
                'description' => '<h2 class="mb-3">Từ ngày 15/0/2017 Chủ nuôi chó sẽ bị phạt từ 600.000đ đến 800.000đ nếu thả chó tại nơi công cộng mà không đeo rọ mõm chó. Chó thả rông không có người nhận sau 72h sẽ được xử lý bằng cách tiêm thuốc.</h2>
 <img src="https://meocun.com/wp-content/uploads/nguoi-nuoi-cho-da-nam-ro-luat-khi-dem-cho-ra-duong-chua.jpg" alt="">
<p>1 Khi đem chó ra đường phải đeo rọ mõm cho chó.</p>
<p>Khi đem chó ra đường phải xích chó lại.</p>
<p>Khi đem chó ra đường phải có người dắt chúng.</p>
<p>Nếu vi phạm sẽ bị phạt từ 600.000đ – 800.000đ đối với hành vi không đeo rọ mõm cho chó hoặc không giữ xích chó, không có người dắt khi đưa chó ra nơi công cộng.</p>
<p>Nếu chủ nuôi không tiêm phòng bệnh dại cho chó, mèo cũng sẽ chịu mức phạt như trên.</p>
<p>Trong trường hợp, chó bị thả rông bị Chi cục Thú y bắt giữ thì chủ nuôi sẽ bị phạt cảnh cáo từ 100.000đ đến 300.000đ đối với hành vi “thả rông động vật nuôi trong thành phố, thị xã hoặc nơi công cộng”.</p>
<p>Khi bị lạc mất chó: đến ngay nơi “tạm giam” – Chi cục Thú y gần nhất. Mang theo giấy tờ gồm Chứng minh thư nhân dân, Giấy chứng nhận tiêm phòng. Mang theo tiền nộp phạt là 200.000đ.</p>
<p> Nếu không có giấy chứng nhận tiêm phòng bệnh dại: mang theo 2.5 triệu đồng nộp phạt. Khai báo thời gian, địa điểm chó bị bắt. Đi tìm chó ngay trong vòng 72 tiếng, sau thời hạn đó không có người đến liên hệ nhận lại sẽ coi như đó là chó vô chủ. Ngành thú y sẽ tiến hành tiêu hủy theo quy định.</p>
<p>Hãy là người nuôi chó có ý thức, đảm bảo an toàn cho bản thân và cho người xung quanh.</p>
',
                'thumbnail'=>'nguoi-nuoi-cho-da-nam-ro-luat-khi-dem-cho-ra-duong-chua_krgqvo',
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 3,
                'category_id' => '3',
                'create_by' => '4',
                'status' => 0,
                'title' => 'HƯỚNG DẪN CÁCH TẮM CHO CHÓ ĐÚNG CÁCH ?',
                'description' => '<h2 class="mb-3">Tưởng bình thường nhưng việc tắm cho chó như thế nào mới là đúng và tốt cho con vật của bạn thì không phải ai cũng biết. Nhiều trường hợp chỉ vì tắm cho chó sai cách (trời quá lạnh, chó bị ốm, sau tiêm,…) có thể khiến chúng bị cảm hoặc dẫn tới tình trạng sức khỏe càng xấu đi.</h2>
 <img src="https://meocun.com/wp-content/uploads/huong-dan-tam-cho-dung-cach.jpg" alt="">
<p><span style="font-size: 30px;font-weight: bold">1.</span> <span style="font-weight: bold"> CHUẨN BỊ các vật dụng cần thiết để tắm cho chó:</span>
<p>Sữa tắm SOS cho chó mèo chọn loại phù hợp (dành cho mèo; loại cho chó lông trắng; lông nâu đỏ; loại cho lông màu; loại giúp lông sáng bóng; làm mềm và mượt lông dành cho chó; loại phục hồi da và lông dành cho chó)</p>
<p>Khăn tắm</p>
<p>2 cục bông nhét vào 2 tai để tránh nước chảy vào tai.</p>
<p>Nên dùng kìm dũa cắt móng cho chó trước khi tắm (nếu quá dài)</p>
<p>Nên chuẩn bị 1 lọ thuốc mỡ tra mắt cho thú cưng phòng trường hợp sữa tắm dây vào mắt con vật.</p>
<p>Có thể dùng GĂNG TAY TẮM CHÓ và BÀN CHẢI LÔNG CHO CHÓ khi tắm giúp làm sạch tốt hơn.</p>
<p><span style="font-size: 30px;font-weight: bold">2.</span> <span style="font-weight: bold"> THỰC HIỆN CÁC BƯỚC TẮM CHO CHÓ ĐÚNG CÁCH:</span>
<p> Dùng khăn tắm (vải ẩm) lau nhẹ qua vành tai cho sạch bụi bẩn và da chết.</p>
<p>Thấm nước dần dần trải đều khắp cơ thể, xoa sữa tắm đã pha loãng lên cơ thể thú cưng bắt đầu từ phần cổ xuống phần thân.</p>
<p>Gãi hoặc cào nhẹ cho sữa tắm thấm đều khắp cơ thể và loại bỏ hết bụi bẩn, rồi rửa sạch lại bằng nước.</p>
<p>Sau đó, dùng khăn bông khô lau sạch nước cho thú cưng. Có thể dùng máy sấy để sấy trường hợp thời tiết lạnh hoặc bộ lông quá dày và dài.</p>
<p>Nếu bạn đang sử dụng sữa tắm dược liệu (dầu tắm trị ghẻ nấm, viêm da,…) để điều trị cho con vật thì sau khi bôi đều sữa tắm lên cơ thể nên để yên 10 phút cho ngấm vào da.</p>
<p><span style="font-size: 30px;font-weight: bold">3.</span> <span style="font-weight: bold"> TA THƯỜNG TẮM CHO CHÓ KHI</span>
<p>Có quá nhiều bụi bẩn, dịch nhầy, hay các chất lạ khác bám trên da và lông thú cưng.</p>
<p>Đến lúc cần loại bỏ bớt lớp lông chết đã đến thời điểm rụng trên bộ lông của con vật.</p>
<p>Sự tăng tiết bã nhờn làm cho con vật bốc mùi.</p>
<p> Lớp da chết tích lũy nhiều trên da tạo thành đám, vảy.</p>
<p>Da bị nhiễm trùng.</p>
<p>Nên chọn những ngày thời tiết ấm áp để tắm cho vật và không nên tắm cho chó quá muộn vào cuối ngày làm cho bộ lông của vật khó khô hoàn toàn, có thể dẫn đến các trường hợp bệnh lý không đáng có về sau.</p>
<p><span style="font-size: 30px;font-weight: bold">4.</span> <span style="font-weight: bold"> KHÔNG NÊN TẮM CHO CHÓ KHI:</span>
<p> Trong vòng 2h sau khi ăn.</p>
<p> Thời tiết quá lạnh.</p>
<p> Chó mèo con còn bé, mới sinh, đang bú mẹ hoặc mới tách mẹ.</p>
<p>Chó bị ốm hoặc có dấu hiệu nghi bị ốm.</p>
<p>Chó đực đang trong kỳ động dục chuẩn bị phối giống, nếu tắm sẽ giảm mùi “đặc trưng hấp dẫn “, điều đó đồng nghĩa với việc làm giảm hưng phấn tính dục khi giao phối của chúng.</p>
<p>Trong vòng 15 ngày sau giao phối.</p>
<p>Chó mèo mới sinh con.</p>
<p>Những con mới mua về nuôi do chưa quen và sợ người lạ.</p>
<p>Những con mới tiêm chích ngừa dịch bệnh.</p>
<p>Mèo Cún Pet Shop hy vọng, bài viết “hướng dẫn cách tắm chó đúng cách: này sẽ giúp bạn có thêm kiến thức chăm sóc cho cún cưng của mình tốt nhất nhé!</p>
',
                'thumbnail'=>'huong-dan-tam-cho-dung-cach_mgzxbc',
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 4,
                'category_id' => '4',
                'create_by' => '4',
                'status' => 1,
                'title' => 'CHÓ CON BỊ GẦY ĂN GÌ CHO BÉO – THỨC ĂN CHÓ CON',
                'description' => '<h2 class="mb-3">Chó con bị gầy có thể do nhiều nguyên nhân: giun sán, chế độ dinh dưỡng kém, chó bị ốm,… Hãy cùng meocun.com đi tìm nguyên nhân và cách điều trị. Cách điều chỉnh lượng thức ăn chó con đầy đủ dưỡng chất nhanh tăng cân.</h2>
 <img src="https://meocun.com/wp-content/uploads/cho-con-bi-gay-an-gi-de-beo-meocunpetshop-600x400.jpg" alt="">
<p><span style="font-size: 30px;font-weight: bold">1.</span> <span style="font-weight: bold">1. Trường hợp chó ăn tốt mà vẫn gầy thì xem đã sổ giun cho bé chưa</span>
<p>Giun cũng là nguyên nhân khiến các bé không béo được. Bạn có thể tự mua thuốc sổ giun ngoài các cửa hiệu thuốc thú y hoặc các cửa hàng phụ kiện chó mèo. Tốt nhất là mang cún đi khám bác sĩ thú y với các trường hợp bị nhiễm giun nặng, tình trạng gầy, bỏ bữa, ăn uống kém nguy cấp.</p>
<p>Hiện có rất nhiều các loại thuốc tẩy giun cho chó như thuốc trị giun tim, thuốc giun tổng hợp. Giá dao động từ vài chục ngàn đến hơn trăm ngàn/liều. meocun.com khuyên bạn nên sử dụng Drontal – sản phẩm được đặc chế dành riêng cho chó con. Nó không gây ra bất kỳ tác dụng phụ cũng như nguy hại đối với sức khỏe của chó con.</p>
<span style="font-size: 30px;font-weight: bold">2.</span> <span style="font-weight: bold">Trường hợp chó con bị gầy do kén ăn thì cần phải xem lại thực đơn và khẩu vị của chúng</span>
<p> Xem thực đơn hàng ngày của cún đã đủ hàm lượng chất dinh dưỡng chưa. Dinh dưỡng cho chó gồm có 6 loại chủ yếu là: Nước, Carbohydrate, protein, chất béo, khoáng và vitamin. Mỗi loại có 1 chức năng khác nhau trong cơ thể.</p>
<p>a. Trường hợp chó mới sinh: Chó mẹ ít sữa hoặc chó mẹ ăn uống không đầy đủ thì cần cho chó uống thêm sữa tươi hoặc sữa bột. (Sữa có chứa nhiều protein, chất béo, đạm, carbonhydrates, khoáng chất, vitamin A, D, B1, B2, B12,…, nước)</p>
<p>b. Với chó từ 2 tháng tuổi trở lên: Ngoài thức ăn gồm đạm và tinh bột thì nên bổ sung thêm nguồn sơ và vitamin từ rau củ quả như: Thịt, cá xay về nấu cháo đặc, có thể bằm nhuyễn thêm rau xanh, bí đỏ, cà rốt, sữa chua.</p>
<p>Ngoài ra, với chó con thì vitamin D và canxi có vai trò rất lớn đối với sự phát triển cấu trúc cơ, xương, răng, móng, lông và da của chó. Vì thế, có thể bổ sung bằng cách:</p>
<p>Cho chó vận động, tắm nắng sớm thường xuyên hoặc hàng ngày khoảng 30 phút.</p>
<p>Bổ sung bằng các thực phẩm chức năng dinh dưỡng có chứa vitamin D, canxi, omega… dạng viên hoặc gel. Hiện có rất nhiều loại thực phẩm chức năng bạn có thể tham khảo như:  Viên Canxi cho chó mèo Calxi Delice, Gel dưỡng da lông chó mèo Virbac Megaderm, Kem ăn dinh dưỡng chó mèo Nutri-plus Gel.</p>
<p>Đó đều là những loại yêu thích được các chuyên gia đánh giá cao về chất lượng hiện nay.</p>
<p>c. Với các bé từ 6 tháng tuổi trở lên: Ngoài các loại thức ăn thông thường thì đã có thể ăn được các loại thức ăn khô, thức ăn hạt. Đây cũng là các sản phẩm thức ăn cho chó con bán rất chạy hiện nay. Được nghiên cứu và đầu tư sản xuất dựa trên tiêu chuẩn dinh dưỡng chuyên biệt dành cho chó con. Vừa đảm bảo đầy đủ dinh dưỡng cần thiết cho sự phát triển toàn diện của chúng.  Nó lại có khẩu vị đa dạng, hấp dẫn, kích thích chó con thèm ăn, hơn nữa nhiều loại dạng mềm, chó con rất dễ ăn.</p>
<p>Bảng thực đơn chuẩn chỉ là tham khảo. Còn nhu cầu của cún chính xác nhất là do người chủ quan sát và ghi nhận qua quá trình chăm sóc hàng ngày. Xem cún của mình đang cần gì, thiếu gì và từ đó bổ sung cho cún những chất thiếu một cách khoa học và đúng liều lượng phù hợp với từng giống loài và từng giai đoạn phát triển.</p>
<p> Hy vọng những chia sẻ về chó con bị gầy ăn gì cho béo sẽ giúp bạn tìm ra nguyên nhân và cách điều trị, chăm sóc tốt cho cún nhà mình.</p>
',
                'thumbnail'=>'cho-con-bi-gay-an-gi-de-beo-meocunpetshop_omjdmc',
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 5,
                'category_id' => '5',
                'create_by' => '5',
                'status' => 0,
                'title' => 'Nguyên nhân lây lan và cách phòng bệnh dại cho chó',
                'description' => '<h2 class="mb-3">Cách phòng bệnh dại cho chó tốt nhất. Tất tần tật các vấn đề về bệnh dại ở chó, mức độ nguy hiểm, dấu hiệu nhận biết, cách thức lây lan, thời gian phát bệnh…</h2>
 <img src="https://meocun.com/wp-content/uploads/c%C3%A1ch-ph%C3%B2ng-b%E1%BB%87nh-d%E1%BA%A1i-%E1%BB%9F-ch%C3%B3-d%E1%BA%A5u-hi%E1%BB%87u-nh%E1%BA%ADn-bi%E1%BA%BFt-meocunpetshop.jpg" alt="">
<p>Bệnh dại rất nguy hiểm, nguồn bệnh chủ yếu 90% là ở chó do vi rút thuộc họ Rhadoviridae. Vì thế chúng ta phải phòng bệnh dại cho chó ngay từ đầu.</p>
<p>Bệnh dại là bệnh truyền nhiễm cấp tính do virus gây ra. Làm tác loạn hệ thần kinh trung ương. Biểu hiện điên cuồng hay bại liệt, rất nguy hiểm cho nhiều loại gia súc và con người, gây tử vong 100% khi mắc phải.</p>
<p>Nguồn mang bệnh dại chủ yếu là ở chó 90%, mèo 5% và còn lại ở động vật hoang dã 5%. Theo thống kê mới nhất, bệnh này đã gây ra cái chết cho hơn 50.000 người. Và hàng triệu loài động vật trên toàn thế giới và được cả thế giới cảnh báo là căn bệnh cực kỳ nguy hiểm.</p>
<p>Hãy cùng xem nguyên nhân gây ra bệnh, cách thức lây lan và các biện pháp phòng bệnh dại cho chó như nào là tốt nhất nhé.</p>
<p><span style="font-size: 30px;font-weight: bold">1.</span> <span style="font-weight: bold"> Nguyên nhân gây bệnh dại ở chó</span>
<p> Vi rút gây bệnh dại là loại vi rút RNA sợi đơn của Lyssavirus, thuộc họ Rhadoviridae. Các virus này tác động và gây tác loạn hệ thần kinh trung ương. Gây liệt não, viêm não, làm cho con vật trở nên hoảng loạn (điên dại) và chết.</p>
<p><span style="font-size: 30px;font-weight: bold">2.</span> <span style="font-weight: bold"> Cách thức lây truyền bệnh dại cho chó</span>
<p>Bệnh dại lây truyền vào cơ thể qua đường máu hoặc tuyến nước bọt của vật (người) bị nhiễm bệnh bằng phương thức:</p>
<p>Trực tiếp: qua vết cắn của chó, mèo bị bệnh dại.</p>
<p>Gián tiếp: Người hoặc gia súc bị tổn thương cơ giới tiếp xúc với nước bọt của chó, mèo bị dại hoặc virus có thể qua niêm mạc mắt nguyên lành. Virus theo vết cắn vào dây thần kinh về hạch rồi vào thần kinh trung ương và bắt đầu sinh sản, phát triển.</p>
<img src="https://meocun.com/wp-content/uploads/c%C3%A1ch-ph%C3%B2ng-b%E1%BB%87nh-d%E1%BA%A1i-%E1%BB%9F-ch%C3%B3-d%E1%BA%A5u-hi%E1%BB%87u-nh%E1%BA%ADn-bi%E1%BA%BFt-meocunpetshop-a.jpg" alt="">
<p><span style="font-size: 30px;font-weight: bold">3.</span> <span style="font-weight: bold">Dấu hiệu và triệu chứng của bệnh dại ở chó: </span>
<p>Bệnh thường được biểu hiện qua 2 giai đoạn chính</p>
<p>Giai đoạn ủ bệnh: Thời gian dài hay ngắn tùy thuộc loài, độc lực của virus và vị trí vết cắn (độ nông, sâu của vết cắn). Và thường ở người là 40 ngày, ở chó khoảng 25 ngày hoặc có thể kéo dài hơn hoặc ngắn hơn.</p>
<p>Ở giai đoạn đầu khi con vật bị nhiễm bệnh dại thường không thể hiện những dấu hiệu cụ thể, có thể có một số triệu chứng như sốt, sợ nước, sợ ánh sáng, lười ăn và đặc biệt là có hành vi điên cuồng, bồn chồn, dễ bị kích động hay sợ hãi. Và những biểu hiện này thường rất dễ nhầm lẫn với triệu chứng của các bệnh khác.</p>
<p>Giai đoạn phát bệnh: Ở giai đoạn này con vật đã thể hiện rõ những triệu chứng bệnh một cách rõ rệt với những hành vi điên loạn, bị kích động hoặc bị bại liệt.</p>
<p><span style="font-size: 30px;font-weight: bold">4.</span> <span style="font-weight: bold">Một số dấu hiệu chó bị bệnh dại khác thường như: </span>
<p>Bị động kinh, tê liệt, có những hành vi sủa, cắn sủa người hay vật một cách dữ dội, con vật tự cắn vào cơ thể mình.</p>
<p> Bỏ ăn, buồn bã, ngơ ngác, bồn chồn, lặng lẽ chui vào xó tối nằm lỳ (thể dại “câm”). Vài ngày sau chó bị liệt chân, liệt hàm, lưỡi thè ra ngoài, chảy nhiều nước dãi, gầy rất nhanh rồi chuyển sang bại liệt và chết.</p>
<p>Hàm trễ, mắt đỏ ngầu, chảy nước dãi, sùi bọt mép.</p>
<p>Sợ gió, sợ nước, bỏ nhà đi lung tung, bạ gì ăn đấy.</p>
<p>Sau khoảng 4-5 ngày khi có những biểu hiện trên thì con vật sẽ chết.</p>
<p>Riêng ở mèo, ít bị mắc bệnh dại hơn chó. Bệnh dại ở mèo cũng tiến triển như ở chó. Triệu chứng của mèo khi bị bệnh cũng thường ẩn mình vào chỗ tối. Hay kêu, bồn chồn và dễ kích động, cào cấu, cắn xé điên cuồng.</p>
<p>Nếu chó mèo của bạn mắc một số những biểu hiện trên thì hãy lập tức đưa đến bác sĩ thú y ngay lập tức. Chú ý bảo vệ bản thân tránh cho bị chúng cắn hoặc tiếp xúc với nước bọt của chúng. Ngược lại, hãy tham khảo các biện pháp phòng bệnh dại cho chó bên dưới nhé.</p>
<p><span style="font-size: 30px;font-weight: bold">5.</span> <span style="font-weight: bold">Chẩn đoán bệnh dại ở chó mèo </span>
<p>Nếu có nghi ngờ chó, mèo bị nhiễm bệnh dại, cần sớm gọi bác sĩ thú y để được kiểm dịch. Và cần cẩn thận không để bị chúng tấn công. Chúng được cách ly trong 10 ngày để theo dõi và được xét nghiệm máu để kiểm tra bệnh.</p>
<p><span style="font-size: 30px;font-weight: bold">6.</span> <span style="font-weight: bold">Điều trị bệnh dại </span>
<p>Bệnh dại được xếp vào top những bệnh truyền nhiễm nguy hiểm nhất thế giới. Phát triển với tốc độ cực nhanh, gây tử vong nghiêm trọng. Việc điều trị rất khó khăn và hầu như tử vong 100%. Vì vậy chỉ còn cách phòng bệnh dại cho chó để giữ an toàn đến tính mạng.</p>
<img src="https://meocun.com/wp-content/uploads/c%C3%A1ch-ph%C3%B2ng-b%E1%BB%87nh-d%E1%BA%A1i-%E1%BB%9F-ch%C3%B3-d%E1%BA%A5u-hi%E1%BB%87u-nh%E1%BA%ADn-bi%E1%BA%BFt-meocunpetshop-c-600x399.jpg" alt="">
<p><span style="font-size: 30px;font-weight: bold">7.</span> <span style="font-weight: bold">Cách phòng bệnh dại cho chó mèo </span>
<p>Tiêm phòng là cách phòng bệnh dại cho chó tốt nhất cả thế giới áp dụng. Thực hiện tiêm vắc xin định kỳ hàng năm 1 lần/năm. Tiêm mũi đầu khi vật nuôi được 4 tuần tuổi.</p>
<p>Không nên thả rông vật nuôi ngoài đường, khu đông dân cư mà không có sự kiểm soát. Do đó, khi dắt chó ra nơi công cộng phải có người dắt và theo dõi.</p>
<p>Vệ sinh sạch sẽ nơi ở cho vật nuôi. Tắm rửa thú nuôi thường xuyên cũng là một trong các bước quan trọng phòng bệnh dại cho chó mèo. Mà chúng ta thực hiện thường xuyên hàng ngày dưỡng thành thói quen.</p>
<p>Khi phát hiện chó có những biểu hiện bất thường. Cần ngay lập tức đưa đến các cơ sở thú y để kiểm tra tình trạng. Khử trùng xung quanh khu vực vật nuôi bị bệnh.</p>
<p>Trường hợp nếu chó cắn người cần phải đưa người đến cơ quan y tế dự phòng để kiểm tra và tiêm phòng kịp thời đồng thời nhốt chó lại để theo dõi 15 ngày (chó biết rõ nguồn gốc).</p>
<p>Trường hợp không biết rõ nguồn gốc của con chó đã cắn người thì phải áp dụng ngay các biện pháp điều trị dự phòng cho người như bị chó dại cắn.</p>
<p>Tăng cường quản lý, giám sát đàn chó, mèo nuôi trên địa bàn quản lý. Xử lý số chó vô chủ, chó lạc.</p>
<p>Chó chết do mắc bệnh dại hoặc nghi mắc bệnh dại phải đem chôn hoặc đốt xác.</p>
<p>Qua các dấu hiệu và triệu chứng cũng như cách phòng bệnh dại cho chó trên. Mèo Cún Pet Shop hy vọng sẽ giúp ích cho người đọc để biết cách phòng tránh kịp thời. Bảo vệ thú cưng của mình, đồng nghĩa với việc bảo vệ bản thân và những người xung quanh.</p>
',
                'thumbnail'=>'c_C3_A1ch-ph_C3_B2ng-b_E1_BB_87nh-d_E1_BA_A1i-_E1_BB_9F-ch_C3_B3-d_E1_BA_A5u-hi_E1_BB_87u-nh_E1_BA_ADn-bi_E1_BA_BFt-meocunpetshop_syr4zo',
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 6,
                'category_id' => '6',
                'create_by' => '6',
                'status' => 1,
                'title' => 'THỨC ĂN CHO CHÓ CON 1 THÁNG TUỔI?',
                'description' => '<h2 class="mb-3">Thức ăn cho chó con 1 tháng tuổi có những loại nào ? Có thể uống sữa ngoài và ăn thức ăn khô hay bổ sung canxi được không ? </h2>
 <img src="https://meocun.com/wp-content/uploads/thuc-an-cho-cho-con-1-thang-tuoi-can-nhung-loai-nao-2a.jpg" alt="">
<p>Chó con một tháng tuổi do cơ thể còn khá non nớt, chưa có đề kháng mạnh. Nguồn thức ăn chính là sữa mẹ nên với những trường hợp chó con mất mẹ hoặc chó mẹ bị ốm, hay sữa mẹ không đủ để nuôi con thì cần phải ăn thức ăn ngoài, giống như ăn dặm.</p>
<p>Do đó, thức ăn cho chó con 1 tháng tuổi lúc này ngoài sữa tươi (hay các loại sữa dành cho chó con), thì bạn có thể nấu các loại cháo, bổ sung dinh dưỡng như cháo cá, cháo thịt, rau,vv… Ngoài ra, các loại thức ăn giàu canxi, sắt và vitamin – khoáng chất cũng là thực phẩm chức năng cần phải bổ sung vào thực đơn dinh dưỡng hàng ngày nhằm giúp cho chó hoàn thiện và phát triển hệ cơ, xương, răng,…</p>
<p>Còn các loại thức ăn nhanh, thức ăn khô cho chó thì lưu ý nên mua loại thức ăn đặc biệt dành riêng cho chó con, đảm bảo dinh dưỡng vừa đủ, mềm, dễ ăn và dễ tiêu hóa.</p>
<p><span style="font-size: 30px;font-weight: bold">1.</span> <span style="font-weight: bold"> Sữa Bio Milk cho chó mèo</span>
<p>Bio Milk For Pet, sữa cho chó mèo với thành phần giàu chất dinh dưỡng, cân đối và rất dể tiêu hóa tương tự sữa mẹ, có tác dụng thay thế sữa mẹ trong trường hợp chó, mèo mất sữa, kém sữa hoặc thiếu sữa do bầy con quá đông, đồng thời là nguồn bổ xung chất dinh dưỡng cho chó mèo còi cọc, chậm lớn.</p>
<img src="https://meocun.com/wp-content/uploads/sua-cho-cho-meo-bio-milk-meocun-0968816418b.jpg" alt="">
<p><span style="font-size: 30px;font-weight: bold">2.</span> <span style="font-weight: bold"> Kem ăn dinh dưỡng Nutri Plus Gel</span>
<p>Nutri-plus gel bổ sung đầy đủ các dưỡng chất, cung cấp năng lượng cùng tất cả các vitamin và khoáng chất cần thiết tăng cường sức khỏe, làn da và bộ lông khỏe mạnh cho chó con: canxi, sắt, axit folic, mangan, vitamin, A, D, E, B1, B2, B6, B12,…</p>
<img src="https://meocun.com/wp-content/uploads/kem-an-dinh-duong-Nutri-plus-Gel-meocun-petshops-a.jpg" alt="">
<p><span style="font-size: 30px;font-weight: bold">3.</span> <span style="font-weight: bold">Thức ăn cho chó con Smartheart </span>
<p>SmartHeart có thành phần dinh dưỡng tốt, được bổ sung từ Dầu cá biển nguồn DHA, Axit béo Omega – 3 và Lecithin, giàu Colin, giúp tăng cường sự phát triển chức năng não và hệ thần kinh, tăng cường sức khỏe tim mạch.</p>
<p>Vị thịt bò và sữa tươi thơm ngon, hấp dẫn và kích thích cún ăn ngon miệng.</p>
<img src="https://meocun.com/wp-content/uploads/thuc-an-cho-cho-con-smartheart-thuc-an-cho-cho-meocun-b.jpg" alt="">
<p><span style="font-size: 30px;font-weight: bold">7.</span> <span style="font-weight: bold">Thức ăn chó con giống lớn Royal Canin Maxi Junior </span>
<p>Sản phẩm là sự kết hợp độc đáo của các chất dinh dưỡng tốt cho hệ tiêu hóa, cân bằng vi khuẩn đường ruột, và thành phần dinh dưỡng phong phú, tỷ lệ cân bằng đảm bảo chó lớn khỏe mạnh, tăng trưởng đều, thông minh, linh hoạt.</p>
<img src="https://meocun.com/wp-content/uploads/thuc-an-cho-cho-royal-canin-club-pro-cc-meocun.jpg" alt="">
<p><span style="font-size: 30px;font-weight: bold">7.</span> <span style="font-weight: bold">Viên Canxi cho chó mèo Calxi Delice </span>
<p>Với vai trò chủ yếu cung cấp canxi, vitamin D và các khoáng chất cần thiết cho xương và cơ phát triển tối ưu, Calxi Delice cũng là một trong những loại thức ăn cho chó con 1 tháng tuổi cần thiết bổ sung ngay vào thực đơn dinh dưỡng giúp chó con luôn khỏe mạnh, mau lớn và tinh khôn.</p>
<img src="https://meocun.com/wp-content/uploads/vien-canxi-cho-meo-Calci-Delice-meocun-petshop-1.jpg" alt="">
<p>Ngoài ra, còn có rất nhiều các sản phẩm thức ăn, đồ dùng và hàng trăm phụ kiện chó mèo, chim cảnh khác tại MÈO CÚN PET SHOP uy tín tại Hà Nội với nhiều thương hiệu nổi tiếng trong và ngoài nước.</p>
<p>Mèo Cún – địa chỉ quen thuộc của hàng trăm ngàn khách hàng tại khu vực Hà Nội và khắp các tỉnh thành trên cả nước.</p>
<p>=> Quý khách có nhu cầu mua lẻ, sỉ đồ dùng, phụ kiện và thức ăn cho chó mèo vui lòng liên hệ: Hotline: 094.686.5620 hoặc inbox vào hộp thư facebook để được tư vấn hoặc đặt hàng online. Hân hạnh được phục vụ quý khách ! Tư vấn 24/7.</p>
<img src="https://meocun.com/wp-content/uploads/ban-buon-thuc-an-cho-meo-con-meocunpetshop-a.jpg" alt="">
',
                'thumbnail'=>'thuc-an-cho-cho-con-1-thang-tuoi-can-nhung-loai-nao-2a_f8ooxl',
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 7,
                'category_id' => '7',
                'create_by' => '7',
                'status' => 0,
                'title' => 'CHÓ BỊ VIÊM DA – DẤU HIỆU VÀ CÁCH ĐIỀU TRỊ',
                'description' => '<h2 class="mb-3">Chó bị viêm da mặc dù không là bệnh nguy hiểm, ảnh hưởng đến sức khỏe cún cưng. Nhưng lại khiến chúng ngứa ngáy, khó chịu, hôi hám nặng hơn thì mưng mủ, lở loét, rụng lông. </h2>
 <img src="https://meocun.com/wp-content/uploads/cho-bi-viem-da-dau-hieu-va-cach-dieu-tri-meocunpetshop-4.jpg" alt="">
<span style="font-size: 30px;font-weight: bold">1.</span> <span style="font-weight: bold"> NGUYÊN NHÂN CHÓ BỊ VIÊM DA</span>
<p>Có rất nhiều nguyên nhân gây ra bệnh viêm da ở chó. Do các ngoại ký sinh trùng sống bám trên lông, da, tai và chân chó như ve, rận, bọ chét, ghẻ tai do Otodectes cynotis, xà mâu do Demodex canis, bệnh ghẻ do Sarcoptes. Chúng hút máu gây ra tình trạng thiếu máu, dị ứng và làm tổn thương da. Có thể bị nhiễm trùng kế phát và đưa đến viêm da có mủ.</p>
<p><span style="font-size: 30px;font-weight: bold">2.</span> <span style="font-weight: bold"> ĐƯỜNG TRUYỀN LÂY BỆNH KHIẾN CHÓ BỊ VIÊM DA</span>
<p>Nếu chó mẹ bị viêm da thì sẽ lây sang chó con trong giai đoạn bú sữa.</p>
<p>Chó khỏe mạnh cũng sẽ bị lây viêm da khi chúng thường xuyên tiếp xúc với nhau.</p>
<p>Chó bị viêm da lây nhiễm bệnh từ môi trường chuồng ở, chỗ nằm, sân chơi.</p>
<img src="https://meocun.com/wp-content/uploads/cho-bi-viem-da-dau-hieu-va-cach-dieu-tri-meocunpetshop-1a.jpg" alt="">
<p><span style="font-size: 30px;font-weight: bold">3.</span> <span style="font-weight: bold">TRIỆU CHỨNG VIÊM DA Ở CHÓ</span>
<p>Nếu cún bị viêm da ở chó do vi khuẩn Demodex thì thường sẽ có dấu hiệu rụng lông ở vùng đầu và 4 chân.</p>
<p>Ban đầu chỉ viêm da cục bộ (khoảng nhỏ). Nếu không có biện pháp điều trị kịp thời, lâu ngày sẽ có mủ. Viêm lan toàn thân có mùi hôi khó chịu.</p>
<p>Chó bị viêm da thường có các biểu hiện như hay gãi do ngứa, tự cào cấu, cắn nên dễ gây tổn thương da.</p>
<p>Rụng lông, da mẩn đỏ, dày lên có vảy khô. Nặng hơn thì có dịch chảy vàng, có mủ trắng do nhiễm trùng kế phát của vi khuẩn Staphylococus.</p>

<p><span style="font-size: 30px;font-weight: bold">4.</span> <span style="font-weight: bold">CÁCH ĐIỀU TRỊ VIÊM DA Ở CHÓ</span>
<p>Sử dụng thuốc tiêm:</p>
<p>+ Lincoseptryl 1ml/5kg thể trọng. Hoặc tiêm Bivermectin 0.1% liều 1ml/2.5-3kg thể trọng tiêm dưới da. Mỗi tuần tiêm 1 lần và liên tục trong 3 tuần.</p>
<p>Tuy nhiên, với các giống chó nhạy cảm với thuốc Bivermectin như: Collie, Australian Sheepdog, Bobtail, Shetland Sheepdog, Whippet lông dài thì không sử dụng.</p>
<p> + Nếu tình trạng chó bị viêm da đã có mủ nên kháng viêm (kháng sinh) bằng Bio-amox LA với liều 1ml/10kg thể trọng tiêm bắp. Tiêm mỗi liều sau 2 ngày.</p>
<p>+ Sử dụng thuốc hỗ trợ bio-vitamin AD3E, Bio-metasal hoặc ADE.B complex1ml/10kg cho cún mau lành bệnh.</p>
<p>+ Kết hợp bôi Thuốc trị ghẻ nấm chó mèo Thivadimin. (Loại này giá chỉ 10k/lọ 10ml ngày bôi 2 lần liên tục trong 5-7 ngày). Hoặc Thuốc mỡ kẽm oxyd trị ghẻ nấm chó mèo (giá 49k/hộp 100ml.  Bôi liên tục ngày 2 lần trong 3-5 ngày).</p>
<p>Ngoài ra, bạn có thể sử dụng Dầu tắm trị ghẻ nấm cho chó Sleeky. Tắm cho chó tuần 1-2 lần để đạt hiệu quả chữa trị tốt nhất.</p>
<img src="https://meocun.com/wp-content/uploads/cho-bi-viem-da-dau-hieu-va-cach-dieu-tri-meocunpetshop-3a.jpg" alt="">
',
                'thumbnail'=>'cho-bi-viem-da-dau-hieu-va-cach-dieu-tri-meocunpetshop-4_tfa0dt',
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 8,
                'category_id' => '8',
                'create_by' => '8',
                'status' => 0,
                'title' => 'CHÓ MÈO NGỘ NGHĨNH VỚI NGHỆ THUẬT NHUỘM LÔNG',
                'description' => ' <h2 class="mb-3">CHÓ MÈO NGỘ NGHĨNH VỚI NGHỆ THUẬT NHUỘM LÔNG </h2>
<p>Hãy cùng meocun.com chiêm ngưỡng những hình ảnh chó mèo ngộ nghĩnh với nghệ thuật nhuộm lông tạo hình các con vật như hổ, ngựa, chim vẹt, công,… cực đáng yêu và rực rỡ sống động.</p>
<img src="https://meocun.com/wp-content/uploads/ngo-nghinh-voi-cho-meo-nhuom-long-meo-cun-pet-shop-6.jpg" alt="">
<img src="https://meocun.com/wp-content/uploads/ngo-nghinh-voi-cho-meo-nhuom-long-meo-cun-pet-shop-1.jpg" alt="">
<img src="https://meocun.com/wp-content/uploads/ngo-nghinh-voi-cho-meo-nhuom-long-meo-cun-pet-shop-2.jpg" alt="">
<img src="https://meocun.com/wp-content/uploads/ngo-nghinh-voi-cho-meo-nhuom-long-meo-cun-pet-shop-3.jpg" alt="">
<img src="https://meocun.com/wp-content/uploads/ngo-nghinh-voi-cho-meo-nhuom-long-meo-cun-pet-shop-5.jpg" alt="">
<img src="https://meocun.com/wp-content/uploads/ngo-nghinh-voi-cho-meo-nhuom-long-meo-cun-pet-shop-7.jpg" alt="">
<img src="https://meocun.com/wp-content/uploads/ngo-nghinh-voi-cho-meo-nhuom-long-meo-cun-pet-shop-8.jpg" alt="">
<img src="https://meocun.com/wp-content/uploads/ngo-nghinh-voi-cho-meo-nhuom-long-meo-cun-pet-shop-9.jpg" alt="">
<img src="https://meocun.com/wp-content/uploads/ngo-nghinh-voi-cho-meo-nhuom-long-meo-cun-pet-shop-10.jpg" alt="">
<img src="https://meocun.com/wp-content/uploads/ngo-nghinh-voi-cho-meo-nhuom-long-meo-cun-pet-shop-11.jpg" alt="">
<img src="https://meocun.com/wp-content/uploads/ngo-nghinh-voi-cho-meo-nhuom-long-meo-cun-pet-shop-12.jpg" alt="">
<img src="https://meocun.com/wp-content/uploads/ngo-nghinh-voi-cho-meo-nhuom-long-meo-cun-pet-shop-13.jpg" alt="">
<img src="https://meocun.com/wp-content/uploads/ngo-nghinh-voi-cho-meo-nhuom-long-meo-cun-pet-shop-18.jpg" alt="">
<img src="https://meocun.com/wp-content/uploads/ngo-nghinh-voi-cho-meo-nhuom-long-meo-cun-pet-shop-17.jpg" alt="">
<img src="https://meocun.com/wp-content/uploads/ngo-nghinh-voi-cho-meo-nhuom-long-meo-cun-pet-shop-16.jpg" alt="">
',
                'thumbnail'=>'ngo-nghinh-voi-cho-meo-nhuom-long-meo-cun-pet-shop-19_f0br74',
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 9,
                'category_id' => '9',
                'create_by' => '9',
                'status' => 1,
                'title' => 'BẮT ĐẦU NUÔI CHÓ CẦN NHỮNG VẬT DỤNG GÌ ?',
                'description' => ' <h2 class="mb-3">BẮT ĐẦU NUÔI CHÓ CẦN NHỮNG VẬT DỤNG GÌ ?</h2>
<p>Khi bắt đầu nuôi chó, bạn không chỉ tìm hiểu về các vấn đề kiến thức chăm sóc chó, giống loài bạn nuôi, tiêm phòng cho chó, mà thức ăn, dây xích, vòng cổ, các loại thuốc phòng chống ve rận, viêm tai, … đều là những vật dụng cần thiết mà bạn cần phải chuẩn bị đảm bảo chó có cuộc sống và sức khỏe tốt nhất.</p>
<img src="https://meocun.com/wp-content/uploads/vat-dung-can-thiet-khi-bat-dau-nuoi-cho-meocun-petshop-a.jpg" alt="">
<span style="font-size: 30px;font-weight: bold">1.</span> <span style="font-weight: bold">Thức ăn cho chó</span>
<p>Lựa chọn thức ăn phù hợp với chó của bạn: thức ăn chó con hay thức ăn cho chó trưởng thành, thức ăn khô hàng ngày, sữa, thức ăn bổ sung dinh dưỡng, bổ sung can xi, khoáng chất cần thiết khi chó của bạn là chó con đang lớn, hay chẳng may bị ốm, gãy xương, gầy còi xương, là chó săn, chó nghiệp vụ, rồi khi mang thai hoặc nuôi con nhỏ cần nhiều dinh dưỡng để mau lớn, mau phục hồi sức khỏe.</p>
<img src="https://meocun.com/wp-content/uploads/bo-sung-thuc-an-cho-cho-meo-meocun.jpg" alt="">
<span style="font-size: 30px;font-weight: bold">2.</span> <span style="font-weight: bold"> Đồ dùng vệ sinh, phụ kiện cho chó</span>
<p>Để chó luôn sạch sẽ, thơm tho, thì nhất định bạn phải tậu ngay các sản phẩm sữa tắm, phấn tắm khô, bàn chải lông chó. Còn bạn thích sắm cho em ý một ngôi nhà thật đáng yêu. Có nhiều kiểu nhà cho chó bằng bằng gỗ, sắt inox, nhựa siêu thậm chí bằng vải bông siêu cute, đủ loại màu sắc, kích cỡ to nhỏ cho chó loại nhỏ (chó nhật, fox, poodle) hay chó giống lớn (béc giê, chó ngao).</p>
<img src="https://meocun.com/wp-content/uploads/vat-dung-can-thiet-khi-bat-dau-nuoi-cho-meocun-petshop-aa.jpg" alt="">
<p>Có rất nhiều nhiều phụ kiện chó mèo bạn có thể cân nhắc cho cún cưng của mình như:</p>
<p>Dây xích chó (inox, sắt kim loại), dây dắt chó đi dạo (dây vải, dây dù).</p>
<p>Dây đeo cổ, vòng đeo cổ: Rất nhiều mẫu mã đẹp, màu sắc, chất liệu phong phú từ dây vải, dây dù, vòng sắt, inox kim loại,… vừa dùng để xích chó, dắt chó đi chơi, lại rất thời trang.</p>
<p>Rọ mõm chó: Để tránh trường hợp cún của bạn đánh dấu răng vào người khác khi đi ra đường hẳn rọ mõm chó là một đồ dùng, phụ kiện cho chó cực cần thiết rồi. Rọ mõm cũng có nhiều loại bằng da, bằng nhựa hoặc bằng sắt kim loại.</p>
<p> Túi đựng chó: nhiều màu sắc, kiểu dáng giống túi du lịch thời trang cực cute dành cho những chú cún con xinh xinh, yêu yêu.</p>
<p>Bát ăn cho chó: bát đơn, bát đôi cũng có nhiều loại màu sắc bắt mắt, nổi bật, chất liệu nhựa hoặc inox.</p>
<p>Điệu đà hơn, bạn có thể sắm cho chó của mình những bộ cánh ngộ nghĩnh đáng yêu mùa hè, đặc biệt vào mùa đông, những chiếc áo vừa giữ ấm lại vừa thời trang.</p>
<p>Nếu yêu chiều chúng hơn nữa thì những món đồ chơi, miếng nhai sạch răng thơm miệng, nhà vệ sinh, nệm êm cho chó chắc chắn chúng sẽ vô cùng thích thú và hưởng thụ thoải mái đấy.</p>
<span style="font-size: 30px;font-weight: bold">3.</span> <span style="font-weight: bold"> Tiêm phòng và những loại thuốc ký sinh trùng cần thiết </span>
<p>Nuôi chó hay mèo hay bất kỳ vật nuôi nào trong nhà điều bạn cần phải quan tâm đầu tiên đó chính là vấn đề tiêm phòng, phòng ngừa dịch bệnh và những chứng bệnh chúng thường gặp phải. Với chó, ngoài tiêm phòng dại thì bạn nên cho chó tiêm phòng các bệnh khác như cúm ho, sốt viruts, viêm gan, viêm ruột,…</p>
<p>Thêm vào đó, việc tẩy giun sán định kỳ cho chó một hoặc vài tháng một lần.</p>
<img src="https://meocun.com/wp-content/uploads/xit-ve-ran-bo-chet-cho-meo-meocun-petshop.jpg" alt="">
<p>Ngoài ra, ve rận, bọ chét, viêm tai và ký sinh trùng ở chó,… là những chứng bệnh chó thường hay mắc phải nên bạn cũng cần phải tìm hiểu và chuẩn bị sẵn thuốc ký sinh trùng phòng ngừa, điều trị.</p>
<p>Vì thế, hãy nhắm cho em cún cưng của bạn một bác sĩ giỏi, địa chỉ phòng khám uy tín mà thuận tiện, gần nhà bạn nhất để tiêm phòng, tư vấn chăm sóc, chữa trị hoặc phòng ngừa những trường hợp cấp cứu khác.</p>
',
                'thumbnail'=>'vat-dung-can-thiet-khi-bat-dau-nuoi-cho-meocun-petshop-a_atucym',
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 10,
                'category_id' => '10',
                'create_by' => '10',
                'status' => 1,
                'title' => 'LỢI ÍCH KHI NUÔI THÚ CƯNG VỚI BÉ YÊU',
                'description' => ' <h2 class="mb-3">LỢI ÍCH KHI NUÔI THÚ CƯNG VỚI BÉ YÊU</h2>
<span style="font-size: 30px;font-weight: bold">1.</span> <span style="font-weight: bold">Thú nuôi có giúp con bạn khỏe mạnh hơn?</span>
<p>Câu trả lời là có. Các nhà nghiên cứu Phần Lan đã đưa ra một kết luận thế này: “những chú chó nuôi trong nhà không chỉ là người bạn thân thiết của con người mà nó còn có thể giúp tăng cường khả năng miễn dịch ở trẻ sơ sinh để chống lại các căn bệnh về đường hô hấp và các bệnh nhiễm trùng khác”. Họ đã đưa ra những con số cho thấy tỷ lệ mắc bệnh nhiễm trùng tai, ho, chảy nước mũi của những em bé được sinh ra trong gia đình có vật nuôi thấp hơn hẳn so với những em bé được sinh ra và lớn lên trong những gia đình không hề nuôi một loài vật nào.</p>
<img src="https://meocun.com/wp-content/uploads/thu-cung-va-loi-ich-cho-be-yeu-meocun.jpg" alt="">
<p>Qua nghiên cứu này, các nhà khoa học cũng cho biết những em bé sinh ra trong các gia đình không nuôi con vật nào thường cần sử dụng nhiều thuốc kháng sinh để hỗ trợ hơn so với những em bé khác.</p>
<p>Kết quả công bố trên tạp chí Clinical and Experimental Allergy cho biết, những bé lớn lên với một bé thú cưng trong nhà sẽ giảm một nửa khả năng mắc phải các bệnh dị ứng và hen suyễn. Bởi lẽ, trong những năm đầu đời, hệ thống miễn dịch của trẻ sơ sinh vẫn còn đang trong quá trình nhận biết các vi sinh vật gây hại. Khi trẻ tiếp xúc với chó mèo mang theo vi khuẩn có lợi cho hệ miễn dịch, trẻ được tăng cường sức đề kháng cách rõ rệt.</p>
<p>Hơn thế, nếu bạn đồng ý cho bé yêu của mình chăm sóc một bé thú cưng nào đó, điều này còn mang lại những lợi ích tuyệt vời cho con của bạn nữa.</p>
<span style="font-size: 30px;font-weight: bold">2.</span> <span style="font-weight: bold"> Một chú cún có thể dạy trẻ rất nhiều kỹ năng trong cuộc sống.</span>
<p>Trẻ biết yêu thương và có trách nhiệm với người khác. Khi được làm bạn cùng cún yêu, trẻ gắn bó và coi chú cún ấy như người bạn của mình, cùng chia sẻ vui buồn, âu yếm và cùng nhau lớn lên. Trẻ yêu và học cách chăm sóc thú cưng, không để người bạn của mình bị bỏ đói hay cô đơn. Như vậy,trẻ học cách yêu và chăm sóc cho mọi người xung quanh qua người bạn của mình.</p>
<img src="https://meocun.com/wp-content/uploads/thu-cung-va-loi-ich-cho-be-do-dung-cho-cho-600x450.jpg" alt="">
<p>Chơi cùng cún con giúp trẻ năng động hơn. Những hoạt động ngoài trời cùng cún yêu sẽ giúp bé nô đùa, chạy nhảy thỏa thích làm tăng khả năng vận động của bé.</p>
<p>Một chú cún còn giúp bé yêu biết giữ lời hứa. Khi được bố mẹ cho phép nuôi một chú cún trong nhà, mỗi đứa trẻ luôn đặt ra những lời hứa để cùng thực hiện với cún yêu của mình. Như vậy, qua chú cún ấy, con bạn đang tập giữ lời hứa. Như vậy chẳng phải là một điều tuyệt vời lắm sao?</p>
<p>Thú cưng cũng giúp bé tự tin, có cảm giác an toàn và giảm căng thẳng nữa. Khi bị bố mẹ la mắng hay đánh đòn, trẻ thường có cảm giác không an toàn và tìm một chỗ kín để giấu mình đi. Nếu có cún làm bạn cùng con yêu, các bố mẹ đừng lo lắng về điều đó nhé. Bởi khi đó, trẻ chắc chắn sẽ tìm đến người bạn thân và trung thành nhất là cún yêu để “trút bầu tâm sự”, giúp trẻ lấy lại tự tin và cân bằng trong cuộc sống.</p>
<p>Nô đùa cùng thú cưng của mình ngoài trời, trẻ học cách ngắm nhìn thiên nhiên và con người xung quanh, trẻ sẽ yêu cuộc sống hơn vì ý thức được rằng, thế giới rộng lớn này không chỉ có con người, những đại lộ hay những tòa nhà cao chọc trời, mà còn có biết bao cảnh vật đẹp, biết bao những loài vật khác tồn tại quanh ta.</p>
<p> Nuôi thú cưng trong nhà có biết bao lợi ích cho con yêu mà nhiều khi chính các bố mẹ cũng không thể ngờ tới nhỉ? Trung thu sắp tới rồi, các bố mẹ đừng ngần ngại “ring” ngay một chú cún bông cực kỳ dễ thương và ngộ nghĩnh làm quà cho bé yêu nhé!</p>
',
                'thumbnail'=>'thu-cung-va-nhung-loi-ich-cho-be-meocun-2-700x450_qjmi8z',
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s')
            ],

        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

    }
}
