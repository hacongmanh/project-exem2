@extends('layout.layout-admin', ['current_page' => 'order-edit'])
@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Sửa đơn hàng</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <form action="/admin/order/{{$obj->id}}" method="post" id="product_form">
                                @method('put')
                                @csrf
                                <div class="row form-group">
                                    <div class="col-6">
                                        <label>Ship Name</label>
                                        <input type="text" class="form-control" id="exampleFormControlTextarea1"
                                               name="ship_name" value="{{$obj->ship_name}}"/>
                                        @if($errors->has('ship_name'))
                                            <span class="text-danger">* {{$errors->first('ship_name')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-6">
                                        <label>ship_address</label>
                                        <input type="text" class="form-control" id="exampleFormControlTextarea1"
                                               name="ship_address" value="{{$obj->ship_address}}"/>
                                        @if($errors->has('ship_address'))
                                            <span class="text-danger">* {{$errors->first('ship_address')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-6">
                                        <label>Ship Phone</label>
                                        <input type="text" class="form-control" id="exampleFormControlTextarea1"
                                               name="ship_phone" value="{{$obj->ship_phone}}"/>
                                        @if($errors->has('ship_phone'))
                                            <span class="text-danger">* {{$errors->first('ship_phone')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-6">
                                        <label>Ship Email</label>
                                        <input type="text" class="form-control" id="exampleFormControlTextarea1"
                                               name="ship_email" value="{{$obj->ship_email}}"/>
                                        @if($errors->has('ship_email'))
                                            <span class="text-danger">* {{$errors->first('ship_email')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-6">
                                        <label>Total</label>
                                        <input type="text" class="form-control" id="exampleFormControlTextarea1"
                                               name="total" value="{{$obj->total}}"/>
                                        @if($errors->has('total'))
                                            <span class="text-danger">* {{$errors->first('total')}}</span>
                                        @endif
                                    </div>
                                </div>   <div class="row form-group">
                                    <div class="col-6">
                                        <label>Total</label>
                                        <input type="text" class="form-control" id="exampleFormControlTextarea1"
                                               name="notes" value="{{$obj->notes}}"/>
                                        @if($errors->has('notes'))
                                            <span class="text-danger">* {{$errors->first('notes')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-3">
                                        <select name="status" class="custom-select">
                                            <option value="{{$obj->status}}">----Trạng thái bài viết----</option>
                                            <option value="Không duyệt">Duyệt Bài</option>
                                            <option value="Đã duyệt">Không Duyệt</option>
                                        </select>
                                        @if($errors->has('status'))
                                            <span class="text-danger">* {{$errors->first('status')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row form-actions">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="reset" class="btn btn-dark">Reset</button>
                                    </div>
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





