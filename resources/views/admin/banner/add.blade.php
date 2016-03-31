@extends("admin");
@section("content")
 <div class="row-fluid">
               <div class="span12">
                  
                  <h3 class="page-title">
              Banner
                    
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
                                    <label class="control-label">Link</label>
                                    <div class="controls">
                                        {!!Form::text("link",@$data['link'],['class'=>"input-xxlarge",'placeholder'=>'Link'])!!}
                                        <span class="help-inline" style='color:red'>* @if(!empty($error['link'])) {{$error['link']}} @endif </span>
                                    </div>
                                </div>

                        
                     

                 
                                <div class="control-group ">
                                  <label class="control-label">Danh mục</label>
                                  <div class="controls">
                                    {!! Form::select("cid_cate",$listcate,@$data['cid_cate'])!!}
                                     
                                  </div>
                                    
                               </div>





                 


                  

                   <div class="control-group">
                                    <label class="control-label">Hình ảnh</label>
                                    <div class="controls">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                              
                                                   <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="">
                                               
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                       <span class="btn btn-file"><span class="fileupload-new">Select image</span>
                                       <span class="fileupload-exists">Chọn ảnh</span>
                                       <input type="file" name="images" class="default"></span>
                                             
                                            </div>
                                        </div>
                                        <span class="label label-important"></span>
                                 <span>
                                  
                                 </span>
                                    </div>

                                     <span class="help-inline" style='color:red'>* @if(!empty($error['images'])) {{$error['images']}} @endif </span>
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