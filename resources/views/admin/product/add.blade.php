@extends("admin");
@section("content")
 <div class="row-fluid">
               <div class="span12">
                  
                  <h3 class="page-title">
                     Quản lý sản phẩm 
                     <small>Quản lý sản phẩm</small>
                  </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="/" target="_black"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                       </li>
                       
                       <li><a href="#">Thêm mới sản phẩm</a><span class="divider-last">&nbsp;</span></li>
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
                                  <label class="control-label">Hiển thị trang chủ</label>
                                  <div class="controls">
                                     <label class="radio">
                                     <input type="radio" name="is_home" value="1" />
                                      Có
                                     </label>
                                     <label class="radio">
                                     <input type="radio" name="is_home" value="0" checked />
                                      Không
                                     </label>  
                                     
                                  </div>
                               </div>

                               <div class="control-group ">
                                  <label class="control-label">Trang sức Đá màu</label>
                                  <div class="controls">
                                     <label class="radio">
                                     <input type="radio" name="is_color" value="1" />
                                      Có
                                     </label>
                                     <label class="radio">
                                     <input type="radio" name="is_color" value="0" checked />
                                      Không
                                     </label>  
                                     
                                  </div>
                               </div>

                               <div class="control-group ">
                                  <label class="control-label">Trang sức mới</label>
                                  <div class="controls">
                                     <label class="radio">
                                     <input type="radio" name="is_new" value="1" />
                                      Có
                                     </label>
                                     <label class="radio">
                                     <input type="radio" name="is_new" value="0" checked />
                                      Không
                                     </label>  
                                     
                                  </div>
                               </div>

                                <div class="control-group ">
                                  <label class="control-label">Trang sức bộ</label>
                                  <div class="controls">
                                     <label class="radio">
                                     <input type="radio" name="is_group" value="1" />
                                      Có
                                     </label>
                                     <label class="radio">
                                     <input type="radio" name="is_group" value="0" checked />
                                      Không
                                     </label>  
                                     
                                  </div>
                               </div>

                                <div class="control-group ">
                                  <label class="control-label">Trang sức cưới</label>
                                  <div class="controls">
                                     <label class="radio">
                                     <input type="radio" name="is_wedding" value="1" />
                                      Có
                                     </label>
                                     <label class="radio">
                                     <input type="radio" name="is_wedding" value="0" checked />
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

                                    </div>
                                </div>

                                 <div class="control-group @if(!empty($error['images'])) error @endif">
                                    <label class="control-label">Hình ảnh khác</label>
                                    <div class="controls">
                                      <div class=''>
                                        {!! Form::file("otherimg[]",array("multiple"=>true))!!}
                                      </div>
                                         <span class="help-inline" >Chọn nhiều sản phẩm</span>

                                    </div>
                                </div>

                                <div class="control-group @if(!empty($error['price'])) error @endif">
                                    <label class="control-label">Giá</label>
                                    <div class="controls">
                                        {!! Form::number("price",@$data['price'],['class'=>"input-xxlarge",'placeholder'=>'Giá'])!!}
                                         <span class="help-inline" style='color:red'>* @if(!empty($error['price'])) {{$error['price']}} @endif </span>
                                    </div>
                                </div>

                                <div class="control-group @if(!empty($error['code'])) error @endif">
                                    <label class="control-label">Mã Sản Phẩm</label>
                                    <div class="controls">
                                        {!! Form::text("code",@$data['code'],['class'=>"input-xxlarge",'placeholder'=>'Mã Sản Phẩm'])!!}
                                        <span class="help-inline" style='color:red'>* @if(!empty($error['code'])) {{$error['code']}} @endif </span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Danh mục</label>
                                    <div class="controls">
                                        {!! Form::select("cate",$listcate,@$data['cate'],['class'=>"input-xxlarge",'placeholder'=>''])!!}
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Loại đá</label>
                                    <div class="controls">
                                        {!! Form::select("stone",$liststone,@$data['stone'],['class'=>"input-xxlarge",'placeholder'=>''])!!}
                                    </div>
                                </div>

                                 <div class="control-group">
                                    <label class="control-label">Size đá</label>
                                    <div class="controls">
                                        {!! Form::select("sizestone",$listsizestone,@$data['sizestone'],['class'=>"input-xxlarge",'placeholder'=>''])!!}
                                    </div>
                                </div>


                                   <div class="control-group">
                                    <label class="control-label">Chất liệu</label>
                                    <div class="controls">
                                        {!! Form::select("material",$listmaterial,@$data['material'],['class'=>"input-xxlarge",'placeholder'=>'Địa chỉ'])!!}
                                    </div>
                                </div>

                                
                               


                             <div class="control-group">
                                    <label class="control-label">Mô tả</label>
                                    <div class="controls">
                                        {!! Form::textarea("description",@$data['description'],['class'=>"span9 wysihtml5" ,'placeholder'=>'description'])!!}
                                        <span class="help-inline" style='color:red'>* @if(!empty($error['description'])) {{$error['description']}} @endif </span>
                                    </div>
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
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i></h4>
                            
                        </div>
                        <div class="widget-body">
                            <!-- BEGIN FORM-->
                            <h3>Vật liệu</h3>
                            @foreach($listmaterial as $key=>$material)
                              @if($key!="")
                                 <div class="control-group">
                                    <label class="control-label">{{$material}}</label>
                                    <div class="controls">
                                        {!! Form::number("m[$key]",@$m[$key],['class'=>"input-xxlarge",'placeholder'=>'Giá tính tiền'])!!}
                                       
                                    </div>
                                </div>
                               @endif
                            @endforeach

                            <h3>Loại đá</h3>


                            @foreach($liststone as $k=>$st)
                              @if($k!="")
                                 <div class="control-group">
                                    <label class="control-label">{{$st}}</label>
                                    <div class="controls">
                                        {!! Form::number("st[$k]",@$list_st[$k],['class'=>"input-xxlarge",'placeholder'=>'Giá tính tiền'])!!}
                                       
                                    </div>
                                </div>
                               @endif
                            @endforeach
                       </div>
               </div>
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