@extends('ajax')
@section('ajax')
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
@endsection