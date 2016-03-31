$(function(){
		$(window).load(function(){
				if( $("li").hasClass("tab_li_1") ){

					$('.tab_li_1').first().addClass("current_tab_dt");
					$(".box_cotent").first().show();

					$(".tab_li_1").click(function(){
						$(this).parent().children(".current_tab_dt").removeClass("current_tab_dt");
						$(this).addClass("current_tab_dt");
						$(".box_cotent").hide();
						$(".my_box_content"+$(this).attr("idx")).show();
					});
				}


				if( $("li").hasClass("li_tab_1") ){

					$('.li_tab_1').first().addClass("current_tab_dt tab_current");
					$(".content_box").first().show();
					
					$(".li_tab_1").click(function(){
						$(this).parent().children(".tab_current").removeClass("tab_current");
						$(this).addClass("tab_current");
						$(".content_box").hide();
						$(".box_content_my"+$(this).attr("idx")).show();
					});
				}
		})
				

		$(".click_contact").click(function(){
				$("body").animate({ scrollTop:$("#contactform").offset().top},1000);
				return false;
		});
		$("#contactform").submit(function(){
			$.ajax({
				type:"POST",
				url:"/submitcontact",
				data:$("#contactform").serialize(),
				success:function(r){
					$("#contactform").parent().html(r);

				}

			});
			return false;
		});
})