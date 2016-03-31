@extends("home")

@section("content")

   
 
		<div class="row">
			<div class="col-md-12 tabs_header col-sm-12 col-xs-12"><!-- tab -->
				<ul class="list-inline">
					@foreach($categories as $cate)
					<li class="tab_li_1  col-md-3 col-sm-3 col-xs-3" idx="{{$cate['id']}}">
						<a class="">

							<img alt="#" title="#" src="{{CATE_URL.'cate_'.$cate['id'].'.png'}}" class="" /><p>{{$cate['description']}}</p>
						</a>
						<div class="box_line"></div>
					</li>
					@endforeach
				</ul>
		    </div><!-- end menu tab -->
			<div class=" col-md-12 my_box_content col-md-12 col-sm-12 col-xs-12">
				
				@foreach($categories as $cate)
				<div class="my_box_content{{$cate['id']}} box_cotent" style="display: none;">
					<div class="content_boxstore">
							{!!$cate['content']!!}
					</div>
				</div>
				@endforeach
				


				


			</div><!--end noi dung tab-->
			<div class=" col-md-12 my_box_content col-md-12 col-sm-12 col-xs-12">
			<div class="content_boxstore">
						
						<ul>

							@foreach($listblog as $blog)
							<li>
								<figure>
									<p>
									  <a href="{{route('detailblog',['id'=>$blog->id,'alias'=>App\Library\Data::toAlias2($blog->name)])}}" title="{{$blog->name}}">
										<img src="{{BLOG_URL.'big/blog_'.$blog->id.'.jpg'}}" alt="{{$blog->name}}" title="{{$blog->name}}" />
									  </a>

									</p>
									  <a href="{{route('detailblog',['id'=>$blog->id,'alias'=>App\Library\Data::toAlias2($blog->name)])}}" title="{{$blog->name}}">
										<figcaption> {{$blog->name}} </figcaption>
										</a>
								</figure>
							</li>
							@endforeach
						</ul>
						
					</div>
					<div class="bot_read">
						<a href="{{route('blog')}}" class="btn_readmore" >XEM TIẾP</a>
					</div>

					
		</div>
		</div>

@endsection