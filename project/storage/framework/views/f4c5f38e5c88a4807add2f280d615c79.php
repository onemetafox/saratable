

<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="d-sm-flex align-items-center justify-content-between py-3">
      <h5 class=" mb-0 text-gray-800 pl-3"><?php echo e(__('Error Banner')); ?></h5>
      <ol class="breadcrumb p-0 py-0">
          <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a></li>
          <li class="breadcrumb-item"><a href="javascript:;"><?php echo e(__('General Settings')); ?></a></li>
          <li class="breadcrumb-item"><a href="<?php echo e(route('admin.gs.error.banner')); ?>"><?php echo e(__('Error Banner')); ?></a></li>
      </ol>
    </div>
</div>

  <div class="card mb-4 mt-3">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary"><?php echo e(__('Error Section')); ?></h6>
    </div>

    <div class="card-body">
      <div class="gocover" style="background: url(<?php echo e(asset('assets/images/'.$gs->admin_loader)); ?>) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
      <form class="geniusform" action="<?php echo e(route('admin.gs.update')); ?>" method="POST" enctype="multipart/form-data">

          <?php echo $__env->make('includes.admin.form-both', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

          <?php echo e(csrf_field()); ?>


          <div class="form-group">
            <label for="inp-title"><?php echo e(__('Error Title')); ?></label>
            <input type="text" class="form-control" id="inp-title" name="error_title"  placeholder="<?php echo e(__('Enter Error Title')); ?>" value="<?php echo e($gs->error_title); ?>" required>
          </div>

          <div class="form-group">
            <label for="error_text"><?php echo e(__('Error text')); ?> *</label>
            <textarea class="form-control summernote"  id="error_text" name="error_text" required rows="3" placeholder="<?php echo e(__('Enter Error Text')); ?>"><?php echo e($gs->error_text); ?></textarea>
          </div>

          <div class="form-group">
              <label><?php echo e(__('Set Background Image')); ?></label>
              <div class="wrapper-image-preview">
                  <div class="box full-width">
                      <div class="back-preview-image" style="background-image: url(<?php echo e($gs->error_photo ? asset('assets/images/'.$gs->error_photo) : asset('assets/images/placeholder.jpg')); ?>);"></div>
                      <div class="upload-options">
                          <label class="img-upload-label full-width" for="img-upload"> <i class="fas fa-camera"></i> <?php echo e(__('Upload Picture')); ?> </label>
                          <input id="img-upload" type="file" class="image-upload" name="error_photo" accept="image/*">
                      </div>
                  </div>
              </div>
          </div>

          <button type="submit" id="submit-btn" class="btn btn-primary w-100"><?php echo e(__('Submit')); ?></button>

      </form>
    </div>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\latest\listing\project\resources\views/admin/generalsetting/error_banner.blade.php ENDPATH**/ ?>