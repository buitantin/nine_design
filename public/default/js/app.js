var app = angular.module('ninedesign', [], function($interpolateProvider) {
	$interpolateProvider.startSymbol('<%');
	$interpolateProvider.endSymbol('%>');
});
app.constant("PUBLIC_URL",{
	URL:"/api/"
})
app.controller("HeaderCtrl",function($scope,$http,PUBLIC_URL,ValidateData){
		$scope.ValidateData=ValidateData;
	
		$http.post(PUBLIC_URL.URL+"cate").success(function(result){
			$scope.listcate=result;
		});
})
app.controller("GeneralCtrl",function($scope,$http,PUBLIC_URL){
	$scope.general=[];
	$http.post(PUBLIC_URL.URL+"general").success(function(result){
		$scope.general=result;
	})
})
app.controller("SlideCtrl",function($scope,$http,PUBLIC_URL){
	$scope.slideshow=[];
	$http.post(PUBLIC_URL.URL+"slideshow").success(function(result){
		console.log(result);

		$scope.slideshow=result;
	});

})
app.controller("ContactCtrl",function($scope,$http,PUBLIC_URL){
	$scope.error=[];
	console.log($scope.error);
	$scope.submit_contact=function(){
		if($scope.contact_name==''){
			$scope.error['name']="Vui lòng nhập tên của bạn";
		}
		if($scope.contact_email==''){
			$scope.error['email']="Vui lòng nhập Email";
		}
		if($scope.contact_subject==''){
			$scope.error['subject']="Vui lòng nhập tiêu đề";
		}
		if($scope.contact_content==""){
			$scope.error['content']="Vui lòng nhập nội dung";
		}
	}
})

.directive("toPrice",function(){
  	return {
  		link:function(scope,element,attributes){
  					scope.$watch(attributes.toPrice,function(number){
  						if(number != null && number != undefined)
  						element.text(number.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.") + " Đ" );
			  	 
  					});
  					
  					
  		}
  		
  	};
  })

.factory('ValidateData', function(){

		return {
			listcate:function(al){
				al=al.split("--").join("-");
			
				var t={
					"1":"dien-tu","2":"dien-lanh","9":"gia-dung",
					"15":"vien-thong","19":"di-dong-tablet"
					,"20":"vi-tinh","21":"noi-that","22":"me-be","23":"dien-co",
					"97":"trang-tri","104":"thoi-trang-phu-kien",
					"112":"suc-khoe-sac-dep","120":"dich-vu"};
				for(var x in t){
					
					if(al==t[x]){
						return x;
					}
				}
				return 0;

			},
			repAll:function(string){
				if(typeof string == 'string'){
				 		return string.split(' ').join('');
				}
				return '';
			},
			replaceValue:function(string){
				if(typeof string == 'string'){
				 		return string.split(" ").join("-");
				}
				return '';
			},
			convertString:function(str)
			{
				if(typeof str === "string"){


				str=str.toLowerCase();

   				 var translate = {
					    'à':'a','á':'a','ả':'a','ã':'a','ạ':'a',
						'ă':'a','ằ':'a','ắ':'a','ẳ':'a','ẵ':'a','ặ':'a',
						'â':'a','ầ':'a','ấ':'a','ẩ':'a','ẫ':'a','ậ':'a',
						'À':'a','Á':'a','Ả':'a','Ã':'a','Ạ':'a',
						'Ă':'a','Ằ':'a','Ắ':'a','Ẳ':'a','Ẵ':'a','Ặ':'a',
						'Â':'a','Ầ':'a','Ấ':'a','Ẩ':'a','Ẫ':'a','Ậ':'a',    
						'đ':'d','Đ':'d',
						'è':'e','é':'e','ẻ':'e','ẽ':'e','ẹ':'e',
						'ê':'e','ề':'e','ế':'e','ể':'e','ễ':'e','ệ':'e',
						'È':'e','É':'e','Ẻ':'e','Ẽ':'e','Ẹ':'e',
						'Ê':'e','Ề':'e','Ế':'e','Ể':'e','Ễ':'e','Ệ':'e',
						'ì':'i','í':'i','ỉ':'i','ĩ':'i','ị':'i',
						'Ì':'i','Í':'i','Ỉ':'i','Ĩ':'i','Ị':'i',
						'ò':'o','ó':'o','ỏ':'o','õ':'o','ọ':'o',
						'ô':'o','ồ':'o','ố':'o','ổ':'o','ỗ':'o','ộ':'o',
						'ơ':'o','ờ':'o','ớ':'o','ở':'o','ỡ':'o','ợ':'o',
						'Ò':'o','Ó':'o','Ỏ':'o','Õ':'o','Ọ':'o',
						'Ô':'o','Ồ':'o','Ố':'o','Ổ':'o','Ỗ':'o','Ộ':'o',
						'Ơ':'o','Ờ':'o','Ớ':'o','Ở':'o','Ỡ':'o','Ợ':'o',
						'ù':'u','ú':'u','ủ':'u','ũ':'u','ụ':'u',
						'ư':'u','ừ':'u','ứ':'u','ử':'u','ữ':'u','ự':'u',
						'Ù':'u','Ú':'u','Ủ':'u','Ũ':'u','Ụ':'u',
						'Ư':'u','Ừ':'u','Ứ':'u','Ử':'u','Ữ':'u','Ự':'u',
						'ỳ':'y','ý':'y','ỷ':'y','ỹ':'y','ỵ':'y',
						'Y':'y','Ỳ':'y','Ý':'y','Ỷ':'y','Ỹ':'y','Ỵ':'y'
				    };
					
					for(var t in translate){
						str=str.split(t).join(translate[t]) ;
					}

					var cha=[",", "”","–","~","`","!","@","#","$","%",'%',"^","&","*","(",")","-","_","=","+","{","[","]","}","|","\\",":",";","'","\"","<",",",">",".","?","/"];
						for (var i = cha.length - 1; i >= 0; i--) {
							
							//str=str.replace(cha[i],"");
							str=str.split(cha[i]).join("");
						};

							
						
					return str;

				}else{
					return '0';
				}
			  },
			  toIcon:function(string){
			  		return this.repAll (this.convertString(string) ).toLowerCase();
			  },
			  toAlias:function(string){
			  	if(string!=undefined && string != null){
			  	 return this.replaceValue(this.convertString(string)).toLowerCase().replace("---","-").replace("--","-") ;
			  	}
			  },
			  toPrice:function(number){
			  		if(!IsNumeric(number*1)){
			  			return '0 D';
			  		}
			  		return number;
				  	var number = number.toFixed(2) + '';
				    var x = number.split('.');
				    var x1 = x[0];
				    var x2 = x.length > 1 ? '.' + x[1] : '';
				    var rgx = /(\d+)(\d{3})/;
				    while (rgx.test(x1)) {
				        x1 = x1.replace(rgx, '$1' + ',' + '$2');
				    }
				    return x1 + x2;
			  }


			}



		
})


function toPrice(number){
	if(number==0){
		return "Liên hệ";
	}
	if(number != null && number != undefined){
		return (number.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.") + " Đ" );
	}
  						
}