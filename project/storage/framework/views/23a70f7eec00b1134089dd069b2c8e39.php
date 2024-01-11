

<?php $__env->startSection('content'); ?>
  <div class="card">
    <div class="d-sm-flex align-items-center justify-content-between py-3">
    <h5 class=" mb-0 text-gray-800 pl-3"><?php echo e(__('Google Analytics')); ?></h5>
    <ol class="breadcrumb py-0 m-0">
        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a></li>
        <li class="breadcrumb-item"><a href="javascript:;"><?php echo e(__('SEO Tools')); ?></a></li>
        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.seotool.analytics')); ?>"><?php echo e(__('Google Analytics')); ?></a></li>
    </ol>
    </div>
  </div>

      <div class="card mb-4 mt-3">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        </div>

        <div class="card-body">
          <div class="gocover" style="background: url(<?php echo e(asset('assets/images/'.$gs->admin_loader)); ?>) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
          <form class="geniusform" action="<?php echo e(route('admin.seotool.analytics.update')); ?>" method="POST" enctype="multipart/form-data">

              <?php echo $__env->make('includes.admin.form-both', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

              <?php echo e(csrf_field()); ?>


              <div class="form-group">
                  <label for="inp-name"><?php echo e(__('Google Analytics ID')); ?> *</label>
                  <textarea name="google_analytics" class="form-control"><?php echo e($tool->google_analytics); ?></textarea>
              </div>

              <button type="submit" id="submit-btn" class="btn btn-primary w-100"><?php echo e(__('Submit')); ?></button>

          </form>
        </div>
      </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\latest\listing\project\resources\views/admin/seotool/googleanalytics.blade.php ENDPATH**/ ?>