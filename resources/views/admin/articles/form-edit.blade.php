@extends('layout.layout-admin', ['current_page' => 'article-form'])
@section('style')
    <style>
        .note-editable {
            height: 200px !important;
        }
    </style>
@endsection
@section('main-content')
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10">
                    <form action="/admin/articles" method="post" id="product_form">
                        @csrf
                        <div class="card col-12">
                            <div class="form-group">

                            </div>
                            <div class="form-group">
                                <label>Tiêu đề bài viết</label>
                                <input name="title" type="text" class="form-control" id="title" value="{{$obj->title}}">
                                @if($errors->has('title'))
                                    <span class="text-danger">* {{$errors->first('title')}}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <select name="category_id" class="custom-select">
                                    <option value="0">Loại Chó</option>
                                    @foreach( $article_categories  as $cate)
                                        <option
                                            value="{{$cate->id}}" {{$cate->id == $obj->category_id ? 'selected' : ''}}>{{$cate->name}}</option>
                                    @endforeach
                                    @if($errors->has('category_id'))
                                        <span class="text-danger">* {{$errors->first('category_id')}}</span>
                                    @endif
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Mô tả bài viết</label>
                                <textarea class="textarea" name="description"
                                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px;
                                           border: 1px solid rgb(221, 221, 221); padding: 10px; display: none;">
                                   </textarea>
                                @if($errors->has('description'))
                                    <span class="text-danger">* {{$errors->first('description')}}</span>
                                @endif
                                <div class="form-group">
                                    <button type="button" id="upload_widget" class="btn btn-primary">Upload
                                        files
                                    </button>
                                    <div class="thumbnails">
                                    </div>
                                </div>
                            </div>
                            <div style="align-self: center;">
                                <button style="border: white" class="btn-success" type="submit">Submit</button>
                                <button style="border: white" class="btn-danger" type="reset">Reset</button>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="col-1"></div>
                    </form>
                </div>

                @endsection
                @section('script')
                    <script src="https://widget.cloudinary.com/v2.0/global/all.js" type="text/javascript"></script>
                    <script src="https://cdn.ckeditor.com/ckeditor5/20.0.0/classic/ckeditor.js"></script>
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
                            .create(document.querySelector('#editor'))
                            .then(editor => {
                                console.log(editor);
                            })
                            .catch(error => {
                                console.error(error);
                            });
                    </script>

                  
@endsection




