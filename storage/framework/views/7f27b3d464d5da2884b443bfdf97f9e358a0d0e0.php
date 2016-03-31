<?php $__env->startSection("content"); ?>


	<div class='container'>
			<div id='header' ng-controller="HeaderCtrl">
					<div class='logo'>
							<img src='/public/default/img/logo.png' title="nine design" />
					</div>
					<div class=''>
						<ul class="list-inline list-unstyled">
								<li><a href='/' title="trang chủ">Trang chủ</a></li>
								<li><a href='/gioi-thieu' title="Giới thiệu">Giới thiệu</a></li>
								<li><a href='/blog-hang-trinh' title="Blog hàng trình">Blog hàng trình</a></li>
								<li><a href='/day-va-hoc' title="Dạy và học">Dạy và học</a></li>
								<li><a href='javascript:;' class='my_contact'>Liên hệ</a></li>
						</ul>
					</div>

					<div class='menu'>
						<div class='service'>
								Dịch vụ
						</div>
						<ul class='list-inline list-unstyled'>
							<li ng-repeat='cate in listcate'><a ng-href="<%ValidateData.toAlias(cate.name)%>"><%cate.name%></a></li>
						</ul>
					</div>
			</div>
			<div id='main'>
					<div class='images'>

					</div>
			</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("home", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>