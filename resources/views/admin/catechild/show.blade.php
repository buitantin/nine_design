@extends("admin");
@section("content")
 <div class="row-fluid">
               <div class="span12">
                  
                  <h3 class="page-title">
                     Quản lý Danh mục
                     <small>Quản lý Danh mục</small>
                  </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="/" target="_black"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                       </li>
                       
                       <li><a href="#">Danh sách Danh mục</a><span class="divider-last">&nbsp;</span></li>
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
                                    <th>ID</th>
                                    <th>Tên</th>
                                    <th>Icon</th>

                                    <th>Hình ảnh</th>
                                    <th>Danh mục</th>
                                    <th>Trạng thái</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($list as $element)
                                <tr>
                                    <td>{{$element['id']}}</td>
                                     <td>{{$element['name']}}</td>
                                     <td>


                                         <div class="thumbnail">
                                            <div class="item">
                                              <a class="fancybox-button" data-rel="fancybox-button" title="Photo" href="{{CATECHILD_URL.'/icon/icon_'.$element['id'].'.png'}}?version=1">
                                                <div class="zoom">
                                                  <img  style="max-width:200px" src="{{CATECHILD_URL.'/icon/icon_'.$element['id'].'.png'}}?version=1"  alt="Photo">
                                                  <div class="zoom-icon"></div>
                                                </div>
                                              </a>
                                            </div>


                                     </td>
                                      <td>

                                         <div class="thumbnail">
                                            <div class="item">
                                              <a class="fancybox-button" data-rel="fancybox-button" title="Photo" href="{{CATECHILD_URL.'cate_'.$element['id'].'.png'}}?version=1">
                                                <div class="zoom">
                                                  <img style="max-width:200px" src="{{CATECHILD_URL.'cate_'.$element['id'].'.png'}}?version=1"  alt="Photo">
                                                  <div class="zoom-icon"></div>
                                                </div>
                                              </a>
                                            </div>
                                          </div>
                                     </td>
                             
                                    <td>
                                        {{$listcate[$element['cid_cate'] ]}}
                                    </td>
                                  <td>
                                      <a class="label label-info" href="/admin/catechild/edit/{{$element['id']}}">Sửa</a>
                                      <br />
                                      <br />
                                      <br />
                                       <a class="label label-success remove-button" href="/admin/catechild/remove/{{$element['id']}}">Xóa</a>
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

