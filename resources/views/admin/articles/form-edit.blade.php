@extends('layout.layout-admin', ['current_page' => 'article-edit'])
@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Sửa article</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <form action="/admin/articles/{{$obj->id}}" method="post" id="product_form">
                                @method('put')
                                @csrf
                                <div class="row form-group">
                                    <div class="col-6">
                                        <label>Tiêu đề bài viết</label>
                                        <input type="text" class="form-control" id="exampleFormControlTextarea1"
                                               name="title" value="{{$obj->title}}"/>
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
                                                <option value="{{$cate->id}}" {{$cate->id == $obj->category_id ? 'selected' : ''}}>{{$cate->name}}</option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('category_id'))
                                            <span class="text-danger">* {{$errors->first('category_id')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-12">
                                        <label>Mô tả bài viết</label>
                                        <textarea class="form-control" id="text-editor" rows="8"
                                                  name="description">{{$obj->description}}</textarea>
                                        @if($errors->has('description'))
                                            <span class="text-danger">* {{$errors->first('description')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-12">
                                        <button type="button" id="upload_widget" class="btn btn-success">Upload
                                            files
                                        </button>
                                        <div class="thumbnails">
                                            <ul class="cloudinary-thumbnails">
                                                @foreach($obj->preview_photos as $preview)
                                                    <li class="cloudinary-thumbnail active">
                                                        <img src="{{$preview}}" alt="">
                                                        <a href="javascript:void(0)" class="cloudinary-delete">x</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-3">
                                        <select name="status" class="custom-select">
                                            <option value="{{$obj->status}}">----Trạng thái bài viết----</option>
                                            <option value="1">Duyệt Bài</option>
                                            <option value="0">Không Duyệt</option>
                                        </select>
                                        @if($errors->has('status'))
                                            <span class="text-danger">* {{$errors->first('status')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row form-actions">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="reset" class="btn btn-dark">Reset</button>
                                    </div>
                                </div>
                                @foreach($obj->photo_ids as $id)
                                    <input type="hidden" name="thumbnails[]" data-cloudinary-public-id="{{$id}}"
                                           value="{{$id}}">
                                @endforeach
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
            $(this).parent().remove();
        });
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#text-editor'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection





