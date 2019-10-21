 
 <?php $__env->startSection('content'); ?>
 <?php $__env->startSection('title', 'Welcome to Admin panel'); ?>
 <div class="content-wrapper">
 	<!-- Content Header (Page header) -->
 	<section class="content-header">
 		<div class="container-fluid">
 			<div class="row mb-2">
 				<div class="col-sm-6">
 					<h1>Package</h1>
 				</div>
 				<div class="col-sm-6">
 					<ol class="breadcrumb float-sm-right">
 						<li class="breadcrumb-item">
 							<button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-add"><i class="fas fa-plus"></i>
 								Add Package
 							</button>
 						</li>
 					</ol>
 				</div>
 			</div>
 		</div>
 	</section>
 	<!-- Add modal -->
 	<section class="content">
 		<div class="modal fade" id="modal-add">
 			<div class="modal-dialog modal-lg">
 				<form action="<?php echo e(route('package_overpart.save')); ?>" method="POST" enctype="multipart/form-data">
 					<?php echo csrf_field(); ?>
 					<div class="modal-content">
 						<div class="modal-header">
 							<h4 class="modal-title">Add package</h4>
 							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
 								<span aria-hidden="true">&times;</span>
 							</button>
 						</div>
 						<div class="modal-body">
 							<div class="form-group">
 								<label for="exampleInputEmail1">Package name</label>
 								<input type="text" class="form-control" placeholder="Package name" name="name" required>
 							</div>
 							<div class="form-group">
 								<label>Price</label>
 								<input type="text" class="form-control" placeholder="Price" name="price" required>
 							</div>
 							<div class="form-group">
 								<label>Box Price</label>
 								<input type="text" class="form-control" placeholder="Price" name="box_price" required>
 							</div>
 							<div class="mb-3">
 							<div class="form-group">
 								<label for="exampleFormControlTextarea2">Description</label>
 								<textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="4" name="description"></textarea>
 							</div>
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
 		<?php $__currentLoopData = $Packages_over; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package_over): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 		<div class="content">
 			<div class="modal fade" id="Modaledit-<?php echo e($package_over['id']); ?>">
 				<div class="modal-dialog modal-lg">
 					<form action="<?php echo e(route('package_overpart.update',$package_over->id)); ?>" method="POST" enctype="multipart/form-data">
 						<?php echo csrf_field(); ?>
 						<div class="modal-content">
 							<div class="modal-header">
 								<h4 class="modal-title">Update Package</h4>
 								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
 									<span aria-hidden="true">&times;</span>
 								</button>
 							</div>
 							<div class="modal-body">
 								<div class="form-group">
 									<label for="exampleInputEmail1">Package name</label>
 									<input type="text" class="form-control" placeholder="Package name" name="name" value="<?php echo e($package_over->name); ?>" required>
 								</div>
 								<div class="form-group">
 									<label for="exampleInputEmail1">Price</label>
 									<input type="text" class="form-control" placeholder="Price" name="price" value="<?php echo e($package_over->price); ?>" required>
 								</div>
 								<div class="form-group">
 									<label for="exampleInputEmail1">Box Price</label>
 									<input type="text" class="form-control" placeholder="Price" name="box_price" value="<?php echo e($package_over->box_price); ?>" required>
 								</div>
 								<div class="mb-3">
 									<div class="form-group">
 										<label for="exampleFormControlTextarea2">Description</label>
 										<textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="4" name="description"><?php echo e($package_over->description); ?></textarea>

 									</div>

 								</div>
 							</div>
 							<div class="modal-footer justify-content-between">
 								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
 								<button type="submit" class="btn btn-primary">Update</button>
 							</div>
 						</form>
 					</div>
 				</div>
 			</div>
 			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 			<!-- /.modal -->
 			<!-- Table package_over -->
 			<div class="card">
 				<div class="card-header">
 					<h3 class="card-title">Manage Package</h3>
 				</div>
 				<div class="card-body p-0" style="display: block;">
 					<table class="table table-striped projects">
 						<thead>
 							<tr>
 								<th style="width: 1%">
 									No
 								</th>
 								<th style="width: 20%">
 									Package name
 								</th>
 								<th style="width: 30%">
 									Description
 								</th>
 								<th style="width: 9%">
 									Price/Kip
 								</th>
 								<th style="width: 10%">
 									Box price
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
 							<?php $__currentLoopData = $Packages_over; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package_over): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 							<tr>
 								<td>
 									<?php echo e($package_over->id); ?>

 								</td>
 								<td>
 									<a>
 										<?php echo e($package_over->name); ?>

 									</a>
 									<br>
 									<small>Created
 										<?php echo e($package_over->created_at); ?>

 									</small>
 								</td>
 								<td>
 									<p><?php echo e($package_over->description); ?></p>
 								</td>
 								<td>
 									<?php echo e($package_over->price); ?>

 								</td>
 								<td class="project-state">
 									<span class="badge badge-success"><?php echo e($package_over->box_price); ?></span>
 								</td>
 								<td>
 									<span><?php echo e($package_over->created_at); ?></span>
 								</td>
 								<td class="project-actions text-right">
 									<button class="btn btn-info btn-sm" data-toggle="modal" data-target="#Modaledit-<?php echo e($package_over['id']); ?>">
 										<i class="fas fa-pencil-alt">
 										</i>
 										Edit
 									</button>
 									<button class="btn btn-danger btn-sm" onclick="confirmdelete('<?php echo e($package_over['id']); ?>')">
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
 				<?php echo e($Packages_over->links()); ?>

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
 			var deletes = "<?php echo e(route('package_overpart.delete')); ?>/" + id;
 			window.location.href = deletes;
 		}else {
 		}

 	}
 </script>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp new\htdocs\hallogisticscli\laravel\resources\views/Default/package_over.blade.php ENDPATH**/ ?>