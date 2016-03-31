 <div class="header"><!-- header -->
		<div class="container box_head">
			<div class="header_bg">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 menu_top">
						<ul class="list-inline">
							<li> <a href="/" >Trang chủ</a> </li> /
							<li> <a href="{{route('info')}}">Giới thiệu</a> </li> /
							<li> <a href="{{route('blog')}}">Blog</a> </li> /
							<li> <a href="{{route('lear')}}" >Dạy và học</a> </li> /
							<li> <a href="#" class="click_contact">Liên hệ</a> </li>																				
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12  menu_hotline">
						<i class="hotline"><span> Hotline {{$general['hotline']}}</span></i>
					</div>
				</div>
			</div>
			<div class="row"><!--menu main-->
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="box_menu">
						<ul class="menu_main list-unstyled">
						@foreach($categories as $cate)
							<li class=""><a href="{{route('cate',['alias'=>App\Library\Data::toAlias2($cate['name']) ] ) }}" title="{{$cate['name']}}">{{$cate['name']}}</a></li>
						@endforeach
						</ul>
					</div>
				</div>
			</div>
			<div class="row"><!-- slideshow  -->
				<div class="col-md-12 box_slideshow col-sm-12 col-xs-12">

					<div class="img_slideshow">
						<ul class='box_skitter_large'>
							<li>
								<a href="#" target="_blank">
									<img src="/public/default/img/banner.png" alt="#" class="downBars" />
									<button type="button" class="btn btn-default btn-sm btn_see">XEM</button>
								</a>
							</li>
							
						</ul>
					</div>
					<div class="row box_social">
						<ul class="list-unstyled">
							<li>
								 <a class="btn btn-social-icon" href="{{$general['pirture']}}" target="_blank">
									<i class="connect_img"></i>
								  </a>
							</li>
							<li>
								 <a class="btn btn-social-icon" href="{{$general['facebook']}}" target="_blank">
									<i class="connect_face"></i>
								  </a>
							</li>
							<li>
								<a class="btn btn-social-icon" href="{{$general['skype']}}" target="_blank">
									<i class="connect_skype"></i>
								  </a>
							</li>
							<li>
								<a class="btn btn-social-icon" href="{{$general['twitter']}}" target="_blank">
									<i class="connect_tw"></i>
								</a>
							</li>
							<li>
								<a class="btn btn-social-icon" href="{{$general['google']}}" target="_blank">
									<i class="connect_google"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
				
			</div><!-- end slideshow -->
			<div class="row logo_nine">
				<a href="/"><img class="img-responsive" alt="nine design" src="/public/default/img/logo.png" /></a>
			</div>
		</div>  
	</div><!-- end header -->