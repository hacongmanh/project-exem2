@extends('home.layout.layout')
@section('title' , 'Chúng tôi | Pet sitting')
@section('menu-navbar')
    <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="/homes" class="nav-link">Trang chủ</a></li>
        <li class="nav-item "><a href="/about" class="nav-link">Chúng tôi</a></li>
        <li class="nav-item"><a href="/timeline" class="nav-link">Dòng thời gian</a></li>
        <li class="nav-item"><a href="/transfer" class="nav-link">Đăng tin</a></li>
        <li class="nav-item active"><a href="/blog" class="nav-link">Blog</a></li>
        <li class="nav-item"><a href="/contact" class="nav-link">Liên hệ</a></li>
    </ul>
@endsection
@section('main-content')
    <section class="hero-wrap hero-wrap-2">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ftco-animate pb-5 fadeInUp ftco-animated">
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Trang chủ <i class="ion-ios-arrow-forward"></i></a></span> <span> About<i class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-0 bread">Blog</h1>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('section')
    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ftco-animate fadeInUp ftco-animated">
                    <p>
                        <img src="images/image_1.jpg" alt="" class="img-fluid">
                    </p>
                    <h2 class="mb-3">Làm Đẹp Cho Chó</h2>
                    <p style="font-weight: bold">Cắt, tỉa, tắm và sấy khô ! Những mẹo nhỏ dưới đây sẽ giúp bạn vệ sinh thú cưng như một người chăm sóc chuyên nghiệp.

                        Chắc bạn đã từng thấy chú cún của bạn cuộn tròn trên mặt đất, liếm bộ lông hay chà sát bộ lông của chú trên tấm thảm ? Đó là cách để chú vệ sinh thân thể. Mặc dù vậy, chú cũng cần bàn tay chăm sóc của chủ để trở nên tinh tươm hơn</p>
                    <span style="font-size: 30px;font-weight: bold">1.</span> <span style="font-weight: bold"> Hãy tận hưởng thời gian vệ sinh cho thú cưng.</span>
                    <img src="https://ae01.alicdn.com/kf/HTB1ja82aQT2gK0jSZPcq6AKkpXaL/Cho-Th-c-ng-Ch-T-c-B-m-Rung-Th-p-v-Si-u-Im.jpg_q50.jpg" alt="">
                        <p>+ Hãy chắc rằng cả bạn và thú cưng đều có thời gian vui vẻ trong lúc vệ sinh. Vì vậy, hãy lên lịch vệ sinh vào lúc chú cún của bạn thư thái nhất, đặc biệt là với những chú cún hiếu động. Nếu chú cún của bạn chưa quen với việc tắm gội, nhớ rằng bạn chỉ nên vệ sinh chú trong khoảng 5-10 phút. Sau đó, bạn hãy tăng dần thời gian vệ sinh lên khi chú đã quen. Khi đã quen rồi, chắc chắn chú cún của bạn sẽ cảm thấy rất thoải mái khi được vệ sinh, thậm chí cả khi bạn chạm đến những nơi nhạy cảm nhất như tai, đuôi, bụng, lưng và chân.</p>
                        <p>+ Cuối cùng, nhớ thưởng cho chú một phần thưởng xứng đáng sau khi vệ sinh xong.</p>
                    <span style="font-size: 30px;font-weight: bold">2.</span> <span style="font-weight: bold">Chải chuốt</span>
                        <img src="https://www.petcity.vn/media/news/0807_luoc-chai-long-cho-poodle2.jpg" alt="">
                        <p> Thường xuyên chải chuốt lông cho chú cún để giúp cho lông chú luôn trong tình trạng tốt, Thêm vào đó, chải chuốt còn giúp loại bỏ các chất bẩn, trải đều dầu tự nhiên có sẵn trên da vật nuôi, ngăn ngừa rối lông và giữ cho da vật nuôi luôn sạch sẽ, không bị ngứa. Thời gian vệ sinh cũng là lúc tốt nhất cho bạn kiểm tra xem có bọ chét hay những chấm đen to nào không vì những chấm đen đó có thể là cả một gia đình nhà bọ đấy.</p>
                        <p> Nếu chú cún của bạn có một bộ lông mềm mượt và ngắn ( như giống chó Chihuahua, chó mặt xệ hay chó tai dài ), bạn chỉ nên vệ sinh một lần một tuần.</p>
                        <p>+ Đầu tiên, dùng bàn chải cao su để loại bỏ da chết và chất bẩn.</p>
                        <p>+  Kế tiếp, sử dụng bàn chải lông cứng để loại bỏ lông chết.</p>
                        <p>+ Cuối cùng, lau thú cưng bằng khăn lau kính.</p>
                        <p>Nếu chú cún của bạn có lông ngắn, dày và dễ bị rối vào nhau như một tấm thảm, bạn nên :</p>
                        <p>+ Sử dụng bàn chải tóc để loại bỏ rối</p>
                        <p>+ Kế tiếp, lấy lược cứng để loại bỏ lông chết.</p>
                        <p>+ Cuối cùng là chải đuôi.</p>
                        <p>Nếu chú cún của bạn có một bộ lông dài và sang trọng, ( ví dụ như giống chó săn cáo Yorkshire Terrier ) bạn nên chải lông hằng ngày cho chú.</p>
                        <p>+  Mỗi ngày bạn nên loại bỏ đám lông chết bằng bàn chải tóc.</p>
                        <p>+  Nhẹ nhàng gỡ đám lông rối cũng bằng bàn chải tóc</p>
                        <p>+ Kế tiếp, chải bộ lông với bàn chải cứng</p>
                        <p>Cuối cùng, nếu bạn có chú cún lông dài như giống Collie hay chó săn Afghan, bạn nên cắt tỉa thêm cả phần lông quanh bàn chân và cổ chân..</p>
                    <span style="font-size: 30px;font-weight: bold">3.</span> <span style="font-weight: bold">Tắm rửa</span>
                    <img src="https://trumboss.vn/wp-content/uploads/2018/10/7-loi-hay-gap-khi-tam-cho-cun-cung.jpg" alt="">
                    <p> Hiệp Hội Phòng Chống Ngược Đãi Thú Nuôi khuyến khích bạn nên tắm cho chú cún của bạn ít nhất 3 tháng/ lần; trong mùa hè, thú cưng nên được tắm thường xuyên hơn nếu chú chơi đùa nhiều ngoài trời. Bạn nên nhớ luôn luôn dùng loại xà bông tắm cho thú cưng, và làm theo các bước dưới đây :</p>
                    <p>+ Đầu tiên, hãy chải lông để loại bỏ hết những đám lông chết và rối.</p>
                    <p>+  Đặt một miếng lót bồn cao su trong chậu tắm để chú cún khỏi trơn trượt, và xả nước ấm khoảng 8-10cm.</p>
                    <p>+  Sử dụng một vòi rửa vệ sinh để làm ướt chú cún, nhớ đừng xịt trực tiếp vào mắt, tai và mũi. Nếu không có vòi xịt vệ sinh, bạn có thể thay thế bằng một cái bình nhựa hoặc một cái ly lớn.</p>
                    <p>+ Nhẹ nhàng mát-xa với xà-bông từ đầu đến đuôi.</p>
                    <p>+ Rửa sạch lại với vòi xịt, nhớ tránh mắt, tai và mũi.</p>
                    <p>+ Kiểm tra kỹ lại tai cún xem còn mùi hôi không ?; nếu bạn dùng bông tắm, nhớ đừng để bọt xà phòng vào trong tai của chú cún.</p>
                    <p>+ Lau khô chú cún bằng khăn hay một chiếc máy sấy, nhớ điều chỉnh độ nóng chiếc máy sấy cẩn thận.</p>
                    <p>* Chú ý : một vài thú cưng dường như nghĩ thời gian vệ sinh là để nô đùa. Đặc biệt những chú cún con sẽ ngọ nguậy lung tung và quấy lên trong khi bạn đang tắm cho chúng, nhiều thú cưng sẽ cắn đùa bạn. Nếu bạn gặp phải trường hợp trên, hãy để một đồ chơi vào trong bồn cho thú cưng nghịch.</p>
                    <span style="font-size: 30px;font-weight: bold">4.</span> <span style="font-weight: bold">Cắt móng chân</span>
                    <img src="https://dogily.vn/wp-content/uploads/2018/11/C%C3%A1ch_c%E1%BA%AFt_mong_cho_ch%C3%B3_-_Dogily_Spa_2.jpg" alt="">
                    <p> Hầu hết mọi người đều không chú ý lắm đến móng chân của thú cưng cho đến khi chung cần được làm móng thì… bạn nên coi chừng ! Vì một vài thú cưng có thể trở nên hung bạo với cảm giác lạ khi cắt móng chân. Để tránh trường hợp trên, bạn nên chạm thường xuyên vào chân của thú cưng trước khi cắt . Xoa từ từ lên xuống chân của thú cưng, sau đó thì ấn nhẹ vào các đầu ngón chân- nhớ khen thưởng thú cưng khi bạn xoa chân chúng. Sau khoảng 1-2 tuần mát-xa chân, bạn sẽ có thể cắt móng chân cho chú cún một cách dễ dàng hơn.Các bước để cắt móng chân cho thú cưng :</p>
                    <p>+ Đầu tiên, vạch các đầu ngón chân của thú cưng ra để tìm các vết bẩn và các vết nứt.</p>
                    <p>+  Dùng loại cắt móng tay có đầu vuông cắt từng ngón chân cho thú cưng theo một góc nhỏ, ngay tại điểm cong của móng, không nên cắt quá sâu.</p>
                    <p>+  Chú ý tránh đường mạch máu trong móng. Khu vực màu hồng có thể thấy được qua móng. Nếu chú cún của bạn có móng màu đen, Bạn sẽ rất khó thấy được khu vực mạch máu, vì vậy bạn phải rất cẩn thận khi cắt móng cho chú cún.</p>
                    <p>+ Nếu bạn chẳng may cắt trúng phải mạch máu và gây ra chảy máu. Trong trường hợp trên bạn cần nhanh chóng bôi bột cầm máu vào móng chân cho chú cún.</p>
                    <p>+ Cuối cùng, bạn lấy một cái dũa móng và dũa những góc nhọn của móng chân thú cưng.</p>
                    <span style="font-size: 30px;font-weight: bold">5.</span> <span style="font-weight: bold">Giống đặc biệt, chăm sóc đặc biệt</span>
                    <p>+ Những chú cún có da lỏng lẻo hoặc nhiều nếp nhăn - như giống Shar Peis hay Pugs (chó mặt xệ) – sẽ cần những chăm sóc đặc biệt. Bạn cần phải lau phần da nhăn với vải cotton ướt và luôn giữ cho phần da nhăn khô ráo, nhằm phòng tránh các vết bẩn, vi khuẩn. Hai tác nhân trên có thể làm cho chú cún của bạn bị dị ứng và nhiễm khuẩn.</p>
                    <p>+ Nếu chú cún của bạn có cặp tai dài và rũ xuống, bạn nên kiểm tra kỹ chúng hàng tuần. Loại bỏ sáp và chất bẩn khỏi tai thú cưng với một miếng bông ẩm hoặc bạn có thể dùng một ít dầu khoáng. Bạn sẽ cần phải cắt bỏ cả lông trong tai. Nhưng trước khi làm nhớ hỏi ý kiến từ bác sỹ và các chuyên gia vệ sinh vật nuôi. Theo các chuyên gia nhổ lông thú cưng, bạn chỉ nên nhổ một sợi trong một lần.</p>


                    {{--                    <h2 class="mb-3 mt-5"></h2>--}}

                    <p>
                        <img src="images/image_2.jpg" alt="" class="img-fluid">
                    </p>
                    <div class="about-author d-flex p-4 bg-light">
                        <div class="bio mr-5">
                            <img src="images/person_1.jpg" alt="Image placeholder" class="img-fluid mb-4">
                        </div>
                        <div class="desc">
                            <h3>George Washington</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
                        </div>
                    </div>
                    <div class="pt-5 mt-5">
                        <div class="comment-form-wrap pt-5">
                            <h3 class="mb-5">Leave a comment</h3>
                            <form action="#" class="p-5 bg-light">
                                <div class="form-group">
                                    <label for="name">Name *</label>
                                    <input type="text" class="form-control" id="name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email *</label>
                                    <input type="email" class="form-control" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="website">Website</label>
                                    <input type="url" class="form-control" id="website">
                                </div>

                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                                </div>

                            </form>
                        </div>
                    </div>

                </div> <!-- .col-md-8 -->
                <div class="col-lg-4 sidebar pl-lg-5 ftco-animate fadeInUp ftco-animated">
                    <div class="sidebar-box ftco-animate fadeInUp ftco-animated">
                        <h3>Recent Blog</h3>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url(https://hoc24.vn/images/avt/avt3012717_256by256.jpg);"></a>
                            <div class="text">
                                <h3 class="heading"><a href="/blog-home-1">Cách nuôi dạy chó</a></h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> 08-15-2020</a></div>
                                    <div><a href="#"><span class="icon-person"></span> Trần Thanh Phong</a></div>
                                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSSqywv_1N1mY-Di6NiNJPnVYi1bF8uTmMFzg&usqp=CAU;)"></a>
                            <div class="text">
                                <h3 class="heading"><a href="/blog-home-2">Thực phẩm rành riêng cho chó</a></h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> 08-15-2020</a></div>
                                    <div><a href="#"><span class="icon-person"></span> Trần Thanh Phong</a></div>
                                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTp3Wv0je-gA1SjZmXNp0DfrJZxCQeVey_ZPQ&usqp=CAU);"></a>
                            <div class="text">
                                <h3 class="heading"><a href="/blog-home-3">Cách chăm sóc làm đẹp cho chó cưng</a></h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> 08-15-2020</a></div>
                                    <div><a href="#"><span class="icon-person"></span> Trần Thanh Phong</a></div>
                                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection

