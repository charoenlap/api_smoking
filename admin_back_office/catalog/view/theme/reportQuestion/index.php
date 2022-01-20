<div class="container-fluid mt-3">
	<div class="row">
		<div class="col-md-12">
			<div class="card border-0">
				<div class="card-header bg-white">
					<h3 class="text-theme"><?php echo $title; ?></h3>
				</div>
				<div class="card-body">
					<div class="row mb-3">
						<div class="col-md-12">
							<a href="" class="btn btn-primary">สาธารณะ</a>
							<a href="" class="btn btn-primary">เฝ้าระวัง</a>
							<a href="" class="btn btn-primary">แบบสัมภาษณ์พฤติกรรมการสูบบุหรี่</a>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<table class="table table-bordered table-striped">
								<thead>
									<tr>
										<th width="10%" class="text-center">#</th>
										<th>วันที่</th>
										<th>ประเภท</th>
										<th width="15%"></th>
									</tr>
								</thead>
								<tbody>
									<?php 
										$i = 1;
										foreach ($lists as $key => $value) {
									?>
									<tr>
										<td class="text-center"><?php echo $i++; ?></td>
										<td><?php echo $value['date_add']; ?></td>
										<td><?php echo $value['title']; ?></td>
										<td class="text-center">
											<a href="<?php echo route('reportQuestion/detail&id='.$value['id']); ?>" class="btn btn-info"><i class="far fa-eye"></i> รายละเอียด</a>
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
		$('#page-reportquestion').addClass('active');
	});
</script>