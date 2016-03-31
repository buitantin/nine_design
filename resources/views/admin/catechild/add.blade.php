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
                       
                       <li><a href="#">Danh mục</a><span class="divider-last">&nbsp;</span></li>
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


                                <div class="control-group @if(!empty($error['name'])) error @endif">
                                    <label class="control-label">Tên:</label>
                                    <div class="controls">
                                        {!!Form::text("name",@$data['name'],['class'=>"input-xxlarge",'placeholder'=>''])!!}
                                        <span class="help-inline" style='color:red'>* @if(!empty($error['name'])) {{$error['name']}} @endif </span>
                                    </div>
                                </div>

                          <div class="control-group ">
                             <label class="control-label">Nội bật:</label>  
                               <div class="controls">
                               
                                 <label class="radio">
                                 <div class="radio" id="uniform-undefined"><span class="">

                                  <input type="radio" name="is_hot" value="0" style="opacity: 0;" checked="checked">

                                  </span></div>
                                 Không
                                 </label>
                                 <label class="radio">
                                 <div class="radio" id="uniform-undefined"><span class="checked">

                                    <input type="radio" name="is_hot" value="1"  style="opacity: 0;">


                                  </span></div>
                                  Có
                                 </label>  
                              
                              </div>
                          </div>

                            <div class="control-group">
                                    <label class="control-label">Danh mục</label>
                                    <div class="controls">
                                       

                                        {!! Form::select('cid_cate',$listcate,@$data['cid_cate'],['class'=>'input-large m-wrap'])!!}
                                    </div>
                                </div>


                                  <div class="control-group">
                                    <label class="control-label">Icon</label>
                                    <div class="controls">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                              
                                                   <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="">
                                               
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                       <span class="btn btn-file"><span class="fileupload-new">Select image</span>
                                       <span class="fileupload-exists">Chọn ảnh</span>
                                       <input type="file" name="icon" class="default"></span>
                                             
                                            </div>
                                        </div>
                                        <span class="label label-important"></span>
                                 <span>
                                  
                                 </span>
                                    </div>

                                     <span class="help-inline" style='color:red'>* @if(!empty($error['icon'])) {{$error['icon']}} @endif </span>
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




                               <div class="control-group @if(!empty($error['name'])) error @endif">
                                    <label class="control-label">Mẫu:</label>
                                    
                                </div>


                                <div>
                                  <div class="">
                                        {!!Form::textarea("description",@$data['description'],['class'=>"input-xxlarge",'placeholder'=>'','id'=>'mybasiceditor'])!!}
                                        <span class="help-inline" style='color:red'>* @if(!empty($error['description'])) {{$error['description']}} @endif </span>
                                    </div>
                                </div>

                                <div class="control-group @if(!empty($error['code'])) error @endif">
                                    <label class="control-label">Báo giá</label>
                                  
                                </div>
                                 <div class="">
                                        {!! Form::textarea("quote",@$data['quote'],['class'=>"input-xxlarge",'placeholder'=>'','id'=>'myeditor'])!!}
                                        <span class="help-inline" style='color:red'>* @if(!empty($error['quote'])) {{$error['quote']}} @endif </span>
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