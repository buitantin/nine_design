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
                       
                       <li><a href="#">{{$data['name']}}</a><span class="divider-last">&nbsp;</span></li>
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
                                       {!! Form::radio("is_home",'1',($data['is_home']=='1') ? true : false ) !!}
                                      Có
                                     </label>
                                     <label class="radio">
                                       {!! Form::radio("is_home",'0',($data['is_home']=='0') ? true : false ) !!}
                                      Không
                                     </label>  

                                  
                                  
                                     
                                  </div>
                               </div>




                                 <div class="control-group ">
                                  <label class="control-label">Trang sức đá màu</label>
                                  <div class="controls">
                                     <label class="radio">
                                       {!! Form::radio("is_color",'1',($data['is_color']=='1') ? true : false ) !!}
                                      Có
                                     </label>
                                     <label class="radio">
                                       {!! Form::radio("is_color",'0',($data['is_color']=='0') ? true : false ) !!}
                                      Không
                                     </label>  

                                  
                                  
                                     
                                  </div>
                               </div>


                                 <div class="control-group ">
                                  <label class="control-label">Trang sức mới</label>
                                  <div class="controls">
                                     <label class="radio">
                                       {!! Form::radio("is_new",'1',($data['is_new']=='1') ? true : false ) !!}
                                      Có
                                     </label>
                                     <label class="radio">
                                       {!! Form::radio("is_new",'0',($data['is_new']=='0') ? true : false ) !!}
                                      Không
                                     </label>  

                                  
                                  
                                     
                                  </div>
                               </div>



                                 <div class="control-group ">
                                  <label class="control-label">Trang sức bộ</label>
                                  <div class="controls">
                                     <label class="radio">
                                       {!! Form::radio("is_group",'1',($data['is_group']=='1') ? true : false ) !!}
                                      Có
                                     </label>
                                     <label class="radio">
                                       {!! Form::radio("is_group",'0',($data['is_group']=='0') ? true : false ) !!}
                                      Không
                                     </label>  

                                  
                                  
                                     
                                  </div>
                               </div>


 <div class="control-group ">
                                  <label class="control-label">Trang sức cưới</label>
                                  <div class="controls">
                                     <label class="radio">
                                       {!! Form::radio("is_wedding",'1',($data['is_wedding']=='1') ? true : false ) !!}
                                      Có
                                     </label>
                                     <label class="radio">
                                       {!! Form::radio("is_wedding",'0',($data['is_wedding']=='0') ? true : false ) !!}
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
                                                <img src="{{PRODUCT_SMALL_URL}}product_{{$data['id']}}.jpg" alt="">
                                            </div>
                                            <div>
                                  
                                            </div>
                                        </div>





                                    </div>
                                </div>

                                 <div class="control-group @if(!empty($error['images'])) error @endif">
                                    <label class="control-label">Hình ảnh khác</label>
                                    <div class="controls">
                                      <div class=''>
                                        {!! Form::file("otherimg[]",array("multiple"=>true))!!}
                                      </div>
                                         <span class="help-inline" >Chọn nhiều sản phẩm</span>


                                         @for($i=0;$i<6;$i++)
                                          @if(is_file(PRODUCTS_PATH."small/product_".$data['id']."_$i.jpg"))
                                             <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                    <img src="{{PRODUCT_SMALL_URL}}product_{{$data['id']}}_{{$i}}.jpg" alt="">
                                                </div>
                                                <div>
                                      
                                                    <a href="/admin/product/removeimage?name=product_{{$data['id']}}_{{$i}}.jpg" class="btn delete_image">Xóa</a>
                                                </div>
                                            </div>
                                            @endif
                                        @endfor


         



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
                                        {!! Form::select("cate",$listcate,@$data['cid_cate'],['class'=>"input-xxlarge",'placeholder'=>''])!!}
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Loại đá</label>
                                    <div class="controls">
                                        {!! Form::select("stone",$liststone,@$data['cid_stone'],['class'=>"input-xxlarge",'placeholder'=>''])!!}
                                    </div>
                                </div>

                                 <div class="control-group">
                                    <label class="control-label">Size đá</label>
                                    <div class="controls">
                                        {!! Form::select("sizestone",$listsizestone,@$data['cid_size'],['class'=>"input-xxlarge",'placeholder'=>''])!!}
                                    </div>
                                </div>


                                   <div class="control-group">
                                    <label class="control-label">Chất liệu</label>
                                    <div class="controls">
                                        {!! Form::select("material",$listmaterial,@$data['cid_material'],['class'=>"input-xxlarge",'placeholder'=>'Địa chỉ'])!!}
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
                                        {!! Form::number("m[$key]",@$allvalue[$key],['class'=>"input-xxlarge",'placeholder'=>'Giá tính tiền'])!!}
                                       
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
                                        {!! Form::number("st[$k]",@$allvalue[$k],['class'=>"input-xxlarge",'placeholder'=>'Giá tính tiền'])!!}
                                       
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