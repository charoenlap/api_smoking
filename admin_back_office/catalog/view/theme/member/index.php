<div class="container-fluid mt-3">
	<div class="row">
		<div class="col-md-12">
			<div class="card border-0">
				<div class="card-header bg-white">
					<h3 class="text-theme">สมาชิก</h3>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-12 mb-3 text-end">
							<a href="<?php echo route('member/add'); ?>" class="btn btn-primary"><i class="fas fa-user-plus"></i> เพิ่มสมาชิก</a>
						</div>
						<div class="col-md-12">
							<table class="table table-bordered table-striped">
								<thead>
									<tr>
										<th class="text-center" width="10%">#</th>
										<th>ชื่อ - สกุล</th>
										<th width="20%"></th>
									</tr>
								</thead>
								<tbody>
									<?php 
										$i = 1;
										foreach ($lists as $key => $value) {
									?>
									<tr>
										<td class="text-center"><?php echo $i++; ?></td>
										<td><?php echo $value['name']." ".$value['lastname']; ?></td>
										<td class="text-center">
											<a href="<?php echo route('member/edit&id='.$value['id']); ?>" class="btn btn-primary">แก้ไข</a>
											<a href="<?php echo route('member/del&id='.$value['id']); ?>" class="btn btn-danger btn-del">ลบ</a>
										</td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	$(document).ready(function() {
		$('#page-member').addClass('active');
	});

	$('.btn-del').click(function (e) {
		if(confirm('ยืนยันการลบข้อมูล')==true){
			window.location = $(this).attr('href');
		}else{
			e.preventDefault();
		}
	});
</script>