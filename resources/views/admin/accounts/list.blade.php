@extends('layout.layout-admin',['current_page' => 'account-list'])
@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Danh sách account</h3>
                </div>
                <div class="card-body">
                    <div class="dataTables_wrapper dt-bootstrap4">
                        <form action="/admin/accounts" method="get" id="search-form">
                            <div class="row">
                                <div class="col-5">
                                    <div class="row">
                                        <div class="col-12">

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Tìm theo từ khóa</label>
                                                <input name="keyword" value="{{$keyword}}" type="text"
                                                       class="form-control" placeholder="Enter keyword to search">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-7">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Tìm theo thời gian tạo</label>
                                                <input type="text" class="form-control" name="dates">
                                                <input type="hidden" name="start">
                                                <input type="hidden" name="end">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <button class="invisible">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-bordered table-hover dataTable dtr-inline">
                                    <thead>
                                    <th>ID</th>
                                    <th>User name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Ngày cập nhập</th>
                                    <th>Trạng thái</th>
                                    <th>Thao tác</th>
                                    </thead>
                                    <tbody>
                                    @foreach($list as $accounts)
                                        <tr>
                                            <td>{{$accounts->id}}</td>
                                            <td>{{$accounts->user_name}} &nbsp;</td>
                                            <td>{{$accounts->email}}</td>
                                            <td>{{$accounts->phone}}</td>
                                            <td>{{$accounts->updated_at}}</td>
                                            <td>{!!$accounts->StatusString!!}</td>
                                            <td>
                                                <a href="/admin/accounts/{{$accounts->id}}/edit"
                                                   class="btn btn-primary">Edit</a>
                                                <a href="#" class="btn-delete btn btn-danger mr-1" id="delete-{{$accounts->id}}">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-5"></div>
                            <div class="col-sm-12 col-md-7">
                                <div class="dataTables_paginate paging_simple_numbers">
                                    {{$list->links()}}
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
    <script>
        var url = new URL(location.href);
        var startTime = url.searchParams.get("start");
        var endTime = url.searchParams.get("end");
        if (startTime === null || startTime.length === 0) {
            startTime = new Date();
        }
        if (endTime === null || endTime.length === 0) {
            endTime = new Date();
        }
        $('input[name="start"]').val(moment(startTime).format('YYYY-MM-DD'));
        $('input[name="end"]').val(moment(endTime).format('YYYY-MM-DD'));
        $('input[name="dates"]').daterangepicker(
            {
                startDate: moment(startTime).format('DD/MM/YYYY'),
                endDate: moment(endTime).format('DD/MM/YYYY'),
                locale: {
                    format: 'DD/MM/YYYY'
                },
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                }
            }
        );

        var token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        var btnDeletes =document.getElementsByClassName('btn-delete');
        for (let i = 0; i < btnDeletes.length; i++) {
            btnDeletes[i].onclick = function (){
                if (confirm('Are you sure')){
                    var id = this.getAttribute('id').replace('delete-', '');
                    var xmlHttpRequest = new XMLHttpRequest();
                    xmlHttpRequest.open('PUT','/delete/account/'+id);
                    xmlHttpRequest.setRequestHeader('X-CSRF-TOKEN', token);
                    xmlHttpRequest.onreadystatechange = function (){
                        if (this.readyState == 4){
                            if(this.status == 200){
                                alert('Confirm success')
                                location.reload();
                            }else {
                                alert('Action fails!!')
                            }
                        }
                    }
                    xmlHttpRequest.send();
                }
            }
        }
    </script>
@endsection
