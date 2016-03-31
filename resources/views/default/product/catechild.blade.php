@extends('home')
@section('content')
		<div class="row">
			
			<div class=" col-md-12 my_box_content col-md-12 col-sm-12 col-xs-12">
				<ul class="breadcrumb">
					    <li><a href="/">Trang chủ</a></li>
					     <li><a href="{{route('cate',['alias'=>$cate->alias])}}">{{$cate->name}}</a></li>
					    <li class="active">{{$child->name}}</li>
					</ul>
			<div class="content_boxstore">
									<ul>
											@foreach($product as $p)
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

				<div class="text-center	">										
					{!! $product->links() !!}					
				</div>
		</div>

		</div>
		</div>


	
    <!--  end js click tab -->

@endsection