@extends('admin.templates.master')
@section('content')
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <form class="form-horizontal" method="post" enctype="multipart/form-data"
                              action="/admin/products/store">
                            @csrf
                            <div class="card-body">
                                <h4 class="card-title">Thêm thông tin sản phẩm</h4>
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">loại sản phẩm</label>
                                    <div class="col-sm-9">
                                        <select id= "category_id" name="category_id" class="select2 form-control custom-select"
                                                style="width: 100%; height:36px;">
                                            <option>---Chọn---</option>
                                            <option value="1">Chăm sóc sức khỏe</option>
                                            <option value="2">Làm đẹp</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Tên sản phẩm</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="name"
                                               placeholder="Nhập tên sản phẩm" name="name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Mô tả tóm tắt</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="information"
                                               placeholder="Nhập thông tin tóm tắt của sản phẩm" name="information">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Giới thiệu chi tiết về sản phẩm</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="description"
                                               placeholder="Nhập thông tin chi tiết về sản phẩm" name="description">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Đơn giá</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" id="price" name="price">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Hình ảnh</label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control" id="image" name="image">
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
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
