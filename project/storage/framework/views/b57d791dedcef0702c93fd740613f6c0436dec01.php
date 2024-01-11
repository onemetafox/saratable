<?php $__env->startSection('content'); ?>
<div class="card">
	<div class="d-sm-flex align-items-center justify-content-between">
        <h5 class=" mb-0 text-gray-800 pl-3"><?php echo e(__('Edit Amenity')); ?> <a class="btn btn-primary btn-rounded btn-sm" href="<?php echo e(route('admin.amenities.index')); ?>"><i class="fas fa-arrow-left"></i> <?php echo e(__('Back')); ?></a></h5>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a></li>
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.amenities.edit',$data->id)); ?>"><?php echo e(__('Edit Amenity')); ?></a></li>
        </ol>
	</div>
</div>

<div class="row justify-content-center mt-3">
  <div class="col-md-10">
    <div class="card mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary"><?php echo e(__('Edit Amenity Form')); ?></h6>
      </div>

      <div class="card-body">
        <div class="gocover" style="background: url(<?php echo e(asset('assets/images/'.$gs->admin_loader)); ?>) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
        <form class="geniusform" action="<?php echo e(route('admin.amenities.update',$data->id)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo $__env->make('includes.admin.form-both', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php echo e(csrf_field()); ?>


            <div class="form-group">
                <label for="inp-name"><?php echo e(__('Name')); ?></label>
                <input type="text" class="form-control" id="inp-name" name="name"  placeholder="<?php echo e(__('Enter Name')); ?>" value="<?php echo e($data->name); ?>" required>
            </div>

            <div class="row">
                <div class="col-md-10">
                  <label for="count"><?php echo e(__('Icon')); ?></label>
                  <div class="form-group ">
                    <div class="input-group">
                        <span class="input-group-prepend">
                            <button class="btn btn-secondary" name="icon" data-icon="<?php echo e($data->icon); ?>" role="iconpicker"></button>
                        </span>
                    </div>
                  </div>
                </div>
            </div>

            <button type="submit" id="submit-btn" class="btn btn-primary w-100"><?php echo e(__('Submit')); ?></button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\htdocs\geniuslisting\project\resources\views/admin/amenities/edit.blade.php ENDPATH**/ ?>