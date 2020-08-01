@extends('layout.layoutadmin')
@section('main-content')


    <div class="card card-plain">
        <div class="card-header card-header-primary">
            <h4 class="card-title mt-0"> Featured posts</h4>
        </div>
        <div class="">
            <form action="">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1"></label>
                        <input value="" type="text" name="keyword" class="form-control" placeholder="Search by keyword">
                        <input type="submit" style="visibility: hidden;"/>
                    </div>
                </div>
            </form>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="">
                        <th>
                            ID
                        </th>
                        <th>
                            Title
                        </th>
                        <th>
                            Description
                        </th>
                        <th>
                            Thumbnail
                        </th>
                        <th>
                            Status
                        </th>
                        <th>
                            Create_at
                        </th>
                        <th>
                            Update_at
                        </th>
                        <th>
                            Details
                        </th>
                        <th>

                        </th>
                        </thead>
                        <tbody>
                        @foreach($list as $articles)
                            <tr>
                                <td>
                                    <p class="card-text">
                                        {{$articles->id}} &nbsp;
                                    </p>
                                </td>
                                <td><p class="card-title" style="height:75px;overflow: hidden">{{$articles->title}} &nbsp;</p></td>
                                <td><p class="card-title" style="height:75px;overflow: hidden">{{$articles->description}} &nbsp;</p></td>
                                <td>
                                    @foreach($articles->large_photos as $photo )
                                        <p class="card-title" style="height:75px;overflow: hidden"><img src="{{$photo}}" class="card-img-top" alt="..."></p>
                                    @endforeach
                                </td>
                                <td><div>
                                        @if($articles->status === 0 )
                                            <div style="text-align: center;">
                                                <i class="fas fa-times"></i>
                                            </div>
                                        @elseif($articles->status === 1 )

                                            <div style="text-align: center;">
                                                <i class="fas fa-check-circle"></i>
                                            </div>
                                        @else
                                            null
                                        @endif
                                    </div></td>
                                <td><p class="card-title" style="height:75px;overflow: hidden ">{{$articles->created_at}} &nbsp;</p></td>
                                <td><p class="card-title" style="height:75px;overflow: hidden">{{$articles->updated_at}} &nbsp;</p></td>
                                <td><a href="/home">Edit</a></td>
                                <td><a href="/home">Delete</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="row m-3">
                        <div class="col-2">
                        </div>
                        <div class="col-10">
                            <nav aria-label="Page navigation example">
                                {{$list->links()}}
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
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
