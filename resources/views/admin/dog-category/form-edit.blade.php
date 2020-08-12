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
                            <form action="/admin/dogs-categories/{{$obj->id}}" method="post" id="product_form">
                                @method('put')
                                @csrf
                                <div class="row form-group">
                                    <div class="col-6">
                                        <label>Tên Chó</label>
                                        <input type="text" class="form-control" id="exampleFormControlTextarea1"
                                               name="name" value="{{$obj->name}}"/>
                                        @if($errors->has('name'))
                                            <span class="text-danger">* {{$errors->first('name')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-4">
                                        <select name="breedType" class="custom-select">
                                            <option value="0">---- Chọn loại chó ----</option>
                                            @foreach( $breed_categories  as $cate)
                                                <option value="{{$cate->id}}" {{$cate->id == $obj->breedType ? 'selected' : ''}}>{{$cate->name}}</option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('category_id'))
                                            <span class="text-danger">* {{$errors->first('category_id')}}</span>
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





