@extends('layout.layout-admin')
@section('main-content')
    <div class="card-body">
        <form action="/admin/form/account" method="post" id="product_form">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="bmd-label-floating"></label>
                        <input type="text" class="form-control" name="user_name"  placeholder="user_name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="bmd-label-floating"></label>
                        <input type="password" class="form-control" name="password" placeholder="password">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="bmd-label-floating"></label>
                        <input type="email" class="form-control" name="email" placeholder="email">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="bmd-label-floating"></label>
                        <input type="text" class="form-control" name="full_name" placeholder="full_name">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="bmd-label-floating"></label>
                        <input type="text" class="form-control" name="address" placeholder="address">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <button type="button" id="upload_widget" class="btn btn-primary">Upload files
                        </button>
                        <div class="thumbnail">

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="bmd-label-floating"></label>
                        <input type="text" class="form-control" name="phone" placeholder="phone">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">

                        <div class="form-group">

                        </div>
                    </div>
                </div>

                <div class="form-actions">
                    <div class="text-right">
                        <button type="submit" class="btn btn-info">Submit</button>
                        <button type="reset" class="btn btn-dark">Reset</button>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
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
            .create( document.querySelector( '#editor' ) )
            .then( editor => {
                console.log( editor );
            } )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection

