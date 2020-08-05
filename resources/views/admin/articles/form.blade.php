@extends('layout.layout-admin', ['current_page' => 'category-form'])
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
                <div class="col-2"></div>
                <div class="col-8">
                    <form action="/admin/articles" method="post" id="product_form">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">

                            </div>
                            <div class="form-group">
                                <label>Tiêu đề bài viết</label>
                                <input name="title" type="text" class="form-control" id="title">
                            </div>
                            <div class="form-group">
                                <label>Mô tả bài viết</label>
                                <textarea class="textarea" name="description"
                                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px;
                                           border: 1px solid rgb(221, 221, 221); padding: 10px; display: none;"></textarea>
                                <div class="form-group">
                                    <button type="button" id="upload_widget" class="btn btn-primary">Upload
                                        files
                                    </button>
                                    <div class="thumbnails">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <button style="border: white" class="btn-success" type="submit">Submit</button>
                                <button style="border: white" class="btn-danger" type="reset">Reset</button>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="col-2"></div>
                    </form>
                </div>


                {{--    <div class="container-fluid">--}}
                {{--<div class="col-md-12">--}}
                {{--    <form action="/admin/articles" method="post" id="product_form" >--}}
                {{--        @csrf--}}
                {{--        <div class="row">--}}
                {{--            <div class="col-md-6">--}}
                {{--                <div class="form-group">--}}
                {{--                    <label class="bmd-label-floating"></label>--}}
                {{--                    <input style="height: 3rem" type="text" class="form-control" name="title" placeholder="title">--}}
                {{--                </div>--}}
                {{--            </div>--}}
                {{--            <div class="col-md-3">--}}
                {{--                <div class="form-group">--}}
                {{--                    <label class="bmd-label-floating"></label>--}}
                {{--                    <input style="height: 3rem" type="text" class="form-control" name="create_by" placeholder="create_by">--}}
                {{--                </div>--}}
                {{--            </div>--}}
                {{--            <div class="col-md-3">--}}
                {{--                <div class="form-group">--}}
                {{--                    <label class="bmd-label-floating"></label>--}}
                {{--                    <input style="height: 3rem" type="text" class="form-control" name="category_id" placeholder="create_by">--}}
                {{--                </div>--}}
                {{--            </div>--}}
                {{--        <div class="col-md-9">--}}
                {{--            <div class="mb-3">--}}
                {{--                <textarea class="textarea" name="description" placeholder="Place some text here" style="height: 200px;width: 100%; font-size: 14px; line-height: 18px; border: 1px solid rgb(221, 221, 221); padding: 10px; display: none;">--}}

                {{--                </textarea>--}}
                {{--            </div>--}}
                {{--        </div>--}}
                {{--            <div class="col-md-6">--}}
                {{--                <div class="form-group">--}}
                {{--                    <button type="button" id="upload_widget" class="btn btn-primary">Upload--}}
                {{--                        files--}}
                {{--                    </button>--}}
                {{--                    <div class="thumbnails">--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--            </div>--}}
                {{--        <div class="col-md-9">--}}
                {{--            <div class="text-right">--}}
                {{--                <button type="submit" name="submit" class="btn btn-info">Submit</button>--}}
                {{--                <button type="reset" class="btn btn-dark">Reset</button>--}}
                {{--                <div class="clearfix"></div>--}}
                {{--            </div>--}}
                {{--        </div>--}}
                {{--        </div>--}}
                {{--    </form>--}}
                {{--</div>--}}
                {{--    </div>--}}
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



