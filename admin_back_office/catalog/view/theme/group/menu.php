<div class="container-fluid mt-3">
	<form action="<?php echo route('group/saveMenu'); ?>" method="POST">
		<input type="hidden" name="id" value="<?php echo $id;?>">
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
									ชื่อเมนู
								</th>
							</thead>
							<tbody>
								<?php $i=1;foreach($listMenu['detail'] as $val){ ?>
								<tr>
									<td>
										<input type="checkbox" name="chk[]" 
										value="<?php echo $val['id'];?>"
										<?php echo (!empty($val['id_menu'])?'checked':''); ?>>
									</td>
									<td>
										<?php echo $val['name']; ?>
									</td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<input type="submit" value="บันทึกเมนู" class="btn btn-primary">
					</div>
				</div>
			</div>
		</div>
	</form>
</div>