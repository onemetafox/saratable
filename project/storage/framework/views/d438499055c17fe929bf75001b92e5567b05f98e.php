<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="d-sm-flex align-items-center justify-content-between py-3">
    <h5 class=" mb-0 text-gray-800 pl-3"><?php echo e(__('Edit Homepage Customization')); ?> </h5>
    <ol class="breadcrumb py-0 m-0">
        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a></li>
        <li class="breadcrumb-item"><a href="javascript:;"><?php echo e(__('Manage Homepage Customization')); ?></a></li>
    </ol>
    </div>
</div>

    <div class="card mb-4 mt-3">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary"><?php echo e(__('Edit Homepage Customization')); ?></h6>
      </div>

      <div class="card-body">
        <div class="gocover" style="background: url(<?php echo e(asset('assets/images/'.$gs->admin_loader)); ?>) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
        <form class="geniusform" action="<?php echo e(route('admin.ps.customization.update')); ?>" method="POST" enctype="multipart/form-data">

            <?php echo $__env->make('includes.admin.form-both', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php echo e(csrf_field()); ?>


          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <div class="custom-control custom-switch">
                  <input type="checkbox" name="home_module[]" value="Banner" <?php echo e($data->homeModuleCheck('Banner') ? 'checked' : ''); ?> class="custom-control-input" id="Banner">
                  <label class="custom-control-label" for="Banner"><?php echo e(__('Banner')); ?></label>
                  </div>
              </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  <div class="custom-control custom-switch">
                        <input type="checkbox" name="home_module[]" value="Mission" <?php echo e($data->homeModuleCheck('Mission') ? 'checked' : ''); ?> class="custom-control-input" id="Mission">
                        <label class="custom-control-label" for="Mission"><?php echo e(__('Mission')); ?></label>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" name="home_module[]" value="Process" <?php echo e($data->homeModuleCheck('Process') ? 'checked' : ''); ?> class="custom-control-input" id="Process">
                        <label class="custom-control-label" for="Process"><?php echo e(__('Process')); ?></label>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" name="home_module[]" value="Location" <?php echo e($data->homeModuleCheck('Location') ? 'checked' : ''); ?> class="custom-control-input" id="Location">
                        <label class="custom-control-label" for="Location"><?php echo e(__('Location')); ?></label>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" name="home_module[]" value="Submit listing" <?php echo e($data->homeModuleCheck('Submit listing') ? 'checked' : ''); ?> class="custom-control-input" id="Submitlisting">
                        <label class="custom-control-label" for="Submitlisting"><?php echo e(__('Submit listing')); ?></label>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" name="home_module[]" value="Review" <?php echo e($data->homeModuleCheck('Review') ? 'checked' : ''); ?> class="custom-control-input" id="Review">
                        <label class="custom-control-label" for="Review"><?php echo e(__('Review')); ?></label>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" name="home_module[]" value="Author" <?php echo e($data->homeModuleCheck('Author') ? 'checked' : ''); ?> class="custom-control-input" id="Author">
                        <label class="custom-control-label" for="Author"><?php echo e(__('Author')); ?></label>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" name="home_module[]" value="Space" <?php echo e($data->homeModuleCheck('Space') ? 'checked' : ''); ?> class="custom-control-input" id="Space">
                        <label class="custom-control-label" for="Space"><?php echo e(__('Space')); ?></label>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" name="home_module[]" value="Faq" <?php echo e($data->homeModuleCheck('Faq') ? 'checked' : ''); ?> class="custom-control-input" id="Faq">
                        <label class="custom-control-label" for="Faq"><?php echo e(__('Faq')); ?></label>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" name="home_module[]" value="Category" <?php echo e($data->homeModuleCheck('Category') ? 'checked' : ''); ?> class="custom-control-input" id="Category">
                        <label class="custom-control-label" for="Category"><?php echo e(__('Category')); ?></label>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" name="home_module[]" value="Feature Directory" <?php echo e($data->homeModuleCheck('Feature Directory') ? 'checked' : ''); ?> class="custom-control-input" id="Feature Directory">
                        <label class="custom-control-label" for="Feature Directory"><?php echo e(__('Feature Directory')); ?></label>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" name="home_module[]" value="Blogs" <?php echo e($data->homeModuleCheck('Blogs') ? 'checked' : ''); ?> class="custom-control-input" id="Blogs">
                        <label class="custom-control-label" for="Blogs"><?php echo e(__('Blogs')); ?></label>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" name="home_module[]" value="Packages" <?php echo e($data->homeModuleCheck('Packages') ? 'checked' : ''); ?> class="custom-control-input" id="Packages">
                        <label class="custom-control-label" for="Packages"><?php echo e(__('Packages')); ?></label>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" name="home_module[]" value="Partners" <?php echo e($data->homeModuleCheck('Partners') ? 'checked' : ''); ?> class="custom-control-input" id="Partners">
                        <label class="custom-control-label" for="Partners"><?php echo e(__('Partners')); ?></label>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" name="home_module[]" value="Apps" <?php echo e($data->homeModuleCheck('Apps') ? 'checked' : ''); ?> class="custom-control-input" id="Apps">
                        <label class="custom-control-label" for="Apps"><?php echo e(__('Apps')); ?></label>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" name="home_module[]" value="CTAs" <?php echo e($data->homeModuleCheck('CTAs') ? 'checked' : ''); ?> class="custom-control-input" id="CTAs">
                        <label class="custom-control-label" for="CTAs"><?php echo e(__('CTAs')); ?></label>
                    </div>
                </div>
            </div>

          </div>


            <button type="submit" id="submit-btn" class="btn btn-primary w-100"><?php echo e(__('Submit')); ?></button>

        </form>
      </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\htdocs\geniuslisting\project\resources\views/admin/pagesetting/customization.blade.php ENDPATH**/ ?>