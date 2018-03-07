@extends('admin.layouts.layout')

@section('content')
<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Thêm sản phẩm</h2>
                    </div>
                </div>
                <hr />
                
                <div class="row">
                    <div class="col-md-9" >
                        <div class="form-group">
                            <form action='insertproduct' method='post'  enctype="multipart/form-data">
                                {{ csrf_field() }} 
                                <div>
                                    <div class="col-md-6" >
                                        <label>Tên sản phẩm</label>
                                        <input class="form-control" name="productname" placeholder="Tên sản phẩm"  required=""/>
                                        <p class="help-block"></p>
                                    </div>
                                    
                                    <div class="col-md-12" >
                                        <label>Mô tả sản phẩm</label>
                                        <input class="form-control" name="desc" placeholder="Mô tả"  required=""/>
                                        <p class="help-block"></p>
                                    </div>

                                    <div class="col-md-6" >
                                        <label>Đơn giá</label>
                                        <input class="form-control" name="price" placeholder="Loại sản phẩm"  required=""/>
                                        <p class="help-block"></p>
                                    </div>
                                                                        
                                    <div class="col-md-6" >
                                        <label>Mặt hàng</label>
                                        <input class="form-control" name="productitem" placeholder="Mặt hàng"  required=""/>
                                        <p class="help-block"></p>
                                    </div>
                                    
                                    <div class="col-md-6" >
                                        <label>Loại sản phẩm</label>
                                        <input class="form-control" name="producttype" placeholder="Loại sản phẩm"  required=""/>
                                        <p class="help-block"></p>
                                    </div>

                                    <div class="col-md-6" >    
                                        <label>Hãng sản xuất</label>
                                        <select class="form-control" name="productmanu" placeholder="Hãng sản xuất"  required="">
                                            @foreach($producttype as $i)
                                                <option >{{ $i->name }}</option>
                                            @endforeach
                                        </select>
                                        <p class="help-block"></p>
                                    </div>
                                    
                                    <div class="col-md-6" >
                                        <label>Big Image</label>
                                        <input type="file" class="form-group" name="big_img" ID="img" multiple required="">
                                        <p class="help-block">--</p>
                                    </div>

                                    <div class="col-md-6" >
                                        <label>Small_Image</label>
                                        <input type="file" class="form-group" name="small_img" ID="img" multiple required="">
                                        <p class="help-block">--</p>
                                    </div>
                                    
                                    <div class="col-md-6" >
                                        <label>Detai Image 1</label>
                                        <input type="file" class="form-group" name="detail_img_1" ID="detail_img_1" multiple required="">
                                        <p class="help-block">--</p>
                                    </div>

                                    <div class="col-md-6" >
                                        <label>Detai Image 2</label>
                                        <input type="file" class="form-group" name="detail_img_2" ID="detail_img_2" multiple required="">
                                        <p class="help-block">--</p>
                                    </div>
                                    
                                    <div class="col-md-6" >
                                        <label>Detai Image 3</label>
                                        <input type="file" class="form-group" name="detail_img_3" ID="detail_img_3" multiple required="">
                                        <p class="help-block">--</p>
                                    </div>

                                    <div class="col-md-6" >
                                        <label>Detai Image 4</label>
                                        <input type="file" class="form-group" name="detail_img_4" ID="detail_img_4" size="60" multiple required="">
                                        <p class="help-block">--</p>
                                    </div>
                                    <div class="col-md-12" >
                                        <button class="btn btn-lg btn-primary btn-block" type="submit" >Thêm sản phẩm</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    <div>
                </div>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        
@endsection