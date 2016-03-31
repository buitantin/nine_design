@extends("admin");
@section("content")
 <div class="row-fluid">
               <div class="span12">
                  
                  <h3 class="page-title">
                    Quản lý Blog
                  </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="/" target="_black"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                       </li>
                       
                       <li><a href="#">Danh sách</a><span class="divider-last">&nbsp;</span></li>
                   </ul>
               </div>
            </div>



<div class="row-fluid"><div class="span6"><div class="dataTables_info" id="sample_1_info">

    Hiển thị từ {!! $listproduct->firstItem() !!} đến {!! $listproduct->lastItem() !!} trong tổng cộng    {!! $listproduct->total() !!}</div></div>

      <div class="span6">
        <div class="dataTables_paginate paging_bootstrap pagination">
             {!! $listproduct->render() !!}
          </div></div></div>


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
                              {!! Form::open(array('class'=>'form-horizontal',"method"=>"get","enctype"=>"multipart/form-data")) !!} 
                                                
                                               

                                                <div class="dataTables_filter" id="sample_1_filter"><label>
                                                  Tìm kiếm:
                                                     {!!Form::text("name",@$name,array('class'=>"input-medium ",'placeholder'=>'Tìm kiếm','aria-controls'=>'sample_1'))!!}
                                                  </label></div>
                                {!!Form::close()!!}
                           </div>
                      

                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Hình ảnh</th>
                                    <th>Tiêu đề</th>
                                    <th>Ngày tạo</th>
                                    <th>Hiển thị trang chủ</th>
                                    
                                    <th>Trạng thái</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($listproduct as $product)
                                <tr>
                                    <td>{{$product['id']}}</td>
                                    <td>
                                      <div>
                                          <div class="thumbnail">
                                            <div class="item">
                                              <a class="fancybox-button" data-rel="fancybox-button" title="Photo" href="{{PRODUCT_BIG_URL.'product_'.$product['id'].'.jpg'}}">
                                                <div class="zoom">
                                                  <img src="{{BLOG_URL.'/small/blog_'.$product['id'].'.jpg'}}" alt="Photo">
                                                  <div class="zoom-icon"></div>
                                                </div>
                                              </a>
                                            </div>
                                          </div>
                                    </div>

                                 </td>
                                    <td>{{$product['name']}}</td>
                                    <td>{{$product['created_at']}}</td>
                                    <td>{{ ($product['is_home']=='0') ? 'Có' : 'Không'}}</td>
                                    <td>  
                                      <a class="label label-success remove-button" href="/admin/blog/remove/{{$product['id']}}">Xóa</a>
                                      <br />
                                      <br />
                                      <br />
                                      <a class="label label-info" href="/admin/blog/edit/{{$product['id']}}">Sửa</a>
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
<div class="row-fluid"><div class="span6"><div class="dataTables_info" id="sample_1_info">

    Hiển thị từ {!! $listproduct->firstItem() !!} đến {!! $listproduct->lastItem() !!} trong tổng cộng    {!! $listproduct->total() !!}</div></div>

      <div class="span6">
        <div class="dataTables_paginate paging_bootstrap pagination">
             {!! $listproduct->render() !!}
          </div></div></div>

   @endsection

