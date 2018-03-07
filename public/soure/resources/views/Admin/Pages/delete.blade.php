
@extends('admin.layouts.layout')

@section('content')
<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Xóa sản phẩm</h2>
                    </div>
                </div>
                
                <hr />
                <div class="row">
                    <div class="col-md-10">
                        <h5>Table  Sample One</h5>
                        <table class="table table-striped table-bordered table-hover" align="center">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên</th>
                                    <th>Mô tả</th>
                                    <th>Mặt hàng</th>
                                    <th>Loại sản phẩm</th>
                                    <th>Nhà sản xuất</th>
                                    <th>Giá</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($productdetail as $i)
                                <tr>
                                    <td>{{$i->id}}</td>
                                    <td>{{$i->name}}</td>
                                    <td>{{$i->desc}}</td>
                                    <td>{{$i->item}}</td>
                                    <td>{{$i->type}}</td>
                                    <td>{{$i->price}}</td>
                                    <td>{{$i->manu}}</td></tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <form action='deleteproduct' method='post'  enctype="multipart/form-data">
                                {{ csrf_field() }} 
                                <div>
                                    <label>Chọn ID sản phẩm để xóa :</label>
                                    <select class="form-control" name="IDproduct" placeholder="Hãng sản xuất"  required="">
                                        @foreach($productdetail as $i)
                                            <option >{{ $i->id }}</option>
                                        @endforeach
                                    </select>
                                    <p class="help-block">--</p>
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                  <div class="row">
                    <div class="col-md-12">
                        <h5>Information</h5>
                            This is a type of bare admin that means you can customize your own admin using this admin structured  template . For More Examples of bootstrap elements or components please visit official bootstrap website <a href="http://getbootstrap.com" target="_blank">getbootstrap.com</a>
                        . And if you want full template please download <a href="http://www.binarytheme.com/bootstrap-free-admin-dashboard-template/" target="_blank" >FREE BCORE ADMIN </a>&nbsp;,&nbsp;  <a href="http://www.binarytheme.com/free-bootstrap-admin-template-siminta/" target="_blank" >FREE SIMINTA ADMIN</a> and <a href="http://binarycart.com/" target="_blank" >FREE BINARY ADMIN</a>.

                    </div>
                </div>
                <!-- /. ROW  -->
            </div>
            <!-- /. PAGE INNER  -->
        </div>
@endsection