<?php $__env->startSection('content'); ?>

<div class="card">
	<div class="d-sm-flex align-items-center justify-content-between">
	<h5 class=" mb-0 text-gray-800 pl-3"><?php echo e(__('Add New Category')); ?> <a class="btn btn-primary btn-rounded btn-sm" href="<?php echo e(route('admin.categories.index')); ?>"><i class="fas fa-arrow-left"></i> <?php echo e(__('Back')); ?></a></h5>
	<ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a></li>
        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.categories.create')); ?>"><?php echo e(__('Add New Category')); ?></a></li>
	</ol>
	</div>
</div>

<div class="row justify-content-center mt-3">
  <div class="col-md-10">
    <!-- Form Basic -->
    <div class="card mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary"><?php echo e(__('Add New Category Form')); ?></h6>
      </div>

      <div class="card-body">
        <div class="gocover" style="background: url(<?php echo e(asset('assets/images/'.$gs->admin_loader)); ?>) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
        <form class="geniusform" action="<?php echo e(route('admin.categories.store')); ?>" method="POST" enctype="multipart/form-data">

            <?php echo $__env->make('includes.admin.form-both', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php echo e(csrf_field()); ?>


            <div class="form-group">
                <label for="inp-name"><?php echo e(__('Name')); ?></label>
                <input type="text" class="form-control" id="inp-name" name="title"  placeholder="<?php echo e(__('Enter Name')); ?>" value="" required>
            </div>

            <div class="form-group">
                <label for="inp-slug"><?php echo e(__('Slug')); ?></label>
                <input type="text" class="form-control" id="inp-slug" name="slug"  placeholder="<?php echo e(__('Enter Slug')); ?>" value="" required>
            </div>

            <div class="form-group">
                <label for="count"><?php echo e(__('Icon')); ?></label>
                <div class="input-group">
                    <span class="input-group-prepend">
                        <button class="btn btn-secondary" name="icon" data-icon="fas fa-moon" role="iconpicker"></button>
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label><?php echo e(__('Category thumbnail')); ?> </label>
                <div class="wrapper-image-preview">
                    <div class="box">
                        <div class="back-preview-image" style="background-image: url(<?php echo e(asset('assets/images/placeholder.jpg')); ?>);"></div>
                        <div class="upload-options">
                            <label class="img-upload-label" for="img-upload"> <i class="fas fa-camera"></i> <?php echo e(__('Upload Picture')); ?> </label>
                            <input id="img-upload" type="file" class="image-upload" name="photo" accept="image/*">
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="cp-container cp-contain" id="cp3-container">
                    <div class="input-group" title="Using input value">
                        <input type="color" name="bg_color" class="form-control" value="" id="exampleInputPassword1">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="form-check">
                    <input type="checkbox" name="is_top" class="form-check-input" value="1" id="is_top">
                    <label class="form-check-label" for="is_top"><?php echo e(__('Check if this category is featured')); ?></label>
                </div>
            </div>

            <button type="submit" id="submit-btn" class="btn btn-primary w-100"><?php echo e(__('Submit')); ?></button>

        </form>
      </div>
    </div>
  </div>

</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\htdocs\geniuslisting\project\resources\views/admin/categories/create.blade.php ENDPATH**/ ?>