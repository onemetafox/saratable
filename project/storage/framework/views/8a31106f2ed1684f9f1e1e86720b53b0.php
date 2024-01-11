<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="d-sm-flex align-items-center py-3 justify-content-between">
            <h5 class=" mb-0 text-gray-800 pl-3"><?php echo e(__('Download apps Section')); ?></h5>
            <ol class="breadcrumb m-0 py-0">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a></li>
                <li class="breadcrumb-item"><a href="javascript:;"><?php echo e(__('Home Page Setting')); ?></a></li>
            </ol>
        </div>
    </div>

    <div class="card mb-4 mt-3">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary"><?php echo e(__('Download apps Section')); ?></h6>
      </div>

      <div class="card-body">
        <div class="gocover" style="background: url(<?php echo e(asset('assets/images/'.$gs->admin_loader)); ?>) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
        <form class="geniusform" action="<?php echo e(route('admin.ps.update')); ?>" method="POST" enctype="multipart/form-data">

            <?php echo $__env->make('includes.admin.form-both', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php echo e(csrf_field()); ?>


            <div class="form-group">
                <label for="download_title"><?php echo e(__('Title')); ?> *</label>
                <input type="text" class="form-control" id="download_title" name="download_title" placeholder="<?php echo e(__('Title')); ?>" value="<?php echo e($ps->download_title); ?>" required>
            </div>

            <div class="form-group">
              <label for="download_subtitle"><?php echo e(__('Subtitle')); ?> *</label>
              <input type="text" class="form-control" id="download_subtitle" name="download_subtitle" placeholder="<?php echo e(__('Subtitle')); ?>" value="<?php echo e($ps->download_subtitle); ?>" required>
            </div>

            <div class="form-group">
                <label for="download_text"><?php echo e(__('Details')); ?> *</label>
                <textarea class="form-control summernote" name="download_text" id="download_text" cols="30" rows="10"><?php echo e($ps->download_text); ?></textarea>
            </div>

            <div class="form-group">
                <label for="google_play_link"><?php echo e(__('Google Play Link')); ?> *</label>
                <input type="text" class="form-control" id="google_play_link" name="google_play_link" placeholder="<?php echo e(__('Google Play Link')); ?>" value="<?php echo e($ps->google_play_link); ?>" required>
            </div>

            <div class="form-group">
                <label for="download_text"><?php echo e(__('Apple App Link')); ?> *</label>
                <input type="text" class="form-control" id="download_text" name="app_store_link" placeholder="<?php echo e(__('Subtitle')); ?>" value="<?php echo e($ps->app_store_link); ?>" required>
            </div>

            <div class="form-group">
                <label><?php echo e(__('Set Banner Image')); ?></label>
                <div class="wrapper-image-preview">
                    <div class="box">
                        <div class="back-preview-image" style="background-image: url(<?php echo e($ps->download_photo ? asset('assets/images/'.$ps->download_photo) : asset('assets/images/placeholder.jpg')); ?>);"></div>
                        <div class="upload-options">
                            <label class="img-upload-label" for="img-upload"> <i class="fas fa-camera"></i> <?php echo e(__('Upload Picture')); ?> </label>
                            <input id="img-upload" type="file" class="image-upload" name="download_photo" accept="image/*">
                        </div>
                    </div>
                </div>
            </div>

            <button type="submit" id="submit-btn" class="btn btn-primary w-100"><?php echo e(__('Submit')); ?></button>

        </form>
      </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\latest\listing\project\resources\views/admin/pagesetting/download.blade.php ENDPATH**/ ?>