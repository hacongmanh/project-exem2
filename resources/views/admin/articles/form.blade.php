@extends('layout.layout-admin', ['current_page' => 'article-form'])
@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Thêm mới article</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <form action="/admin/articles" method="post" id="product_form">
                                @csrf
                                <div class="row form-group">
                                    <div class="col-6">
                                        <label>Tiêu đề bài viết</label>
                                        <input name="title" type="text" class="form-control input-sm" id="title">
                                        @if($errors->has('title'))
                                            <span class="text-danger">* {{$errors->first('title')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-4">
                                        <select name="category_id" class="custom-select">
                                            <option value="0">---- Chọn giống chó ----</option>
                                            @foreach( $article_categories  as $cate)
                                                <option value="{{$cate->category_id}}" >{{$cate->name}}</option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('category_id'))
                                            <span class="text-danger">* {{$errors->first('category_id')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Mô tả bài viết</label>
                                    <textarea class="form-control" id="text-editor" rows="8"
                                              name="description"></textarea>
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
                                <div class="form-group">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                    <button class="btn btn-danger" type="reset">Reset</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
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
            .create(document.querySelector('#text-editor'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.log('Error');
            });
    </script>

@endsection
