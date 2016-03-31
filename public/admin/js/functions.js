$(document).ready(function() {
    //Thay đổi SL
    $(".stock_num").change(function(){
        var stock_num = $(this).val();
        var idxx=$(this).attr("idxx");
        var cid_supplier = $(this).attr("cid_supplier");
        $.ajax({
            type:"GET",
            url:"/admin/products/stocknum/id_pro/"+ idxx +"/stock_num/"+ stock_num +"/cid_supplier/"+ cid_supplier,
            success:function(result){
                //alert(result);
            }
        }); 
    });
    //End Thay đổi SL
  $('div.sidenav:eq(0)> div.navhead').click(function() {
	$(this).next().slideToggle('fast');
  });
});

function initEditor(el){
	CKEDITOR.replace(el,{
		resize_enabled: false,
		language:   "en",
		height : 300,
		width:800,
		filebrowserBrowseUrl :      "http://"+window.location.host+'/public/ckeditor/ckfinder/ckfinder.html',
		filebrowserImageBrowseUrl : "http://"+window.location.host+'/public/ckeditor/ckfinder/ckfinder.html?Type=Images',
		filebrowserFlashBrowseUrl : "http://"+window.location.host+'/public/ckeditor/ckfinder/ckfinder.html?Type=Flash',
		filebrowserUploadUrl :      "http://"+window.location.host+'/public/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
		filebrowserImageUploadUrl : "http://"+window.location.host+'/public/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
		filebrowserFlashUploadUrl : "http://"+window.location.host+'/public/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash' 
	});
}
function initEditorBasic(el){
	CKEDITOR.replace(el,{
		resize_enabled: false,
		language:   "en",
		toolbar:"Basic",
		height : 150,
		width:1000,
		filebrowserBrowseUrl :      "http://"+window.location.host+'/public/ckeditor/ckfinder/ckfinder.html',
		filebrowserImageBrowseUrl : "http://"+window.location.host+'/public/ckeditor/ckfinder/ckfinder.html?Type=Images',
		filebrowserFlashBrowseUrl : "http://"+window.location.host+'/public/ckeditor/ckfinder/ckfinder.html?Type=Flash',
		filebrowserUploadUrl :      "http://"+window.location.host+'/public/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
		filebrowserImageUploadUrl : "http://"+window.location.host+'/public/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
		filebrowserFlashUploadUrl : "http://"+window.location.host+'/public/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash' 
	});
}
function initEditorBasic2(el){
	CKEDITOR.replace(el,{
    resize_enabled: false,
    language:   "en",
    height : 150,
	width:1000,
	toolbar: [
		[ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo','-','Bold', 'Italic','-','NumberedList', 'BulletedList' ,'-','Styles', 'Format', 'Font', 'FontSize','-','TextColor', 'BGColor' ,'-', 'Image'],
	],
    filebrowserBrowseUrl :      "http://"+window.location.host+'/public/ckeditor/ckfinder/ckfinder.html',
    filebrowserImageBrowseUrl : "http://"+window.location.host+'/public/ckeditor/ckfinder/ckfinder.html?Type=Images',
    filebrowserImageUploadUrl : "http://"+window.location.host+'/public/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
	});
}
