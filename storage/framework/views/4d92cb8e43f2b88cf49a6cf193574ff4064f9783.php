 
 <?php $__env->startSection('content'); ?>
 <?php $__env->startSection('title', 'Welcome to Admin panel'); ?>
 <div class="content-wrapper">
 	<!-- Content Header (Page header) -->
 	<section class="content-header">
 		<div class="container-fluid">
 			<div class="row mb-2">
 				<div class="col-sm-6">
 					<h1>News</h1>
 				</div>
 				<div class="col-sm-6">
 					<ol class="breadcrumb float-sm-right">
 						<li class="breadcrumb-item">
 							<button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-add"><i class="fas fa-plus"></i>
 								Add News
 							</button>
 						</li>
 					</ol>
 				</div>
 			</div>
 		</div><!-- /.container-fluid -->
 	</section>
 	<!-- Add modal -->
 	<section class="content">
 		<div class="modal fade" id="modal-add">
 			<div class="modal-dialog modal-lg">
 				<form action="<?php echo e(route('news.save')); ?>" method="POST" enctype="multipart/form-data">
 					<?php echo csrf_field(); ?>
 					<div class="modal-content">
 						<div class="modal-header">
 							<h4 class="modal-title">Add News</h4>
 							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
 								<span aria-hidden="true">&times;</span>
 							</button>
 						</div>
 						<div class="modal-body">
 							<div class="form-group">
 								<label for="exampleInputEmail1">News title</label>
 								<input type="text" class="form-control" placeholder="title" name="title" required>
 							</div>
 							<div class="form-group">
 								<label for="exampleInputFile">Image</label>
 								<div class="input-group">
 									<div class="custom-file">
 										<input type="file" class="custom-file-input" name="image" required>
 										<label class="custom-file-label" for="exampleInputFile">Choose file</label>
 									</div>
 									<div class="input-group-append">
 										<span class="input-group-text" id="">Upload</span>
 									</div>
 								</div>
 							</div>
 								 	<div class="form-group">
 									<label for="exampleInputEmail1">Tag</label>
 									<input type="text" class="form-control" placeholder="title" name="tag" required>
 								</div>
 							<div class="mb-3">
 								<label for="exampleInputEmail1">News Description</label>
 								<textarea class="textarea" placeholder="Place some text here" name="description" required 
 								style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
 							</div>
 						</div>
 						<div class="modal-footer justify-content-between">
 							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
 							<button type="submit" class="btn btn-primary">Save</button>
 						</div>
 					</form>
 				</div>
 				<!-- /.modal-content -->
 			</div>
 			<!-- /.modal-dialog -->
 		</div>
 		<!-- /.modal -->


 		<!-- Edit modal -->
 		<?php $__currentLoopData = $News; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 		<div class="content">
 			<div class="modal fade" id="Modaledit-<?php echo e($news['id']); ?>">
 				<div class="modal-dialog modal-lg">
 					<form action="<?php echo e(route('news.update',$news->id)); ?>" method="POST" enctype="multipart/form-data">
 						<?php echo csrf_field(); ?>
 						<div class="modal-content">
 							<div class="modal-header">
 								<h4 class="modal-title">Update News</h4>
 								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
 									<span aria-hidden="true">&times;</span>
 								</button>
 							</div>
 							<div class="modal-body">
 								<div class="form-group">
 									<label for="exampleInputEmail1">News title</label>
 									<input type="text" class="form-control" placeholder="title" name="title" value="<?php echo e($news->title); ?>" required>
 								</div>
 								<div class="form-group">
 									<label for="exampleInputFile">Image</label>
 									<div class="input-group">
 										<div class="custom-file">
 											<input type="hidden" class="custom-file-input" name="old_image" value="<?php echo e($news->image); ?>">
 											<input type="file" class="custom-file-input" name="image">
 											<label class="custom-file-label" for="exampleInputFile">Choose file</label>
 										</div>
 										<div class="input-group-append">
 											<span class="input-group-text" id="">Upload</span>
 										</div>
 									</div>
 								</div>
 								 	<div class="form-group">
 									<label for="exampleInputEmail1">Tag</label>
 									<input type="text" class="form-control" placeholder="title" name="tag" value="<?php echo e($news->tag); ?>" required>
 								</div>
 								<div class="mb-3">
 									<label for="exampleInputEmail1">News Description</label>
 									<textarea class="textarea" placeholder="Place some text here" name="description" required value="<?php echo e($news->description); ?>"
 										style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo e($news->description); ?></textarea>
 									</div>
 								</div>
 								<div class="modal-footer justify-content-between">
 									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
 									<button type="submit" class="btn btn-primary">Update</button>
 								</div>
 							</form>
 						</div>
 						<!-- /.modal-content -->
 					</div>
 					<!-- /.modal-dialog -->
 				</div>
 				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 				<!-- /.modal -->
 				<!-- Table news -->
 				<div class="card">
 					<div class="card-header">
 						<h3 class="card-title">Manage News</h3>
 							</div>
 							<div class="card-body p-0" style="display: block;">
 								<table class="table table-striped projects">
 									<thead>
 										<tr>
 											<th style="width: 1%">
 												No
 											</th>
 											<th style="width: 50%">
 												Title
 											</th>
 											<th style="width: 9%">
 												Image
 											</th>
 											<th style="width: 10%">
 												Tag
 											</th>
 											<th style="width: 10%">
 											Created 
 											</th>
 											<th style="width: 20%">
 												Action
 											</th>
 										</tr>
 									</thead>
 									<tbody>
 										<?php $__currentLoopData = $News; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 										<tr>
 											<td>
 												<?php echo e($news->id); ?>

 											</td>
 											<td>
 												<a>
 													<?php echo e($news->title); ?>

 												</a>
 												<br>
 												<small>Created
 													<?php echo e($news->created_at); ?>

 												</small>
 											</td>
 											<td>
 												<ul class="list-inline">
 													<li class="list-inline-item">
 													</ul>
 													<img alt="Avatar" src="../../images/news/<?php echo e($news->image); ?>" style="width: 80px;height: 50px;">
 												</li>
 											</ul>
 										</td>
 										<td class="project-state">
 											<span class="badge badge-success"><?php echo e($news->tag); ?></span>
 										</td>
 										 										<td>
 											<span><?php echo e($news->created_at); ?></span>
 										</td>
 										<td class="project-actions text-right">
 											<button class="btn btn-info btn-sm" data-toggle="modal" data-target="#Modaledit-<?php echo e($news['id']); ?>">
 												<i class="fas fa-pencil-alt">
 												</i>
 												Edit
 											</button>
 											<button class="btn btn-danger btn-sm" onclick="confirmdelete('<?php echo e($news['id']); ?>')">
 												<i class="fas fa-trash">
 												</i>
 												Delete
 											</button>
 										</td>
 									</tr>
 									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 								</tbody>
 							</table>
 						</div>
 						<!-- /.card-body -->
 					</div>
 					 							<ul class="pagination pagination-primary mt-4 text-center">
							<?php echo e($News->links()); ?>

						</ul>
 					<!-- /.card -->
 				</section>
 				<!-- /.content -->
 			</div>
 		</div>
 		<?php $__env->stopSection(); ?>

 		<script type="text/javascript">
 			function confirmdelete(id){
 				var del = confirm('Are you sure to delete this !');
 				if(del){
 					var deletes = "<?php echo e(route('news.delete')); ?>/" + id;
 					window.location.href = deletes;
            // console.log(id);
        }else {
            // return false;   
            console.log('no');
        }

    }
</script>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp new\htdocs\hallogisticscli\laravel\resources\views/Default/News.blade.php ENDPATH**/ ?>