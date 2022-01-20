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
							<a href="<?php echo route('reportQuestion'); ?>" class="btn btn-dark">ย้อนกลับ</a>
						</div>
						<div class="col-md-12">
							<table class="table table-bordered table-striped">
								<tbody>
									<?php 
										foreach ($question as $key => $value) { 
									?>
									<tr>
										<td>คำถาม : <?php echo $value['title']; ?></td>
										<td class="text-success">คำตอบ : <?php echo $value['answer']; ?></td>
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