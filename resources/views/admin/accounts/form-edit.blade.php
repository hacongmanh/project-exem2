@extends('layout.layout-admin', ['current_page' => 'account-edit'])
@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Sửa Account</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <form action="/admin/accounts/{{$obj->id}}" method="post" id="product_form">
                                @method('put')
                                @csrf
                                <div class="row form-group">
                                    <div class="col-6">
                                        <label>Tài Khoản</label>
                                        <input type="text" class="form-control" id="exampleFormControlTextarea1"
                                               name="user_name" value="{{$obj->user_name}}"/>
                                        @if($errors->has('user_name'))
                                            <span class="text-danger">* {{$errors->first('user_name')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-6">
                                        <label>Email</label>
                                        <input type="email" class="form-control" id="exampleFormControlTextarea1"
                                               name="email" value="{{$obj->email}}"/>
                                        @if($errors->has('email'))
                                            <span class="text-danger">* {{$errors->first('email')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-6">
                                        <label>Tên đầy đủ</label>
                                        <input type="text" class="form-control" id="exampleFormControlTextarea1"
                                               name="full_name" value="{{$obj->full_name}}"/>
                                        @if($errors->has('full_name'))
                                            <span class="text-danger">* {{$errors->first('full_name')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-6">
                                        <label>Số Điện Thoại</label>
                                        <input type="text" class="form-control" id="exampleFormControlTextarea1"
                                               name="phone" value="{{$obj->phone}}"/>
                                        @if($errors->has('phone'))
                                            <span class="text-danger">* {{$errors->first('phone')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-6">
                                        <label>Địa Chỉ</label>
                                        <input type="text" class="form-control" id="exampleFormControlTextarea1"
                                               name="address" value="{{$obj->address}}"/>
                                        @if($errors->has('address'))
                                            <span class="text-danger">* {{$errors->first('address')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-3">
                                        <select name="role" class="custom-select">
                                            <option value="{{$errors->role}}">----Quyền Người Dùng----</option>
                                            <option value="1" {{$obj->role == 1 ? 'selected': ''}}>User</option>
                                            <option value="0" {{$obj->role == 2 ? 'selected': ''}}>Admin</option>
                                        </select>
                                        @if($errors->has('role'))
                                            <span class="text-danger">* {{$errors->first('role')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-3">
                                        <select name="status" class="custom-select">
                                            <option value="2">----Trạng thái----</option>
                                            <option value="1" {{$obj->status == 1 ? 'selected': ''}}>Đang hoạt động</option>
                                            <option value="0" {{$obj->status == 0 ? 'selected': ''}}>Không hoạt động</option>
                                        </select>
                                        @if($errors->has('status'))
                                            <span class="text-danger">* {{$errors->first('status')}}</span>
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
            var splittedImgName = imgName.split('.');
            var imgCode = splittedImgName[0];
            $('input[data-cloudinary-public-id="' + imgCode + '"]').remove();
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





