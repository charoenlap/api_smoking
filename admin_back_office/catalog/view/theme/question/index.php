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
							<table class="table table-bordered table-striped">
								<thead>
									<tr>
										<th class="text-center" width="10%">#</th>
										<th>ประเภทแบบสอบถาม</th>
										<!-- <th>แบบสอบถาม</th> -->
										<th class="text-center" width="20%"></th>
									</tr>
								</thead>
								<tbody>
									<?php 
										$i = 1;
										foreach ($lists as $key => $value) {
									?>
									<tr>
										<td class="text-center"><?php echo $i++; ?></td>
										<td><?php echo $value['title']; ?></td>
										<td class="text-center"><a href="<?php echo route('question/listQuestion&cat_id='.$value['id']); ?>" class="btn btn-dark">รายการแบบสอบถาม</a></td>
										<!-- <td class="text-center">
											<a href="<?php echo route('question/del'); ?>" class="btn btn-danger btn-del"> ลบ</a>
										</td> -->
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
		$('#page-question').addClass('active');
	});

	$('.btn-del').click(function (e) {
		if(confirm('ยืนยันการลบข้อมูล')==true){
			window.location = $(this).attr('href');
		}else{
			e.preventDefault();
		}
	});
</script>