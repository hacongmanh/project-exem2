@extends('layout.layout-admin')
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
                            Name
                        </th>

                        <th>
                            Price
                        </th>

                        <th>
                            Birthday
                        </th>

                        <th>
                            Gender
                        </th>

                        <th>
                            Category_id
                        </th>

                        <th>
                            BreedType
                        </th>

                        <th>
                            Color
                        </th>

                        <th>
                            Thumbnail
                        </th>

                        <th>
                            Description
                        </th>

                        <th>
                            Detail
                        </th>

                        <th>
                            Mother_id
                        </th>

                        <th>
                            Father_id
                        </th>

                        <th>
                            Create_at
                        </th>

                        <th>
                            Update_at
                        </th>

                        </thead>
                        <tbody>
                        @foreach($list as $dogs)
                            <tr>
                                <td>
                                    <p class="card-text">
                                        {{$dogs->id}} &nbsp;
                                    </p>
                                </td>
                                <td>
                                    <p class="card-text">
                                        {{$dogs->name}} &nbsp;
                                    </p>
                                </td>
                                <td>
                                    <p class="card-text">
                                        {{$dogs->price}} &nbsp;
                                    </p>
                                </td>
                                <td>
                                    <p class="card-text">
                                        {{$dogs->birthday}} &nbsp;
                                    </p>
                                </td>
                                <td>
                                    <p class="card-text">
                                        {{$dogs->gender}} &nbsp;
                                    </p>
                                </td>
                                <td>
                                    <p class="card-text">
                                        {{$dogs->category_id}} &nbsp;
                                    </p>
                                </td>
                                <td>
                                    <p class="card-text">
                                        {{$dogs->breedType}} &nbsp;
                                    </p>
                                </td>

                                <td>
                                    <p class="card-text">
                                        {{$dogs->color}} &nbsp;
                                    </p>
                                </td>

                                <td>
                                    @foreach($dogs->large_photos as $photo )
                                        <p class="card-title" style="height:75px;overflow: hidden"><img style="border-radius: 100%;width: 40%;" src="{{$photo}}" class="card-img-top" alt="..."></p>
                                    @endforeach
                                </td>


                                <td>
                                    <p style="  width: 50rem" class="card-text">
                                        {!!$dogs->description!!} &nbsp;
                                    </p>
                                </td>


                                <td>
                                    <p style="width: 50rem" class="card-text">
                                        {{$dogs->detail}} &nbsp;
                                    </p>
                                </td>

                                <td>
                                <p class="card-text">
                                    {{$dogs->mother_id}} &nbsp;
                                </p>
                                </td>
                                <td>
                                    <p class="card-text">
                                        {{$dogs->father_id}} &nbsp;
                                    </p>
                                </td>

                                <td><p class="card-title"
                                       style=" height:75px;overflow: hidden ">{{$dogs->created_at}} &nbsp;</p></td>
                                <td><p class="card-title" style="height:75px;overflow: hidden">{{$dogs->updated_at}}
                                        &nbsp;</p></td>
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
            .create(document.querySelector('#editor'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
