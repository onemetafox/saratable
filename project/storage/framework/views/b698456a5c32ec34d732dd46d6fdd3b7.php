<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="d-sm-flex align-items-center justify-content-between py-3">
    <h5 class=" mb-0 text-gray-800 pl-3"><?php echo e(__('Add New Staff')); ?> <a class="btn btn-primary btn-rounded btn-sm" href="<?php echo e(route('admin.staff.index')); ?>"><i class="fas fa-arrow-left"></i> <?php echo e(__('Back')); ?></a></h5>
    <ol class="breadcrumb m-0 py-0">
        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a></li>
        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.staff.index')); ?>"><?php echo e(__('Manage Staff')); ?></a></li>
        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.staff.create')); ?>"><?php echo e(__('Add New Staff')); ?></a></li>
    </ol>
    </div>
</div>

<div class="row justify-content-center mt-3">
  <div class="col-md-10">
    <!-- Form Basic -->
    <div class="card mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary"><?php echo e(__('Add New Staff Form')); ?></h6>
      </div>

      <div class="card-body">
        
        <form class="geniusform" action="<?php echo e(route('admin.staff.store')); ?>" method="POST" enctype="multipart/form-data">

            <?php echo $__env->make('includes.admin.form-both', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php echo e(csrf_field()); ?>



            <div class="form-group" id="set-picture">
                <label><?php echo e(__('Set Picture')); ?> </label>
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
                <label for="inp-name"><?php echo e(__('Name')); ?></label>
                <input type="text" class="form-control" id="inp-name" name="name"  placeholder="<?php echo e(__('Enter Name')); ?>" value="" required>
            </div>

   	        <div class="form-group">
                <label for="inp-name"><?php echo e(__('Username')); ?></label>
                <input type="text" class="form-control" id="inp-name" name="username"  placeholder="<?php echo e(__('Enter Username')); ?>" value="" required>
            </div>

            <div class="form-group">
                <label for="inp-email"><?php echo e(__('Email')); ?></label>
                <input type="email" class="form-control" id="inp-email" name="email"  placeholder="<?php echo e(__('Enter Email')); ?>" value="" required>
            </div>

            <div class="form-group">
                <label for="inp-phone"><?php echo e(__('Phone')); ?></label>
                <input type="text" class="form-control" id="inp-phone" name="phone"  placeholder="<?php echo e(__('Enter Phone')); ?>" value="" required>
			      </div>

            <div class="form-group">
              <label for="inp-pass"><?php echo e(__('Password')); ?></label>
              <input type="password" class="form-control" id="inp-pass" name="password"  placeholder="<?php echo e(__('Enter Password')); ?>" value="" required>
            </div>


            <div class="form-group">
              <label for="inp-name"><?php echo e(__('Select Role')); ?></label>

              <select class="form-control mb-3" name="role_id">
                <option value=""><?php echo e(__('Select Role')); ?></option>
                  <?php $__currentLoopData = DB::table('roles')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($data->id); ?>"><?php echo e($data->name); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\saratable\project\resources\views/admin/staff/create.blade.php ENDPATH**/ ?>