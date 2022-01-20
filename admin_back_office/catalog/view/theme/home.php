<div class="container-fluid mt-3">
	<div class="row mt-4">
		<div class="col-md-12">
			<h4>ภาพรวม</h4>
		</div>
	</div>
	<div class="row mt-4">
		<div class="col-md-3">
			<div class="card bg-warning">
				<div class="card-body">
					<h2 class="text-center text-white"><span class="text-success"></span> 200</h2>
					<h4 class="text-center text-white">สมาชิก</h4>
				</div>
				<div class="card-footer">
					<a href="<?php echo route('member'); ?>" class="text-white"> เพิ่มเติม</a>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card bg-success">
				<div class="card-body">
					<h2 class="text-center text-white"><span class="text-success"></span> 10</h2>
					<h4 class="text-center text-white">รายงาน</h4>
				</div>
				<div class="card-footer">
					<a href="<?php echo route('report'); ?>" class="text-white"> เพิ่มเติม</a>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card bg-primary">
				<div class="card-body">
					<h2 class="text-center text-white"><span class="text-success"></span> 58</h2>
					<h4 class="text-center text-white">แบบสอบถาม</h4>
				</div>
				<div class="card-footer">
					<a href="<?php echo route('question'); ?>" class="text-white"> เพิ่มเติม</a>
				</div>
			</div>
		</div>
	</div>
	
</div>
<script>
	$('#page-dashboard').addClass('active');
</script>