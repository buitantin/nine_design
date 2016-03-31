@extends("admin");
@section("content")
 <div class="row-fluid">
               <div class="span12">
                  
                  <h3 class="page-title">
                    Gửi FILE Ảnh
                  </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="/" target="_black"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                       </li>
                       
                       <li><a href="#">Gửi FILE Ảnh</a><span class="divider-last">&nbsp;</span></li>
                   </ul>
               </div>
            </div>



<div class="row-fluid"><div class=""><div class="dataTables_info" id="sample_1_info">




  <div class="row-fluid">
               <div class="span12">
                    <!-- BEGIN BORDERED TABLE widget-->
                    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i></h4>
                        <span class="tools">
                        <a href="javascript:;" class="icon-chevron-down"></a>
                        <a href="javascript:;" class="icon-remove"></a>
                        </span>
                        </div>
                        <div class="widget-body">

                          <div class="row-fluid">

                            <div class="span6">
                            

                          </div>

                            <div class="span6">

                            <form method='get' >
                                  <div class="dataTables_filter" id="sample_1_filter"><label>Danh mục:
                                   {!! Form::select("search",$listcate,$search)!!}    <input type='submit' value="Tìm kiếm" class="btn mini green-stripe" style="margin-bottom: 10px" />
                                </label></div>

                            

                              </form>


                            </div></div>



                      

                            <table class="table table-striped table-bordered table-advance table-hover">
                                <thead>
                                <tr>
                                    <th>
                                    <i class="icon-signin"></i>
                                    ID</th>
                                    <th>
                                      <i class="icon-film"></i>
                                      Tên</th>
                                    <th>
                                    <i class="icon-external-link"></i>

                                    Email</th>

                                    <th>
                                    <i class="icon-phone"></i>
                                    Số điện thoại
                                    </th>

                                   <th>
                                    <i class="icon-fire"></i>
                                    Thanh toán
                                    </th>

                                     <th>
                                    <i class="icon-flag"></i>
                                    Địa chỉ
                                    </th>

                                     <th>
                                    <i class="icon-bookmark"></i>
                                      Kích thước
                                    </th>

                                     <th>
                                    <i class="icon-glass"></i>
                                      Số trang
                                    </th>


                                     <th>
                                    <i class="icon-bell"></i>
                                       Danh mục
                                    </th>

                                     <th>
                                    <i class="icon-hdd"></i>
                                    Trạng thái
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($list as $element)
                                <tr>
                                    <td>{{$element['id']}}</td>
                                    <td>{{$element['name']}}</td>
                                    <td>{{$element['email']}}</td>
                                    
                                    <td>{{$element['phone']}}</td>
                                    <td>{{$element['is_payment']=='0' ? 'Thanh toán nơi giao hàng' : 'Thanh toán qua ngân hàng'}}</td>
                                    <td>{{$element['address']}}</td>

                                    <td>

                                      Width: {{$element['width']}} <br />

                                      Height: {{$element['height']}}

                                      </td>

                                      <td>
                                          {{$element['page']}}
                                      </td>
                                      <td>
                                          {{$listcate[$element['cid_catechild']]}}
                                      </td>
                                    
                                  <td>
                                   
                                       <a class="label label-success remove-button" href="/admin/order/remove/{{$element['id']}}">Xóa</a>
                                    </td>
                                </tr>
                                @endforeach
                              
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END BORDERED TABLE widget-->
                </div>
            </div>


   @endsection

