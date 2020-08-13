@extends('layout.layout-admin', ['current_page' => 'dog-edit'])
@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Sửa sản phẩm</h3>
                    <div>{{$keyword}}</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <form action="/admin/dogs/{{$obj->id}}" method="post" id="product_form">
                                @method('PUT')
                                @csrf
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Tìm theo từ khóa !</label>
                                                <input name="keyword" value="{{$keyword}}" type="text" class="form-control" placeholder="Nhập từ khóa...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <button class="invisible">Submit</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-6">
                                        <label>Tên chó</label>
                                        <input name="name" type="text" class="form-control input-sm" value="{{$obj->name}}" placeholder="Nhập tên...">
                                        @if($errors->has('name'))
                                            <span class="text-danger">* {{$errors->first('name')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-6">
                                        <label>Giá tiền</label>
                                        <input name="price" type="text" class="form-control input-sm" value="{{$obj->price}}" placeholder="Nhập giá tiền...">
                                        @if($errors->has('price'))
                                            <span class="text-danger">* {{$errors->first('price')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-6">
                                        <label>Màu sắc</label>
                                        <input name="color" type="text" class="form-control input-sm" value="{{$obj->color}}" placeholder="Nhập màu sắc...">
                                        @if($errors->has('color'))
                                            <span class="text-danger">* {{$errors->first('color')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-6">
                                        <label>Giới tính</label>
                                        <input name="gender" type="text" class="form-control input-sm" value="{{$obj->gender}}" placeholder="Nhập giới tính...">
                                        @if($errors->has('gender'))
                                            <span class="text-danger">* {{$errors->first('gender')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-12">
                                        <label>Nội dung bài viết</label>
                                        <textarea class="form-control" id="text-editor" rows="8" name="description">{!! $obj->description !!}
</textarea>
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
                                            <option value="2">----Trạng thái----</option>
                                            <option value="1" {{$obj->status == 1 ? 'selected': ''}}>Duyệt Bài</option>
                                            <option value="0" {{$obj->status == 0 ? 'selected': ''}}>Không Duyệt</option>
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
