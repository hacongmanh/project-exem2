@extends('layout.layout-admin')
@section('style')
    <style>
        .note-editable{
            height: 200px!important;
        }
    </style>
@endsection
@section('main-content')
 quan-assment-8/8
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Thêm mới chó</h3>

    <div class="container-fluid">
        <div class="col-md-12">
 update
        <form action="/admin/dogs" method="post" id="product_form">

        <form action="/admin/dog" method="post" id="product_form">
 master
            @csrf
            <div class="row">
                <div class="col-md-9">
                    <div class="form-group">
                        <label class="bmd-label-floating"></label>
                        <input style="height: 3rem" type="text" class="form-control" name="name" placeholder="title">
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="form-group">
                    <label class="bmd-label-floating"></label>
                    <input style="height: 3rem" type="text" class="form-control" name="price" placeholder="price">
                </div>
            </div>
            <div class="col-md-9">
                <div class="form-group">
                    <label class="bmd-label-floating"></label>
                    <input style="height: 3rem" type="text" class="form-control" name="birthday" placeholder="birthday">
                </div>
            </div>       <div class="col-md-9">
                <div class="form-group">
                    <label class="bmd-label-floating"></label>
                    <input style="height: 3rem" type="text" class="form-control" name="mother_id" placeholder="mother">
                </div>
            </div>
            <div class="col-md-9">
                <div class="form-group">
                    <label class="bmd-label-floating"></label>
                    <input style="height: 3rem" type="text" class="form-control" name="father_id" placeholder="birthday">
                </div>
            </div>
            <div class="col-md-9">
                <div class="form-group">
                    <label class="bmd-label-floating"></label>
                    <input style="height: 3rem" type="text" class="form-control" name="breedType" placeholder="birthday">
                </div>
            </div>
            <div class="col-md-9">
                <div class="form-group">
                    <label class="bmd-label-floating"></label>
                    <input style="height: 3rem" type="text" class="form-control" name="gender" placeholder="gender">
                </div>
            </div>
            <div class="col-md-9">
                <div class="form-group">
                    <label class="bmd-label-floating"></label>
                    <input style="height: 3rem" type="text" class="form-control" name="category_id" placeholder="gender">
 master
                </div>
                <div class="card-body">
                    <div class="dataTables_wrapper dt-bootstrap4">
                        <form action="/admin/dog" method="post" id="product_form" >
                        @csrf
                            <div class="row">
{{--                                    <div class="row row-space">--}}
                                        <div class="col-6">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="input-group">
                                                        <label class="label">Tên chó</label>
                                                        <input class="input-group" type="text" name="keyword" placeholder="Dog name">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="input-group">
                                                        <label class="label">Ngày sinh</label>
                                                        <div class="input-group">
                                                            <input class="input-group js-datepicker" type="text" name="keyword" placeholder="Birth day">
                                                            <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                            </div>
                            <div class="row" style="margin-top: 10px">
                                <div class="col-2">
                                    <label class="label">Gender</label>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="input-group">
                                                    <div class="p-t-10">
                                                        <label class="radio-container m-r-45">Male
                                                            <input type="radio" checked="checked" name="gender">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="radio-container" style="margin-left:10px">Female
                                                            <input type="radio" name="gender">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
{{--
{{--                            </div>--}}
{{--                                    <div class="row row-space">--}}

{{--                                    </div>--}}

                            <div class="row">
                                {{--                                    <div class="row row-space">--}}
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="input-group">
                                                <label class="label">Email</label>
                                                <input class="input-group" type="email" name="keyword" placeholder="Email">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="input-group">
                                                <label class="label">Số điện thoại</label>
                                                <input class="input-group" type="text" name="keyword" placeholder="Phone Number">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </form>
                                    <div class="row row-space" style="margin-top: 10px">
                                        <div class="col-2">
                                            <div class="input-group">
                                                <label class="label">Giống chó</label>
                                                <div class="rs-select2 js-select-simple select--no-search">
                                                    <select name="subject" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true">
                                                        <option disabled="disabled" selected="selected">Please Choose</option>
                                                        <option>Chó Pug</option>
                                                        <option>Chó Poodle</option>
                                                        <option>Chó Beagle</option>
                                                        <option>Chó Chihuahua</option>
                                                        <option>Chó Bully</option>
                                                        <option>Chó Corgi</option>
                                                        <option>Chó Doberman</option>
                                                        <option>Chó Ngao Tây Tạng</option>
                                                        <option>Chó Pitbull</option>
                                                        <option>Chó Yorkshire</option>
                                                        <option>Khác</option>
                                                    </select>
                                                    <span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" style="width: 110px;">
                                                        <span class="selection">
                                                            <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-subject-v1-container">
                                                                <span class="select2-selection__rendered" id="select2-subject-v1-container" title="Choose option">???</span>
                                                                    <span class="select2-selection__arrow" role="presentation">
                                                                        <b role="presentation"></b>
                                                                    </span>
                                                            </span>
                                                        </span>
                                                            <span class="dropdown-wrapper" aria-hidden="true">

                                                            </span>
                                                    </span>
                                                    <div class="select-dropdown"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
{{--                                    <div class="p-t-15">--}}
{{--                                        <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>--}}
{{--                                    </div>--}}
                            </div>

                            {{--{{}}--}}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                            <textarea class="textarea" name="description" placeholder="Place some text here" style="height: 200px;width: 100%; font-size: 14px; line-height: 18px; border: 1px solid rgb(221, 221, 221); padding: 10px; display: none;">

                            </textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <button type="button" id="upload_widget" class="btn btn-primary">Upload files</button>
                                        <div class="thumbnails"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="text-right">
                                        <button type="submit" name="submit" class="btn btn-info">Submit</button>
                                        <button type="reset" class="btn btn-dark">Reset</button>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--    <div class="container-fluid">--}}
{{--        <div class="col-md-12">--}}
{{--            --}}
{{--                --}}
{{--                <div class="row">--}}

{{--                    <div class="card-body">--}}

{{--                    </div>--}}
{{--                </div>--}}


{{--                    <div class="col-md-6">--}}
{{--                        <div class="form-group">--}}
{{--                            <label class="bmd-label-floating"></label>--}}
{{--                            <input style="height: 3rem" type="text" class="form-control" name="title" placeholder="title">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-3">--}}
{{--                        <div class="form-group">--}}
{{--                            <label class="bmd-label-floating"></label>--}}
{{--                            <input style="height: 3rem" type="text" class="form-control" name="create_by" placeholder="create_by">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-3">--}}
{{--                        <div class="form-group">--}}
{{--                            <label class="bmd-label-floating"></label>--}}
{{--                            <input style="height: 3rem" type="text" class="form-control" name="category_id" placeholder="create_by">--}}
{{--                        </div>--}}
{{--                    </div>--}}

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
                        fieldName: 'thumbnail[]',
                        thumbnail: '.thumbnail'
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
                    .create( document.querySelector( '#editor' ) )
                    .then( editor => {
                        console.log( editor );
                    } )
                    .catch( error => {
                        console.error( error );
                    } );
            </script>
@endsection



