<div class="container-fluid mt-3">
	<div class="row">
		<div class="col-md-12">
			<div class="card border-0">
				<div class="card-header bg-white">
					<h3 class="text-theme"><?php echo $title; ?></h3>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-12">
							<?php if(isset($_GET['update'])){ ?>
							<div class="alert alert-success alert-dismissible fade show" role="alert">
							  <strong>success</strong> แก้ไขข้อมูลเรียบร้อย
							  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							</div>
							<?php } ?>
						</div>
						<form action="<?php echo route('article'); ?>" method="POST">
							<div class="col-md-12 mb-3">
								<table class="table">
									<thead>
										<th>
											ลำดับ
										</th>
										<th>
											ชื่อกลุ่ม
										</th>
										<th>
											จัดการ
										</th>
									</thead>
									<tbody>
										<tr>
											<td>
												
											</td>
											<td>
												
											</td>
											<td>
												
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="col-md-12">
								<button class="btn btn-primary" type="submit">บันทึก</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	$(document).ready(function() {
		$('#page-article').addClass('active');
	});

	$('#summernote').summernote({
    placeholder: 'Hello stand alone ui',
    tabsize: 2,
    height: 300,
	});
</script>