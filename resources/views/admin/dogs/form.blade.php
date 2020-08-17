@extends('layout.layout-admin', ['current_page' => 'dog-form'])
@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Thêm mới chó</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <form action="/admin/dogs" method="post" id="product_form">
                                @csrf
                                <div class="row form-group">
                                    <div class="col-6">
                                        <label>Tên chó</label>
                                        <input name="name" type="text" class="form-control input-sm" placeholder="Nhập tên...">
                                        @if($errors->has('name'))
                                            <span class="text-danger">* {{$errors->first('name')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-6">
                                        <label>Giá tiền</label>
                                        <input name="price" type="text" class="form-control input-sm" placeholder="Nhập giá tiền...">
                                        @if($errors->has('price'))
                                            <span class="text-danger">* {{$errors->first('price')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-6">
                                        <label>Màu sắc</label>
                                        <input name="color" type="text" class="form-control input-sm" placeholder="Nhập màu sắc...">
                                        @if($errors->has('color'))
                                            <span class="text-danger">* {{$errors->first('color')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-6">
                                        <label>Giới tính</label>
                                        <select name="gender" class="custom-select">
                                            <option value="0">----Chọn giới tính----</option>
                                            <option value="1" >Male</option>
                                            <option value="2">Female</option>
                                        </select>
                                        @if($errors->has('gender'))
                                            <span class="text-danger">* {{$errors->first('gender')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-6">
                                        <label>Ngày sinh</label>
                                        <input name="birthday" type="text" class="form-control input-sm" placeholder="Nhập sinh nhật...">
                                        @if($errors->has('birthday'))
                                            <span class="text-danger">* {{$errors->first('birthday')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-6">
                                        <label>Giống loài</label>
                                        <select name="category_id" class="custom-select">
                                            <option value="0">All</option>
                                            @foreach($dogs as $dog)
                                                <option value="{{$dog->id}}">{{$dog->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row from-group">

                                </div>
                                <div class="form-group">
                                    <label>Mô tả chó</label>
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
                                    fieldName: 'thumbnail[]',
                                    thumbnails: '.thumbnails'
                                }, function (error, result) {
                                    if (!error && result && result.event === "success") {
                                        console.log('Done! Here is the image info: ', result.info.url);
                                        var arrayThumnailInputs = document.querySelectorAll('input[name="thumbnail[]"]');
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

