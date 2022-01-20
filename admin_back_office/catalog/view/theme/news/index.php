<div class="container-fluid mt-3">
	<div class="row">
		<div class="col-md-12">
			<div class="card border-0">
				<div class="card-header bg-white">
					<h3 class="text-theme"><?php echo $title; ?></h3>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-12 text-end mb-3">
							<a href="<?php echo route('news/add'); ?>" class="btn btn-primary"><i class="fas fa-folder-plus"></i> เพิ่มข่าวสาร</a>
						</div>
						<div class="col-md-12">
							<table class="table table-bordered table-striped">
								<thead>
									<tr>
										<th class="text-center" width="10%">#</th>
										<th>หัวข้อ</th>
										<th>วันที่เพิ่ม</th>
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
										<td><?php echo $value['date_add']; ?></td>
										<td class="text-center">
											<a href="<?php echo route('news/edit&id='.$value['id']); ?>" class="btn btn-primary"><i class="fas fa-edit"></i> แก้ไข</a>
											<a href="<?php echo route('news/del&id='.$value['id']); ?>" class="btn btn-danger btn-del"><i class="fas fa-trash-alt"></i> ลบ</a>
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
		$('#page-news').addClass('active');
	});

	$('.btn-del').click(function (e) {
		if(confirm('ยืนยันการลบข้อมูล')==true){
			window.location = $(this).attr('href');
		}else{
			e.preventDefault();
		}
	});
</script>