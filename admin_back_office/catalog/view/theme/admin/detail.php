<div class="container-fluid mt-3">
	<form action="<?php echo route('admin/save'); ?>" method="POST">
		<input type="hidden" name="id" value="<?php echo $id;?>">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-md-3 mb-3">
						ชื่อผู้ใช้
					</div>
					<div class="col-md-9 mb-3">
						<input type="text" class="form-control" 
						name="admin_user" value="<?php echo $detail['admin_user']; ?>">
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 mb-3">
						รหัสผ่าน <small>(หากไม่ต้องการเปลี่ยนให้เว้นว่างไว้)</small>
					</div>
					<div class="col-md-9 mb-3">
						<input type="password" class="form-control" name="admin_password" value="">
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 mb-3">
						กลุ่มผู้ใช้
					</div>
					<div class="col-md-9 mb-3">
						<select name="id_group" class="form-control" id="">
						<?php foreach($listGroup['detail'] as $val){ ?>
						<option value="<?php echo $val['id'];?>"><?php echo $val['name'];?></option>
						<?php } ?>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<input type="submit" value="บันทึก" class="btn btn-primary">
					</div>
				</div>
			</div>
		</div>
	</form>
</div>