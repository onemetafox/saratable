<?php $__env->startSection('content'); ?>

<div class="content-area">
  <div class="card">
    <div class="d-sm-flex align-items-center justify-content-between">
    <h5 class=" mb-0 text-gray-800 pl-3"><?php echo e(__('Group Email')); ?></h5>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a></li>
        <li class="breadcrumb-item"><a href="javascript:;"><?php echo e(__('Email Settings')); ?></a></li>
        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.group.show')); ?>"><?php echo e(__('Group Email')); ?></a></li>
    </ol>
    </div>
  </div>
</div>

  <div class="card mb-4 mt-3">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
    </div>

    <div class="card-body">
      <div class="gocover" style="background: url(<?php echo e(asset('assets/images/'.$gs->admin_loader)); ?>) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
      <form class="geniusform" action="<?php echo e(route('admin.group.submit')); ?>" method="POST" enctype="multipart/form-data">

          <?php echo $__env->make('includes.admin.form-both', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

          <?php echo e(csrf_field()); ?>



          <div class="form-group">
            <label for="inp-name"><?php echo e(__('Select User Type')); ?>*</label>
              <select name="type" required="" class="input-field">
                  <option value=""> <?php echo e(__('Choose User Type')); ?> </option>
                  <option value="User"><?php echo e(__('Users')); ?></option>
                  <option value="2"><?php echo e(__('Subscribers')); ?></option>
              </select>
          </div>

          <div class="form-group">
            <label for="inp-name"><?php echo e(__('Email Subject')); ?> *</label>
            <small><?php echo e(__('(In Any Language)')); ?></small>
            <input type="text" class="input-field" name="subject" placeholder="<?php echo e(__('Email Subject')); ?>" value="" required="">
          </div>


          <div class="form-group">
            <label for="inp-name"><?php echo e(__('Email Body')); ?> *</label>
            <small><?php echo e(__('(In Any Language)')); ?></small>
            <textarea class="form-control " name="body" placeholder="<?php echo e(__('Email Body')); ?>"></textarea>
          </div>

          <button type="submit" id="submit-btn" class="btn btn-primary w-100"><?php echo e(__('Submit')); ?></button>

      </form>
    </div>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\latest\listing\project\resources\views/admin/email/group.blade.php ENDPATH**/ ?>