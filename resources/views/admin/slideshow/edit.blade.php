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
                       
                       <li><a href="#">Sửa hình ảnh</a><span class="divider-last">&nbsp;</span></li>
                   </ul>
               </div>
            </div>


   <div class="row-fluid">
                <div class="span12 sortable">
                    <!-- BEGIN SAMPLE FORMPORTLET-->
                    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i></h4>
                                        <span class="tools">
                                        <a href="javascript:;" class="icon-chevron-down"></a>
                                        <a href="javascript:;" class="icon-remove"></a>
                                        </span>
                        </div>
                        <div class="widget-body">
                            <!-- BEGIN FORM-->
                           
                            {!! Form::open(array('class'=>'form-horizontal',"method"=>"post","enctype"=>"multipart/form-data")) !!} 
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">


                                <div class="control-group @if(!empty($error['link'])) error @endif">
                                    <label class="control-label">Đường dẫn:</label>
                                    <div class="controls">
                                        {!!Form::text("link",@$data['link'],['class'=>"input-xxlarge",'placeholder'=>'Đường dẫn'])!!}
                                        <span class="help-inline" style='color:red'>* @if(!empty($error['link'])) {{$error['link']}} @endif </span>
                                    </div>
                                </div>

                              

                                <div class="control-group @if(!empty($error['images'])) error @endif">
                                    <label class="control-label">Hình ảnh</label>
                                    <div class="controls">
                                      <div class=''>
                                        {!! Form::file("images",null)!!}
                                      </div>
                                         <span class="help-inline" style='color:red'>* @if(!empty($error['images'])) {{$error['images']}} @endif </span>

                                    </div>
                                </div>


                                

                                <div class="control-group @if(!empty($error['position'])) error @endif">
                                    <label class="control-label">Vị trí</label>
                                    <div class="controls">
                                        {!! Form::text("position",@$data['position'],['class'=>"input-xxlarge",'placeholder'=>''])!!}
                                        <span class="help-inline" style='color:red'>* @if(!empty($error['position'])) {{$error['position']}} @endif </span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label"></label>
                                    <div class="controls">
                                         <img src="{{SLIDESHOW_URL.'slide_'.$data['id'].'.png'}}?version=1.0" alt="Photo">
                                    </div>
                                </div>

                                
                               <div class="form-actions">
                                    <button type="submit" class="btn btn-success blue"><i class="icon-ok"></i> Lưu</button>
                                </div>
                            {!!Form::close() !!}
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->
                </div>
            </div>


   @endsection