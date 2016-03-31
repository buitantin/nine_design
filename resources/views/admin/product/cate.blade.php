@extends("admin");
@section("content")
 <div class="row-fluid">
               <div class="span12">
                  
                  <h3 class="page-title">
                    Sản Phẩm
                  </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="/" target="_black"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                       </li>
                       
                       <li><a href="#">Danh sách Sản Phẩm</a><span class="divider-last">&nbsp;</span></li>
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
                                    <th>Tên sản phẩm</th>
                                    <th>Danh mục</th>
                                    <th>Hiển thị</th>
                                    
                                    <th>Trạng thái</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($listproduct as $product)
                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td>
                                      <div>
                                          <div class="thumbnail">
                                            <div class="item">
                                              <a class="fancybox-button" data-rel="fancybox-button" title="Photo" href="{{PRODUCT_BIG_URL.'product_'.$product->id.'.jpg'}}?111.111">
                                                <div class="zoom">
                                                  <img src="{{PRODUCT_SMALL_URL.'product_'.$product->id.'.jpg'}}?111.111" alt="Photo">
                                                  <div class="zoom-icon"></div>
                                                </div>
                                              </a>
                                            </div>
                                          </div>
                                    </div>

                                 </td>
                                    <td>{{$product->name}}</td>
                                    <td>{{@App\Catechild::find($product->cid_catechild)->name}}</td>
                                    <td>{{ ($product->status=='0') ? 'Có' : 'Không'}}</td>
                                    <td>  
                                    
                                     
                                      <a class="label label-info" href="/admin/product/edit/{{$product->id}}">Sửa</a>
                                       <br />
                                      <br />
                                      <br />
                                        <a class="label label-success remove-button" href="/admin/product/remove/{{$product->id}}">Xóa</a>
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

