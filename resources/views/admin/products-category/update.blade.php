@extends('admin.templates.master')
@section('content')
    <form method="post" action="/admin/product-category/update/{{$productCategory->id }}">
        @method('PATCH')
        @csrf
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Thêm thông tin loại sản phẩm</h4>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Tên loại sản phẩm</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="name"
                                                   value="{{$productCategory->name}}" name="name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Mô tả</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="description"
                                                   value="{{$productCategory->description}}" name="description">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Trạng thái</label>
                                        <div class="col-sm-9">
                                            <select name="status" class="select2 form-control custom-select"
                                                    style="width: 100%; height:36px;">
                                                <option>---Chọn---</option>
                                                <option value="1">Mở</option>
                                                <option value="2">Khóa</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" name="submit" class="btn btn-primary">Thêm mới</button>
                                    </div>
                                </div>
                            <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" name="submit" class="btn btn-primary" href="/admin/product-category/">Hủy</button>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>
@endsection
