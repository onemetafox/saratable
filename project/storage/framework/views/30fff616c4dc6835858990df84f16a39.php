<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="d-sm-flex align-items-center justify-content-between py-3">
    <h5 class=" mb-0 text-gray-800 pl-3"><?php echo e(__('Website Footer')); ?></h5>
    <ol class="breadcrumb m-0 py-0">
        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a></li>
        <li class="breadcrumb-item"><a href="javascript:;"><?php echo e(__('General Settings')); ?></a></li>
        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.gs.footer')); ?>"><?php echo e(__('Website Footer')); ?></a></li>
    </ol>
    </div>
</div>

  <div class="card mb-4 mt-3">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary"><?php echo e(__('Website Footer')); ?></h6>
    </div>

    <div class="card-body">
      <div class="gocover" style="background: url(<?php echo e(asset('assets/images/'.$gs->admin_loader)); ?>) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
      <form class="geniusform" action="<?php echo e(route('admin.gs.update')); ?>" method="POST" enctype="multipart/form-data">

          <?php echo $__env->make('includes.admin.form-both', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

          <?php echo e(csrf_field()); ?>


          <div class="form-group">
            <label for="copyright"><?php echo e(__('Copyright')); ?></label>
              <textarea class="form-control summernote"  id="copyright"   name="copyright" rows="3" placeholder="<?php echo e(__('Copyright')); ?>"><?php echo e($gs->copyright); ?></textarea>
          </div>

          <button type="submit" id="submit-btn" class="btn btn-primary w-100"><?php echo e(__('Submit')); ?></button>
        </div>

      </form>
    </div>
  </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\latest\listing\project\resources\views/admin/generalsetting/footer.blade.php ENDPATH**/ ?>