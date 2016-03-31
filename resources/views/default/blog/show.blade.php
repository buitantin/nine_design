@extends("home")

@section("content")

   
 
		<div class="row">
			
			<div class=" col-md-12 my_box_content col-md-12 col-sm-12 col-xs-12">
				<ul class="breadcrumb">
					    <li><a href="/">Trang chủ</a></li>
					    <li class="active">Blog</li>
					</ul>
			<div class="content_boxstore">
						
						<ul>

							@foreach($list as $blog)
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
					<div class='text-center'>
						{!! $list->links(); !!}
					</div>
						

					
		</div>
		</div>

@endsection