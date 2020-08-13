@extends('layout.layout-admin', ['current_page' => 'dogs-categories-list'])
@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Danh sách danh mục chó</h3>
                </div>
                <div class="card-body">
                    <div class="dataTables_wrapper dt-bootstrap4">
                        <form action="/admin/dogs-categories" method="get" id="search-form">
                            <div class="row">
                                <div class="col-5">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Tìm theo danh mục</label>
                                                <select name="category_id" class="custom-select">
                                                    <option value="0">All</option>
                                                    @foreach($dogs_categories as $cate)
                                                        <option value="{{$cate->id}}"  {{$cate->id == $category_id ? 'selected':''}} >{{$cate->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Tìm theo từ khóa</label>
                                                <input name="keyword" value="{{$keyword}}" type="text"
                                                       class="form-control" placeholder="Enter keyword to search">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-7">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Tìm theo thời gian tạo</label>
                                                <input type="text" class="form-control" name="dates">
                                                <input type="hidden" name="start">
                                                <input type="hidden" name="end">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <button class="invisible">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-bordered table-hover dataTable dtr-inline">
                                    <thead>
                                    <th>ID</th>
                                    <th>Tên loại chó</th>
                                    <th>Ảnh đại diện</th>
                                    <th>Ngày cập nhật</th>
                                    <th>Loại Chó</th>
                                    <th>Thao tác</th>
                                    </thead>
                                    <tbody>
                                    @foreach($list as $dogs_categories)
                                        <tr>
                                            <td>{{$dogs_categories->id}}</td>
                                            <td>{{$dogs_categories->name}}</td>
                                            <td style=" width: 160px;">
                                                @foreach($dogs_categories->large_photos as $photo )
                                                    <img style="border-radius: 100%;width: 50px;height: 50px;"
                                                         src="{{$photo}}" class="card-img-top" alt="...">
                                                @endforeach
                                            </td>
                                            <td>{{$dogs_categories->updated_at}}</td>
                                            <td>
                                                {{ $dogs_categories->dogCategoryString}}
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-success">Detail
                                                </a>
                                                <a href="/admin/dogs-categories/{{$dogs_categories->id}}/edit" class="btn btn-primary">Edit</a>
                                                <a href="#" class=" btn-delete text-danger mr-1" id="delete-{{$dogs_categories->id}}">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-5"></div>
                            <div class="col-sm-12 col-md-7">
                                <div class="dataTables_paginate paging_simple_numbers">
                                    {{$list->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        $(document).ready(function () {
            var myWidget = cloudinary.createUploadWidget(
                {
                    cloudName: 'dzpmsbjzh',
                    uploadPreset: 'atlr6nn5',
                    multiple: true,
                    form: '#product_form',
                    fieldName: 'thumbnails[]',
                    thumbnails: '.thumbnails'
                }, function (error, result) {
                    if (!error && result && result.event === "success") {
                        console.log('Done! Here is the image info: ', result.info.url);
                        var arrayThumnailInputs = document.querySelectorAll('input[name="thumbnails[]"]');
                        for (let i = 0; i < arrayThumnailInputs.length; i++) {
                            arrayThumnailInputs[i].value = arrayThumnailInputs[i].getAttribute('data-cloudinary-public-id');
                        }
                    }
                }
            );
            $('#upload_widget').click(function () {
                myWidget.open();
            })
            // xử lý js trên dynamic content.
            $('body').on('click', '.cloudinary-delete', function () {
                var splittedImg = $(this).parent().find('img').attr('src').split('/');
                var imgName = splittedImg[splittedImg.length - 1];
                imgName = imgName.replace('.jpg', '');
                $('input[data-cloudinary-public-id="' + imgName + '"]').remove();
            });
            $('select[name="category_id"]').change(function () {
                $('#search-form').submit();
            })
            // lấy tham số start và end date từ đường dẫn trên trình duyệt
            var url = new URL(location.href);
            var startTime = url.searchParams.get("start");
            var endTime = url.searchParams.get("end");
            if (startTime === null || startTime.length === 0) {
                startTime = new Date();
            }
            if (endTime === null || endTime.length === 0) {
                endTime = new Date();
            }
            $('input[name="start"]').val(moment(startTime).format('YYYY-MM-DD'));
            $('input[name="end"]').val(moment(endTime).format('YYYY-MM-DD'));
            $('input[name="dates"]').daterangepicker(
                {
                    startDate: moment(startTime).format('DD/MM/YYYY'),
                    endDate: moment(endTime).format('DD/MM/YYYY'),
                    locale: {
                        format: 'DD/MM/YYYY'
                    },
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    }
                }
            );
            $('input[name="dates"]').on('apply.daterangepicker', function (ev, picker) {
                $('input[name="start"]').val(picker.startDate.format('YYYY-MM-DD'));
                $('input[name="end"]').val(picker.endDate.format('YYYY-MM-DD'));
                $('#search-form').submit();
            });

            // ClassicEditor
            //     .create(document.querySelector('#editor'))
            //     .then(editor => {
            //         console.log(editor);
            //     })
            //     .catch(error => {
            //         console.error(error);
            //     });
        });
        var token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        var btnDeletes =document.getElementsByClassName('btn-delete');
        for (let i = 0; i < btnDeletes.length; i++) {
            btnDeletes[i].onclick = function (){
                if (confirm('Are you sure')){
                    var id = this.getAttribute('id').replace('delete-', '');
                    var xmlHttpRequest = new XMLHttpRequest();
                    xmlHttpRequest.open('PUT','/delete/dog-category/'+id);
                    xmlHttpRequest.setRequestHeader('X-CSRF-TOKEN', token);
                    xmlHttpRequest.onreadystatechange = function (){
                        if (this.readyState == 4){
                            if(this.status == 200){
                                alert('Confirm success')
                                location.reload();
                            }else {
                                alert('Action fails!!')
                            }
                        }
                    }
                    xmlHttpRequest.send();
                }
            }
        }
    </script>
@endsection
