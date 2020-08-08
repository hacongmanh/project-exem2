@extends('layout.layout-admin', ['current_page' => 'categories-list'])
@section('main-content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Danh mục</h3>
            </div>
            <div class="card-body">
                <div class="dataTables_wrapper dt-bootstrap4">
                    <form action="/admin/article-categories" method="get" id="search-form">
                        <div class="row">
                            <div class="col-3">
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
                                    <th>Id</th>
                                    <th width="35%">Tiêu đề</th>
                                    <th width="35%">Ảnh đại diện</th>
                                    <th>Thao tác</th>
                                </thead>
                                <tbody>
                                @foreach($obj as $category)
                                    <tr>
                                        <td>{{$category->id}}</td>
                                        <td>{{$category->name}}</td>
                                        <td>
                                        @foreach($category->large_photos as $photo)
                                        <img src="{{$photo}}" alt="" width="100px" height="100px">
                                        @endforeach
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-success">Detail</a>
                                            <a href="#" class="btn btn-primary">Edit</a>
                                            <a href="#" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
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
            ClassicEditor
                .create(document.querySelector('#editor'))
                .then(editor => {
                    console.log(editor);
                })
                .catch(error => {
                    console.error(error);
                });
        });

    </script>
@endsection