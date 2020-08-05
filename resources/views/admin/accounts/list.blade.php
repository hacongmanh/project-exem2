@extends('layout.layout-admin')
@section('main-content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <p class="card-category">Show your profile</p>
                        </div>

                    </div>
                </div>
    </div>

{{--            <div class="col-md-12">--}}
{{--                <div class="card card-plain">--}}
{{--                    <div class="card-header card-header-primary">--}}
{{--                        <h4 class="card-title mt-0">User information</h4>--}}
{{--                        <div class="form-group ">--}}
{{--                            <label>Account</label>--}}
{{--                            <select name="status">--}}
{{--                                @foreach($listAccount ?? '' as $cate)--}}
{{--                                    <option type="button" value="{{$cate->id}}">{{$cate->status}}</option>--}}
{{--                                @endforeach--}}
{{--                            </select>--}}
{{--                        </div>--}}
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
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Search by time</label>
                    <input type="text" name="dates" class="form-control">
                    <input type="hidden" name="start">
                    <input type="hidden" name="end">
                </div>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="">
                        <th>
                            ID
                        </th>
                        <th>
                            User name
                        </th>
                        <th>
                            Password
                        </th>
                        <th>
                            Email
                        </th>
                        <th>
                            Full name
                        </th>
                        <th>
                            Phone
                        </th>
                        <th>
                            Address
                        </th>
                        <th>
                            Thumbnail
                        </th>
                        <th>
                            Created_at
                        </th>
                        <th>
                            Updated_at
                        </th>
                        <th>
                        </th>
                        <th>

                        </th>
                        </thead>
                        <tbody>
                        @foreach($list ?? '' as $accounts)
                            <tr>
                                <td>
                                    <p  style="height:75px;overflow: hidden">
                                        {{$accounts->id}} &nbsp;
                                    </p>
                                </td>
                                <td>
                                    <p  style="height:75px;overflow: hidden">
                                        {{$accounts->user_name}} &nbsp;
                                    </p>
                                </td>
                                <td>

                                    <p  style="height:75px;overflow: hidden">
                                        {{$accounts->password_hash}} &nbsp;
                                    </p>
                                </td>
                                <td>
                                    <p  style="height:75px;overflow: hidden">
                                        {{$accounts->email}} &nbsp;
                                    </p>
                                </td>
                                <td>

                                    <p  style="height:75px;overflow: hidden; width: 8rem">
                                        {{$accounts->full_name}} &nbsp;
                                    </p>
                                </td>
                                <td>
                                    <p  style="height:75px;overflow: hidden">
                                        {{$accounts->phone}} &nbsp;
                                    </p>
                                </td>
                                <td>
                                    <p  style="height:75px;overflow: hidden ;width: 7rem">
                                        {{$accounts->address}} &nbsp;
                                    </p>
                                </td>
                                <td>
                                    @foreach($accounts->large_photos as $photo )
                                        <p class="card-title" style="height:75px;overflow: hidden"><img style="border-radius: 100%;
    width: 40%;" src="{{$photo}}" class="card-img-top" alt="..."></p>
                                    @endforeach
                                </td>
                                <td>
                                    <p  style="height:75px;overflow: hidden">
                                        {{$accounts->created_at}} &nbsp;
                                    </p>
                                </td>
                                <td>
                                    <p  style="height:75px;overflow: hidden">
                                        {{$accounts->updated_at}} &nbsp;
                                    </p>
                                </td>

                                <td>
                                    <a href="/home">
                                        Edit
                                    </a>
                                </td>
                                <td>
                                    <a href="/home">
                                        Delete
                                    </a>
                                </td>
                            </tr>

                        @endforeach
                        </tbody>

                    </table>
                    <div class="row m-3">
                        <div class="col-2">
                        </div>
                        <div class="col-10">
                            <nav  aria-label="Page navigation example" >
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
    </div>
@endsection
