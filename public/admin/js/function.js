function initEditor(el){
	CKEDITOR.replace(el,{
		resize_enabled: false,
		language:   "en",
		height : 300,
		width:1000,
		filebrowserBrowseUrl :      "http://"+window.location.host+'/public/admin/assets/ckeditor/ckfinder/ckfinder.html',
		filebrowserImageBrowseUrl : "http://"+window.location.host+'/public/admin/assets/ckeditor/ckfinder/ckfinder.html?Type=Images',
		filebrowserFlashBrowseUrl : "http://"+window.location.host+'/public/admin/assets/ckeditor/ckfinder/ckfinder.html?Type=Flash',
		filebrowserUploadUrl :      "http://"+window.location.host+'/public/admin/assets/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
		filebrowserImageUploadUrl : "http://"+window.location.host+'/public/admin/assets/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
		filebrowserFlashUploadUrl : "http://"+window.location.host+'/public/admin/assets/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash' 
	});
}
function initEditorBasic(el){
	CKEDITOR.replace(el,{
		resize_enabled: false,
		language:   "en",
		toolbar:"Basic",
		height : 150,
		width:1000,
		filebrowserBrowseUrl :      "http://"+window.location.host+'/public/admin/assets/ckeditor/ckfinder/ckfinder.html',
		filebrowserImageBrowseUrl : "http://"+window.location.host+'/public/admin/assets/ckeditor/ckfinder/ckfinder.html?Type=Images',
		filebrowserFlashBrowseUrl : "http://"+window.location.host+'/public/admin/assets/ckeditor/ckfinder/ckfinder.html?Type=Flash',
		filebrowserUploadUrl :      "http://"+window.location.host+'/public/admin/assets/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
		filebrowserImageUploadUrl : "http://"+window.location.host+'/public/admin/assets/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
		filebrowserFlashUploadUrl : "http://"+window.location.host+'/public/admin/assets/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash' 
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
    filebrowserBrowseUrl :      "http://"+window.location.host+'/public/admin/assets/ckeditor/ckfinder/ckfinder.html',
    filebrowserImageBrowseUrl : "http://"+window.location.host+'/public/admin/assets/ckeditor/ckfinder/ckfinder.html?Type=Images',
    filebrowserImageUploadUrl : "http://"+window.location.host+'/public/admin/assets/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
	});
}
function delcomment(id, idxx){
    if(confirm('Bạn có chắc là muốn xóa đánh giá này?')){
        var tongcon = $("#tongcon"+idxx).val();
        $.ajax({
             url:"/admin/review/remove2/id/"+ id,
             type: 'get',
             success: function(output) {
                $(".sdelete"+id).parent().parent().remove();
                $(".tt"+id).remove();
                
                var giatri = parseFloat(tongcon)- 1;
               $("#texttongcon"+idxx).html("Tổng nhận xét con là:"+ giatri);
               $("#tongcon"+idxx).attr('value',parseFloat(tongcon)- 1);
             }
        });
	}
}
function capnhatcomment(id){
    var comment = $("#comment"+id).val();
    $.ajax({
    	   type:"GET",
    	   url:"/admin/review/chinhsua/id/"+ id+"/comment/"+comment,
    	   success:function(result){
    	     $(".thongtin"+id).hide();
             $(".noidungbandau"+id).html(comment); 
    	     $(".hien"+id).show();                 
    	   }
        });
}