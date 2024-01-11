
<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="d-sm-flex align-items-center justify-content-between py-3">
    <h5 class=" mb-0 text-gray-800 pl-3"><?php echo e(__('Website Favicon')); ?></h5>
    <ol class="breadcrumb m-0 py-0">
        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a></li>
        <li class="breadcrumb-item"><a href="javascript:;"><?php echo e(__('General Settings')); ?></a></li>
        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.gs.fav')); ?>"><?php echo e(__('Website Favicon')); ?></a></li>
    </ol>
    </div>
</div>

<div class="row justify-content-center mt-3">

    <div class="col-lg-4">

      <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary"><?php echo e(__('Website Favicon')); ?></h6>
        </div>

        <div class="card-body">
          <div class="row justify-content-center">

          <div class="gocover" style="background: url(<?php echo e(asset('assets/images/'.$gs->admin_loader)); ?>) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>

          <form class="geniusform" action="<?php echo e(route('admin.gs.update')); ?>" method="POST" enctype="multipart/form-data">

              <?php echo $__env->make('includes.admin.form-both', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

              <?php echo e(csrf_field()); ?>


              <div class="form-group">
                  <div class="wrapper-image-preview-settings">
                      <div class="box-settings">
                          <div class="back-preview-image" style="background-image: url(<?php echo e($gs->favicon ? asset('assets/images/'.$gs->favicon):asset('assets/images/placeholder.jpg')); ?>);"></div>
                          <div class="upload-options-settings">
                              <label class="img-upload-label" for="img-upload-1">
                                   <i class="fas fa-camera"></i> <?php echo e(__('Upload Picture')); ?>

                                   <br>
                              </label>
                              <input id="img-upload-1" type="file" class="image-upload" name="favicon" accept="image/*">
                          </div>
                      </div>
                  </div>
              </div>

              <button type="submit" id="submit-btn" class="btn btn-primary btn-block"><?php echo e(__('Submit')); ?></button>

          </form>
        </div>
        </div>
      </div>

    </div>

</div>
<!--Row-->



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\latest\listing\project\resources\views/admin/generalsetting/favicon.blade.php ENDPATH**/ ?>