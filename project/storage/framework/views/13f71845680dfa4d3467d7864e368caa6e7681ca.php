

<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="d-sm-flex align-items-center justify-content-between py-3">
    <h5 class=" mb-0 text-gray-800 pl-3"><?php echo e(__('Edit Users')); ?> <a class="btn btn-primary btn-rounded btn-sm" href="<?php echo e(route('admin.user.index')); ?>"><i class="fas fa-arrow-left"></i> <?php echo e(__('Back')); ?></a></h5>
    <ol class="breadcrumb m-0 py-0">
        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a></li>
        <li class="breadcrumb-item"><a href="javascript:;"><?php echo e(__('User Edit')); ?></a></li>
        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.user.index')); ?>"><?php echo e(__('User List')); ?></a></li>
        <li class="breadcrumb-item"><a href="<?php echo e(route('admin-user-edit',$data->id)); ?>"><?php echo e(__('Edit User')); ?></a></li>
    </ol>
    </div>
</div>

<div class="row justify-content-center mt-3">
  <div class="col-md-10">
    <!-- Form Basic -->
    <div class="card mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary"><?php echo e(__('Edit User Form')); ?></h6>
      </div>

      <div class="card-body">
        <div class="gocover" style="background: url(<?php echo e(asset('assets/images/'.$gs->admin_loader)); ?>) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
        <form class="geniusform" action="<?php echo e(route('admin-user-edit',$data->id)); ?>" method="POST" enctype="multipart/form-data">

            <?php echo $__env->make('includes.admin.form-both', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php echo e(csrf_field()); ?>


            <div class="form-group">
                <label><?php echo e(__('Set Picture')); ?></label>
                <div class="wrapper-image-preview">
                    <div class="box">
                        <div class="back-preview-image" style="background-image: url(<?php echo e($data->photo ? asset('assets/images/'.$data->photo) : asset('assets/images/placeholder.jpg')); ?>);"></div>
                        <div class="upload-options">
                            <label class="img-upload-label" for="img-upload"> <i class="fas fa-camera"></i> <?php echo e(__('Upload Picture')); ?> </label>
                            <input id="img-upload" type="file" class="image-upload" name="photo" accept="image/*">
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="inp-name"><?php echo e(__('Name')); ?></label>
                <input type="text" class="form-control" id="inp-name" name="name"  placeholder="<?php echo e(__('Enter Name')); ?>" value="<?php echo e($data->name); ?>" required>
            </div>

            <div class="form-group">
                <label for="inp-email"><?php echo e(__('Email')); ?></label>
                <input type="text" class="form-control" id="inp-email" name="email"  placeholder="<?php echo e(__('Enter Email')); ?>" value="<?php echo e($data->email); ?>" disabled="">
            </div>

            <div class="form-group">
                <label for="inp-phone"><?php echo e(__('Phone')); ?></label>
                <input type="text" class="form-control" id="inp-phone" name="phone"  placeholder="<?php echo e(__('Enter Phone')); ?>" value="<?php echo e($data->phone); ?>" required>
            </div>

            <div class="form-group">
                <label for="inp-address"><?php echo e(__('Address')); ?></label>
                <input type="text" class="form-control" id="inp-address" name="address"  placeholder="<?php echo e(__('Enter Address')); ?>" value="<?php echo e($data->address); ?>" required>
            </div>


            <div class="form-group">
                <label for="inp-city"><?php echo e(__('City')); ?></label>
                <input type="text" class="form-control" id="inp-city" name="city"  placeholder="<?php echo e(__('Enter City')); ?>" value="<?php echo e($data->city); ?>" required>
            </div>

            <div class="form-group">
                <label for="inp-fax"><?php echo e(__('Fax')); ?></label>
                <input type="text" class="form-control" id="inp-fax" name="fax"  placeholder="<?php echo e(__('Enter Fax')); ?>" value="<?php echo e($data->fax); ?>" >
            </div>

            <div class="form-group">
                <label for="inp-zip"><?php echo e(__('Postal Code')); ?></label>
                <input type="text" class="form-control" id="inp-zip" name="zip"  placeholder="<?php echo e(__('Enter Zip')); ?>" value="<?php echo e($data->zip); ?>" required>
            </div>

            <button type="submit" id="submit-btn" class="btn btn-primary w-100"><?php echo e(__('Submit')); ?></button>

        </form>
      </div>
    </div>

    <!-- Form Sizing -->

    <!-- Horizontal Form -->

  </div>

</div>
<!--Row-->

<?php $__env->stopSection(); ?>





<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\htdocs\geniuslisting\project\resources\views/admin/user/edit.blade.php ENDPATH**/ ?>