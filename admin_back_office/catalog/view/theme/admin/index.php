<div class="container-fluid mt-3">
	<div class="card">
		<div class="card-body">
			<form action="<?php echo route('admin/add'); ?>" method="POST">
				<div class="row">
					<div class="col-12">
						<h4>เพิ่มผู้ใช้</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-3">
						<input type="text" class="form-control" name="name" value="" placeholder="ชื่อผู้ใช้">
					</div>
					<div class="col-3">
						<input type="password" class="form-control" name="password" value="" placeholder="รหัสผ่าน">
					</div>
					<div class="col-3">
						<select name="id_group" class="form-control" id="">
						<?php foreach($listGroup['detail'] as $val){ ?>
						<option value="<?php echo $val['id'];?>"><?php echo $val['name'];?></option>
						<?php } ?>
						</select>
					</div>
					<div class="col-3">
						<input type="submit" value="เพิ่มผู้ใช้" class="btn btn-primary">
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
								ชื่อผู้ใช้
							</th>
							<th width="130px;">
								จัดการ
							</th>
						</thead>
						<tbody>
							<?php $i=1;foreach($listAdmin['detail'] as $val){ ?>
							<tr>
								<td>
									<?php echo $i++; ?>
								</td>
								<td>
									<?php echo $val['admin_user']; ?>
								</td>
								<td>
									<a href="index.php?route=admin/detail&id=<?php echo $val['id_admin']; ?>" class="btn btn-warning">แก้ไข</a>
									<a href="index.php?route=admin/del&id=<?php echo $val['id_admin']; ?>" class="btn btn-danger">ลบ</a>
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