<div class="container-fluid mt-3">
	<div class="row">
		<div class="col-md-12">
			<div class="card border-0">
				<div class="card-body">
					<div class="row">
						<div class="col-md-12">
							<h3 class="text-theme"><?php echo $title; ?></h3>
							<hr>
						</div>
					</div>
					<?php if(isset($_GET['update'])){ ?>
					<div class="alert alert-success alert-dismissible fade show" role="alert">
					  <strong>success</strong> แก้ไขข้อมูลเรียบร้อย
					  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
					<?php } ?>
					<form action="<?php echo route('news/edit&id='.$result['id']); ?>" method="POST">
					<div class="row">
						<div class="col-md-12 mb-3">
							<label for="">หัวข้อ</label>
							<input type="text" class="form-control" name="title" value="<?php echo $result['title']; ?>">
						</div>
						<div class="col-md-12 mb-3">
							<label for="">ข้อความ</label>
							<textarea name="text" id="summernote" cols="30" rows="10"><?php echo $result['text']; ?></textarea>
						</div>
						<div class="col-md-12">
							<button class="btn btn-primary" type="submit">บันทึก</button>
							<a href="<?php echo route('news'); ?>" class="btn btn-danger">ยกเลิก</a>
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	$(document).ready(function() {
		$('#page-news').addClass('active');
	});

	$('#summernote').summernote({
    	placeholder: 'Hello stand alone ui',
	    tabsize: 2,
	    height: 300,
	});
</script>