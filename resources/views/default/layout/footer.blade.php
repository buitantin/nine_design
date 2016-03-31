
   <div class="footer"><!-- footer -->
		<div class="container-fluid">
			<div class="row footer_main">
				<div class="col-md-4 menulink_footer col-sm-4 col-xs-6">
					<h6>Các dịch vụ nổi bật</h6>
					<ul class="list-unstyled">

					@foreach($catechild as $child)
						<li class="">

							<a href="{{route('catechild',['id'=>$child->id,'alias'=>App\Library\Data::toAlias2($child->name)])}}" target="_blank" title="{{$child->name}}">
									<img src="{{CATECHILD_URL.'icon/icon_'.$child->id.'.png'}}" alt='{{$child->name}}' title="{{$child->name}}"/>

									{{$child->name}}
							</a>

						</li>
					@endforeach
						
					</ul>
				</div>
				<div class="col-md-3 contact_footer col-sm-3 col-xs-2">
					<h6>Liên hệ</h6>
					<ul class="list-unstyled contact_address">
						<li class=""><p>Điện thoại:</p><p>{{$general['phone']}}</p></li>
						
						<li class=""><p>Email:</p><p>ninedesign@gmail.com</p></li>
						<li class=""><p>Địa chỉ:</p><p>{{$general['address']}}</p></li>
					</ul>
					<ul class="list-unstyled connect_social">
						<li> 
							<span>Hình ảnh</span>
							 <a class="btn btn-social-icon" href="{{$general['pirture']}}" target="_blank">
								<i class="connect_img"></i>
							 </a>
						</li>
						<li>
							<span>Facebook</span>
							 <a class="btn btn-social-icon" href="{{$general['facebook']}}" target="_blank">
								<i class="connect_face"></i>
							 </a>
						</li>
						<li>
							<span>Skype</span>
							<a class="btn btn-social-icon" href="{{$general['skype']}}" target="_blank">
								<i class="connect_skype"></i>
							 </a>
						</li>
						<li>
							<span>Twister</span>
							<a class="btn btn-social-icon" href="{{$general['twitter']}}" target="_blank">
								<i class="connect_tw"></i>
							</a>
						</li>
						<li>
							<span>Google+</span>
							<a class="btn btn-social-icon" href="{{$general['google']}}" target="_blank">
								<i class="connect_google"></i>
							</a>
						</li>
					</ul>
				</div>
				<div class="col-md-5 col-sm-5 col-xs-4">
					<form  id="contactform">
						<div class="form_footer">
							
							@if(!empty($data['contactsuccess']))
									<h4 class='error-contact'>{{$data['contactsuccess']}}</h4>
								@endif
							<div class="format_tag">
								<p>Họ và tên:</p>
								{!! Form::text("contactname",@$data['contactname'])!!}
								@if(!empty($error['contactname']))
									<p class='error-contact'>{{$error['contactname']}}</p>
								@endif
							</div>
							<div class="format_tag">
								<p>Email của bạn:</p>
								{!! Form::text("contactemail",@$data['contactemail'])!!}
								@if(!empty($error['contactemail']))
									<p class='error-contact'>{{$error['contactemail']}}</p>
								@endif
							</div>
							<div class="format_tag">
								<p>Chủ đề:</p>
								{!! Form::text("contactsubject",@$data['contactsubject'])!!}
								@if(!empty($error['contactsubject']))
									<p class='error-contact'>{{$error['contactsubject']}}</p>
								@endif
							</div>
							<div class="format_tag">
								<p>Nội dung:</p>
								{!! Form::textarea("contactcontent",@$data['contactcontent'])!!}
								@if(!empty($error['contactcontent']))
									<p class='error-contact'>{{$error['contactcontent']}}</p>
								@endif
							</div>
							<div class="format_tag">
								

								 {!! csrf_field() !!}
						<div  class='captcha_style'>		 
  						 {!! captcha_image_html('ExampleCaptcha') !!}
  						</div>


								<input type="text" class="" placeholder="" name="contactCaptchaCode" id="CaptchaCode" />
								@if(!empty($error['contactCaptchaCode']))
									<p class='error-contact'>{{$error['contactCaptchaCode']}}</p>
								@endif
							</div>
							<div class="box_sent">
								<input type="submit" class="btn_sendinfo" value="GỬI" />
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="row menu_bottom">
				<div class="col-md-8 col-sm-8 col-xs-12">
					<ul class="list-inline">
						<li> <a href="/" target="_blank">Trang chủ</a> </li> /
						<li> <a href="{{route('info')}}" target="_blank">Giới thiệu</a> </li> /
						<li> <a href="{{route('blog')}}" target="_blank">Blog</a> </li> /
						<li> <a href="{{route('lear')}}" target="_blank">Dạy và học</a> </li> /
						<li> <a href="" class="click_contact">Liên hệ</a> </li>																				
					</ul>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<span class="copyright"> Copyrighted of Nine Design</span>
				</div>
			</div>
		</div>
	</div><!-- end footer -->
