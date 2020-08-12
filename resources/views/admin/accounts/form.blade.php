@extends('layout.layout-admin', ['current_page' => 'account-form'])
@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Thêm mới account</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <form action="/admin/accounts" method="post" id="product_form">
                                @csrf
                                <div class="row form-group">
                                    <div class="col-6">
                                        <label>User Name</label>
                                        <input name="user_name" type="text" class="form-control input-sm" id="user_name">
                                        @if($errors->has('user_name'))
                                            <span class="text-danger">* {{$errors->first('user_name')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-6">
                                        <label>Password</label>
                                        <input name="password" type="password" class="form-control input-sm" id="password">
                                        @if($errors->has('password'))
                                            <span class="text-danger">* {{$errors->first('password')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-6">
                                        <label>Email</label>
                                        <input name="email" type="email" class="form-control input-sm" id="email">
                                        @if($errors->has('email'))
                                            <span class="text-danger">* {{$errors->first('email')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-6">
                                        <label>Full Name</label>
                                        <input name="full_name" type="text" class="form-control input-sm" id="full_name">
                                        @if($errors->has('full_name'))
                                            <span class="text-danger">* {{$errors->first('full_name')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-6">
                                        <label>Phone</label>
                                        <input name="phone" type="text" class="form-control input-sm" id="phone">
                                        @if($errors->has('phone'))
                                            <span class="text-danger">* {{$errors->first('phone')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-6">
                                        <label>Địa Chỉ</label>
                                        <input name="address" type="text" class="form-control input-sm" id="address">
                                        @if($errors->has('address'))
                                            <span class="text-danger">* {{$errors->first('address')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-3">
                                        <select name="role" class="custom-select">
                                            <option value="0">----Quyền Người Dùng----</option>
                                            <option value="1">User</option>
                                            <option value="2">Admin</option>
                                        </select>
                                        @if($errors->has('role'))
                                            <span class="text-danger">* {{$errors->first('role')}}</span>
                                        @endif
                                    </div>
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
    <script>
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
            .create( document.querySelector( '#editor' ) )
            .then( editor => {
                console.log( editor );
            } )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection


