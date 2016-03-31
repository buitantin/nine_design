@extends("admin");
@section("content")
 <div class="row-fluid">
               <div class="span12">
                  
                  <h3 class="page-title">
                     Quản lý menu
                     <small>Quản lý menu</small>
                  </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="/" target="_black"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                       </li>
                       
                       <li><a href="#">Danh sách menu</a><span class="divider-last">&nbsp;</span></li>
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

                         
                      

                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>tên trang</th>
                                    <th>mô tả</th>
                                    <th>Hình ảnh</th>
                                    <th>Nội dung</th>   
                                
                                    <th>Trạng thái</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($list as $element)
                                <tr>
                                    <td>{{$element['id']}}</td>
                                     <td>{{$element['name']}}</td>
                                     <td>{{$element['description']}}</td>
                                     <td><img src="{{CATE_URL.'cate_'.$element['id'].'.png'}}" />
                                     </td>
                                     <td>{!!$element['content']!!}</td>
                                   
                             
                                    
                                  <td>
                                      <a class="label label-info" href="/admin/cate/edit/{{$element['id']}}">Sửa</a>
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

