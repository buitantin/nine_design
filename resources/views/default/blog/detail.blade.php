@extends("home")

@section("content")

   
 
		<div class="row">
			
			<div class=" col-md-12 my_box_content col-md-12 col-sm-12 col-xs-12">
				<ul class="breadcrumb">
					    <li><a href="/">Trang chủ</a></li>
					    <li><a href="{{route('blog')}}">Blog</a></li>
					    <li class="active">{{$detail['name']}}</li>
					</ul>
			<div class="content_boxstore">
					<div class='row-fluid'>
							<div class='col-md-7 col-sm-12 main-blog-content'>
								<p>
									<small>{{App\Library\Data::getWeek($detail->updated_at)}}  |  {{$detail->updated_at}}</small>
								</p>
								<h1 class="title-blog">{{$detail->name}}</h1>
								<h3 class="description-blog">{!!$detail->description!!}</h3>

								<div  class="content-blog">
								<img src="{{BLOG_URL.'big/blog_'.$detail->id.'.jpg'}}" alt="{{$detail->name}}" title="{{$detail->name}}" />
										{!! $detail->content!!}
								</div>
							</div>
							<div class='col-md-5 col-sm-12'>
								<ul class="list-inline">

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
						</div>
					</div>
				
						

					
		</div>
		</div>

@endsection