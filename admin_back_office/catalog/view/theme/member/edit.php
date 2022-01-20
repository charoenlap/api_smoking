<div class="container-fluid mt-3">
	<div class="row">
		<div class="col-md-12">
			<div class="card border-0">
				<div class="card-header bg-white">
					<h3 class="text-theme"><?php echo $title; ?></h3>
				</div>
				<form action="<?php echo route('member/edit&id='.$result['id']); ?>" method="POST">
				<div class="card-body">
					<div class="row">
						<div class="col-md-6 mb-3">
							<label for="">ชื่อ</label>
							<input type="text" class="form-control" name="name" value="<?php echo $result['name']; ?>">
						</div>
						<div class="col-md-6 mb-3">
							<label for="">นามสกุล</label>
							<input type="text" class="form-control" name="lastname" value="<?php echo $result['lastname']; ?>">
						</div>
						<div class="col-md-6 mb-3">
							<label for="">Username</label>
							<input type="text" class="form-control" name="username" value="<?php echo $result['username']; ?>">
						</div>
						<div class="col-md-6 mb-3">
							<label for="">Password</label>
							<input type="password" class="form-control" name="password" value="<?php echo $result['password']; ?>">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<button class="btn btn-primary" type="submit">บันทึก</button>
							<a href="<?php echo route('member'); ?>" class="btn btn-danger">ยกเลิก</a>
						</div>
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script>
	$(document).ready(function() {
		$('#page-member').addClass('active');
	});
</script>