@extends("admin");
@section("content")
 <div class="row-fluid">
               <div class="span12">
                  
                  <h3 class="page-title">
                     Quản lý Slide
                     <small>Quản lý Slide</small>
                  </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="/" target="_black"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                       </li>
                       
                       <li><a href="#">Danh sách hình ảnh</a><span class="divider-last">&nbsp;</span></li>
                   </ul>
               </div>
            </div>



<div class="row-fluid"><div class="span6"><div class="dataTables_info" id="sample_1_info">

    Hiển thị từ {!! $list->firstItem() !!} đến {!! $list->lastItem() !!} trong tổng cộng    {!! $list->total() !!}</div></div>

      <div class="span6">
        <div class="dataTables_paginate paging_bootstrap pagination">
             {!! $list->render() !!}
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

                         
                      

                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Hình ảnh</th>
                                    <th>Tên</th>
                              
                                 
                                    
                                    <th>Trạng thái</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($list as $element)
                                <tr>
                                    <td>{{$element['id']}}</td>
                                    <td>
                                      <div>
                                          <div class="thumbnail">
                                            <div class="item">
                                              <a class="fancybox-button" data-rel="fancybox-button" title="Photo" href="{{SLIDESHOW_URL.'slide_'.$element['id'].'.png'}}">
                                                <div class="zoom">
                                                  <img src="{{SLIDESHOW_URL.'slide_'.$element['id'].'.png'}}?version=1.0" alt="Photo">
                                                  <div class="zoom-icon"></div>
                                                </div>
                                              </a>
                                            </div>
                                          </div>
                                    </div>

                                 </td>
                                    <td>
                                     {{$element['name']}}
                                      </td>
                                    
                                    <td>  
                                      <a class="label label-success remove-button" href="/admin/slideshow/remove/{{$element['id']}}">Xóa</a>
                                      <br />
                                      <br />
                                      <br />
                                      <a class="label label-info" href="/admin/slideshow/edit/{{$element['id']}}">Sửa</a>
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

    Hiển thị từ {!! $list->firstItem() !!} đến {!! $list->lastItem() !!} trong tổng cộng    {!! $list->total() !!}</div></div>

      <div class="span6">
        <div class="dataTables_paginate paging_bootstrap pagination">
             {!! $list->render() !!}
          </div></div></div>

   @endsection

