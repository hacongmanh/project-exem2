@extends('layout.layout-admin', ['current_page' => 'article-categories-form'])
@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Thêm mới danh mục</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <form action="/admin/article-categories" method="post" id="product_form">
                                @csrf
                                <div class="row form-group">
                                    <div class="col-6">
                                        <label>Tên danh mục bài viết</label>
                                        <input name="name" type="text" class="form-control input-sm" placeholder="Nhập tên...">
                                        @if($errors->has('name'))
                                            <span class="text-danger">* {{$errors->first('name')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Nội dung bài viết</label>
                                    <textarea class="form-control" id="text-editor" rows="8"
                                              name="description" placeholder="Nhập nội dung..."></textarea>
                                    @if($errors->has('description'))
                                        <span class="text-danger">* {{$errors->first('description')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <button type="button" id="upload_widget" class="btn btn-success">Upload
                                        files
                                    </button>
                                    <div class="thumbnails">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-right">
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                        <button class="btn btn-danger" type="reset">Reset</button>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    @endsection
                    @section('script')
                        <script type="text/javascript">
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
                        </script>
                        <script>
                            ClassicEditor
                                .create( document.querySelector('#text-editor') )
                                .then( editor => {
                                    console.log( editor );
                                } )
                                .catch( error => {
                                    console.error( error );
                                } );
                        </script>

@endsection
