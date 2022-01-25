<div class="container-fluid mt-3">
	<div class="row">
		<div class="col-md-12">
			<div class="card border-0">
				<div class="card-header bg-white">
					<h3 class="text-theme"><?php echo $title; ?></h3>
				</div>
				<form action="<?php echo route('question/editQuestion&id='.$_GET['id'].'&cat_id='.$_GET['cat_id']); ?>" method="POST">
				<div class="card-body">
					<div class="row mb-3">
						<div class="col-md-12">
							<h3>คำถาม</h3>
							<input type="text" name="question_id" value="<?php echo $datalist['id']; ?>" class="d-none">
							<textarea name="question_title" id="" cols="30" rows="5" class="form-control"><?php echo $datalist['title']; ?></textarea>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-12">
							<table class="table table-bordered">
								<thead class="table-dark">
									<tr>
										<th class="align-middle">คำตอบ</th>
										<th class="align-middle" width="40%">เงื่อนไข</th>
										<th width="10%" class="text-center"><!-- <button class="btn btn-success btn-add"><i class="fas fa-plus-circle"></i></button> --></th>
									</tr>
								</thead>
								<tbody id="form">
									<?php foreach ($dataanswer as $key => $value) { ?>
									<input type="text" name="ans_id[]" value="<?php echo $value['id']; ?>" class="d-none">
									<tr>
										<td><input type="text" class="form-control" value="<?php echo $value['title']; ?>" name="ans_title[]"></td>
										<td>
											<select name="next_id_question[]" id="" class="form-control">
												<option value="">ไม่มีเงื่อนไข</option>
												<?php foreach($lists as $key_lists => $val){ ?>
												<option value="<?php echo $val['id']; ?>" <?php if($value['next_id_question']==$val['id']){echo "selected"; } ?>><?php echo $val['title']; ?></option>
												<?php } ?>
											</select>
										</td>
										<td class="text-center"><!-- <button class="btn btn-danger btn-del"><i class="fas fa-trash-alt"></i> --></button></td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<button class="btn btn-primary" type="submit">บันทึก</button>
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
		$('#page-question').addClass('active');
	});

	$('.btn-add').click(function(e){
		e.preventDefault();
		var html = '<tr>'+
		'<td><input type="text" class="form-control" value="" name="ans_title[]"></td>'+
		'<td><select name="next_id_question[]" id="" class="form-control">'+
		'<option value="">ไม่มีเงื่อนไข</option>'+
		<?php foreach($lists as $key_lists => $val){ ?>
		'<option value="<?php echo $val['id']; ?>"><?php echo $val['title']; ?></option>'+
		<?php } ?>
		'</select></td>'+
		'<td class="text-center"><button class="btn btn-danger btn-del"><i class="fas fa-trash-alt"></i></button></td>'+
		'</tr>';
		$('#form').append(html);
	});	
	$('#form').on('click','.btn-del',function(e){
		if(confirm('ยืนยันการลบ')==true){
			e.preventDefault();
			$(this).parent().parent().remove();
		}
		e.preventDefault();
	});
</script>