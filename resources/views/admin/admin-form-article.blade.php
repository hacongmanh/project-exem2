@extends('layout.layoutadmin')
@section('main-content')
<div class="col-md-12">
    <form action="/admin/form/article" method="post" id="product_form" >
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="bmd-label-floating"></label>
                    <input type="text" class="form-control" name="title" placeholder="title">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="bmd-label-floating"></label>
                    <input type="text" class="form-control" name="category_id" placeholder="category_id">
                </div>
                <div class="form-group">
                    <label class="bmd-label-floating"></label>
                    <input type="text" class="form-control" name="create_by" placeholder="create_by">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="description" class="form-control"
                               placeholder="Description">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <button type="button" id="upload_widget" class="btn btn-primary">Upload
                        files
                    </button>
                    <div class="thumbnails">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-actions">
            <div class="text-right">
                <button type="submit" name="submit" class="btn btn-info">Submit</button>
                <button type="reset" class="btn btn-dark">Reset</button>
                <div class="clearfix"></div>
            </div>
        </div>
    </form>
</div>
@endsection
