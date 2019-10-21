 
 <?php $__env->startSection('content'); ?>
 <?php $__env->startSection('title', 'Welcome to Admin panel'); ?>
<div class="content-wrapper" style="min-height: 313px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo e($Newstotal); ?></h3>
                <p>ຂ່າວສານ</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="<?php echo e(route('admin.news')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo e($Branchtotal); ?></h3>
                <p>ເຂດບໍລິການ</p>
              </div>
              <div class="icon">
                <i class="far fa-building"></i>
              </div>
              <a href="<?php echo e(route('admin.branch')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo e($Packagetotal); ?></h3>
                <p>ລາຄາຕ່່າງແຂວງ</p>
              </div>
              <div class="icon">
              <i class="fas fa-money-check-alt"></i>
              </div>
              <a href="<?php echo e(route('admin.package')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo e($PackageOverpart); ?></h3>
                <p>ລາຄາຂ້າມພາກ</p>
              </div>
              <div class="icon">
            <i class="fas fa-money-check-alt"></i>
              </div>
              <a href="<?php echo e(route('admin.package_overpart')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp new\htdocs\hallogistics\laravel\resources\views/index.blade.php ENDPATH**/ ?>