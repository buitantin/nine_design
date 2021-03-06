@extends('home')
@section('content')
		<div class="row">
			<div class="header_tab width100 photo_tabparent"><!-- tab -->
				<ul class="list-inline">

					@foreach($catechild as $child)	
						<li class="li_tab_1  col_20" idx="{{$child->id}}">
							<a class="" title="{{$child->name}}">
								<img alt="{{$child->name}}" title="{{$child->name}}" src="{{CATECHILD_URL.'cate_'.$child->id.'.png'}}" class="" />
								<p>{{$child->name}}</p>
							</a>
							<div class="line_box"></div>
						</li>
					@endforeach
					
				</ul>
		    </div><!-- end menu tab -->
			<div class=" col-md-12 box_content_my col-md-12 col-sm-12 col-xs-12">

				@foreach($catechild as $child)	
				 <div class="box_content_my{{$child->id}} content_box" style="display: none;">
					<div class="boxstore_content">
						
						<div class="box_tab_child">


						
							<ul class="tabs_child_head list-inline">
								<li class="tab_child_li active_tabs" idy="1"><a >SÁCH MẪU</a></li>
								<li class="tab_child_li " idy="2"><a >Báo giá thiết kế và in ấn</a></li>
								<li class="tab_child_li " idy="3"><a >gửi file ảnh</a></li>
							</ul>
							<div class="content_box_child">
								<div class="content_box_child1 body_child">
									<div class="body_child_main">
										<p>{!! $child->description !!}</p>
										
										
									</div>
									<div class="btn_nexttabs">
										<i class="arrow_nexttabs"></i>
									</div>
								</div>

								<div class="content_box_child2 body_child" style="display:none;">
									<div class="body_child_main">
										<p>{!! $child->quote !!}</p>
									</div>
								</div>

								<div class="content_box_child3 body_child" style="display:none;">
									<div class="body_child_main">
										<div class="box_send_img">
											<div class="row">
	     										<div class="col-md-3 col-sm-3 col-xs-3 col_uploadfile">
	     											<div class="upload_file_img"><input id="files" name="images" type="file">
	     											</div>
	     											<p class="uploadfile">UPLOAD FILE ẢNH</p>
	     											<p class="numpage">SỐ TRANG SÁCH ẢNH</p>
	     											<p>( Mặc định là 40 trang )</p>
	     											<input class="" type="text" id="pagenum" name="pagenum" />
													         
												</div>
												<div class="col-md-3 col-sm-3 col-xs-3">
												</div>
												<div class="col-md-6 col-sm-6 col-xs-6">
												</div>
											</div>
										</div>
									</div>
								</div>


								<ul>
											@foreach($product[$child->id] as $p)
											<li>
												<figure>
													<p>
														<a href="{{route('detail',['id'=>$p->name,'alias'=>App\Library\Data::toAlias2($p->name)] )}}" title="{{$p->name}}">
													<img src="{{PRODUCT_BIG_URL.'product_'.$p->id.'.jpg'}}" alt="{{$p->name}}" title="{{$p->name}}" />
														</a>
													</p>


													<a href="{{route('detail',['id'=>$p->name,'alias'=>App\Library\Data::toAlias2($p->name)] )}}" title="{{$p->name}}">
														<figcaption> {{$p->name}} </figcaption>
													</a>
												</figure>
											</li>
											@endforeach
										</ul>

							</div>

										



						</div>
					
					</div>
					<div class="box_read">
						<a href="{{route('catechild',['id'=>$child->id,'alias'=> App\Library\Data::toAlias2($child->name) ])}}" class="btn_readmore" >XEM TIẾP</a>
					</div>

				</div>

			 @endforeach	

			</div><!--end noi dung tab-->
		</div>
	
    <!--  end js click tab -->

@endsection