@extends("admin");
@section("content")
 <div class="row-fluid">
               <div class="span12">
                  
                  <h3 class="page-title">
                     Thay đổi mật khẩu
                     <small>Thay đổi mật khẩu</small>
                  </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="/" target="_black"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                       </li>
                       
                       <li><a href="#">Thay đổi mật khẩu</a><span class="divider-last">&nbsp;</span></li>
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


                                <div class="control-group @if(!empty($error['password'])) error @endif">
                                    <label class="control-label">Nhập mật khẩu mới:</label>
                                    <div class="controls">
                                        {!!Form::password("password",['class'=>"input-xxlarge",'placeholder'=>'Mật khẩu mới'])!!}
                                        <span class="help-inline" style='color:red'>* @if(!empty($error['password'])) {{$error['password']}} @endif </span>
                                    </div>
                                </div>
                                  <div class="control-group @if(!empty($error['reset'])) error @endif">
                                    <label class="control-label">Nhập lại lần nữa :</label>
                                    <div class="controls">
                                        {!!Form::password("reset",['class'=>"input-xxlarge",'placeholder'=>'Nhập lại lần nữa '])!!}
                                        <span class="help-inline" style='color:red'>* @if(!empty($error['reset'])) {{$error['reset']}} @endif </span>
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