@extends('layout.layout-admin', ['current_page' => 'article-categories-list'])
@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Danh mục bài viết</h3>
                </div>
                <div class="card-body">
                    <div class="dataTables_wrapper dt-bootstrap4">
                        <form action="/admin/article-categories" method="get" id="search-form">
                            <div class="row form-group">
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Tìm theo từ khóa !</label>
                                                <input name="keyword" value="{{$keyword}}" type="text" class="form-control" placeholder="Nhập từ khóa...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
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
                            </div>
                        </form>

                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-bordered table-hover dataTable dtr-inline">
                                    <thead>
                                    <tr>
                                        <th width="5%">Id</th>
                                        <th width="35%">Tên</th>
                                        <th width="25%">Ảnh đại diện</th>
                                        <th>Trạng thái</th>
                                        <th>Thao tác</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($list as $categories)
                                        <tr>
                                            <td>{{$categories->id}}</td>
                                            <td>{{$categories->name}}</td>
                                            <td>
                                                @foreach($categories->large_photos as $photo)
                                                    <img src="{{$photo}}" alt="" width="60px" height="60px"; style="border-radius: 100%">
                                                @endforeach
                                            </td>
                                            <td>
                                                {!! $categories->StatusString !!}
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-success">Detail
                                                </a>
                                                <a href="/admin/article-categories/{{$categories->id}}/edit" class="btn btn-primary">Edit</a>
                                                <a href="#" class="btn-delete btn btn-danger mr-1" id="delete-{{$categories->id}}">Delete</a>
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
            if (startTime === null || startTime.length == 0) {
                startTime = new Date();
            }
            if (endTime === null || endTime.length == 0) {
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
// .create(document.querySelector('#editor'))
// .then(editor => {
// console.log(editor);
// })
// .catch(error => {
// console.error(error);
// });
        });

    </script>
    <script>
        var token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        var btnDeletes =document.getElementsByClassName('btn-delete');
        for (let i = 0; i < btnDeletes.length; i++) {
            btnDeletes[i].onclick = function (){
                if (confirm('Are you sure')){
                    var id = this.getAttribute('id').replace('delete-', '');
                    var xmlHttpRequest = new XMLHttpRequest();
                    xmlHttpRequest.open('PUT','/delete/article-categories/'+id);
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
