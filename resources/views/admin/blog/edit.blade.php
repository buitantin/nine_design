@extends("admin");
@section("content")
 <div class="row-fluid">
               <div class="span12">
                  
                  <h3 class="page-title">
              Blog
                    
                  </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="/" target="_black"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                       </li>
                       
                       <li><a href="#">Thêm mới </a><span class="divider-last">&nbsp;</span></li>
                   </ul>
               </div>
            </div>
  {!! Form::open(array('class'=>'form-horizontal',"method"=>"post","enctype"=>"multipart/form-data","files"=>true)) !!} 

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
                           
                          
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="control-group @if(!empty($error['name'])) error @endif">
                                    <label class="control-label">Tên</label>
                                    <div class="controls">
                                        {!!Form::text("name",@$data['name'],['class'=>"input-xxlarge",'placeholder'=>'Tên'])!!}
                                        <span class="help-inline" style='color:red'>* @if(!empty($error['name'])) {{$error['name']}} @endif </span>
                                    </div>
                                </div>

                        
                     

                 
                                <div class="control-group ">
                                  <label class="control-label">Hiện thị</label>
                                  <div class="controls">
                                     <label class="radio">
                                     <input type="radio" name="status" value="0"  @if($data['status']==0) checked  @endif  />
                                      Có
                                     </label>
                                     <label class="radio">
                                     <input type="radio" name="status"  value="1"  @if($data['status']==1) checked  @endif />
                                      Không
                                     </label>  
                                     
                                  </div>
                               </div>

                                  <div class="control-group ">
                                  <label class="control-label">Hiện thị trang chủ</label>
                                  <div class="controls">
                                     <label class="radio">
                                     <input type="radio" name="is_home" value="0" @if($data['is_home']==0) checked  @endif/>
                                      Có
                                     </label>
                                     <label class="radio">
                                     <input type="radio" name="is_home" value="1"   @if($data['is_home']==1) checked  @endif />
                                      Không
                                     </label>  
                                     
                                  </div>
                               </div>



                                <div class="control-group @if(!empty($error['images'])) error @endif">
                                    <label class="control-label">Hình ảnh</label>
                                    <div class="controls">
                                      <div class=''>
                                        {!! Form::file("images",null)!!}
                                      </div>
                                         <span class="help-inline" style='color:red'>* @if(!empty($error['images'])) {{$error['images']}} @endif </span>
                                          <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                <img src="{{BLOG_URL}}small/blog_{{$data['id']}}.jpg" alt="">
                                            </div>
                                            <div>
                                  
                                            </div>
                                        </div>

                                    </div>
                                </div>

                
                                
                               
                                <div class="control-group @if(!empty($error['price'])) error @endif">
                                    <label class="control-label">Mô tả</label>
                                    <div class="controls">
                                        {!! Form::textarea("description",@$data['description'],['class'=>"input-xxlarge",'placeholder'=>''])!!}
                                         <span class="help-inline" style='color:red'>@if(!empty($error['price'])) {{$error['price']}} @endif </span>
                                    </div>
                                </div>


                             <div class="control-group">
                                    <label class="control-label">Nội dung</label>
                                   
                                </div>

                                 <div class="">
                                        {!! Form::textarea("content",@$data['content'],['class'=>"span9 " ,'placeholder'=>'','id'=>"myeditor"])!!}
                                        <span class="help-inline" style='color:red'>@if(!empty($error['content'])) {{$error['content']}} @endif </span>
                                    </div>
                              
                          
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->
                </div>
</div>
 

             <div class="row-fluid">
                  <div class="span12 sortable">
                    <!-- BEGIN SAMPLE FORMPORTLET-->
                    <div class="widget">
                        
                        <div class="widget-body">
                            <!-- BEGIN FORM-->
                               <div class="form-actions">
                                    <button type="submit" class="btn btn-success blue"><i class="icon-ok"></i> Lưu</button>
                                </div>
                       </div>
               </div>
              </div>

            </div>
  {!!Form::close() !!}

   @endsection