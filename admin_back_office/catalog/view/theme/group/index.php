<div class="container-fluid mt-3">
	<div class="card">
		<div class="card-body">
			<form action="<?php echo route('group/add'); ?>" method="POST">
				<div class="row">
					<div class="col-12">
						<h4>เพิ่มกลุ่ม</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<input type="text" class="form-control" name="name" value="" placeholder="ชื่อกลุ่ม">
					</div>
					<div class="col-6">
						<input type="submit" value="เพิ่มกลุ่ม" class="btn btn-primary">
					</div>
				</div>
			</form>
		</div>
	</div>
	<div class="card">
		<div class="card-body">
			<div class="row">
				<div class="col-md-12 mb-3">
					<table class="table">
						<thead>
							<th width="50px;">
								ลำดับ
							</th>
							<th class="text-center">
								ชื่อกลุ่ม
							</th>
							<th width="130px;">
								จัดการ
							</th>
						</thead>
						<tbody>
							<?php $i=1;foreach($listGroup['detail'] as $val){ ?>
							<tr>
								<td>
									<?php echo $i++; ?>
								</td>
								<td>
									<?php echo $val['name']; ?>
								</td>
								<td>
									<a href="index.php?route=group/menu&id=<?php echo $val['id']; ?>" class="btn btn-warning">แก้ไข</a>
									<a href="index.php?route=group/del&id=<?php echo $val['id']; ?>" class="btn btn-danger">ลบ</a>
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