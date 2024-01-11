<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="d-sm-flex align-items-center py-3 justify-content-between">
    <h5 class=" mb-0 text-gray-800 pl-3"><?php echo e(__('Contact Us')); ?></h5>
    <ol class="breadcrumb m-0 py-0">
        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a></li>
        <li class="breadcrumb-item"><a href="javascript:;"><?php echo e(__('Menu Page Settings')); ?></a></li>
        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.ps.contact')); ?>"><?php echo e(__('Contact Us Page')); ?></a></li>
    </ol>
    </div>
</div>

  <div class="card mb-4 mt-3">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary"><?php echo e(__('Contact Us')); ?></h6>
    </div>

    <div class="card-body">
      <div class="gocover" style="background: url(<?php echo e(asset('assets/images/'.$gs->admin_loader)); ?>) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
      <form class="geniusform" action="<?php echo e(route('admin.ps.contactupdate')); ?>" method="POST" enctype="multipart/form-data">

          <?php echo $__env->make('includes.admin.form-both', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

          <?php echo e(csrf_field()); ?>


          <div class="form-group">
              <label for="inp-title"><?php echo e(__('Contact Page')); ?> </label>
              <div class="frm-btn btn-group mb-1">
                <button type="button" class="btn btn-sm btn-rounded dropdown-toggle btn-<?php echo e($gs->is_contact == 1 ? 'success' : 'danger'); ?>" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <?php echo e($gs->is_contact == 1 ? __('Activated') : __('Deactivated')); ?>

                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item drop-change" href="javascript:;" data-status="1" data-val="<?php echo e(__('Activated')); ?>" data-href="<?php echo e(route('admin.gs.status',['is_contact',1])); ?>"><?php echo e(__('Activate')); ?></a>
                  <a class="dropdown-item drop-change" href="javascript:;" data-status="0" data-val="<?php echo e(__('Deactivated')); ?>" data-href="<?php echo e(route('admin.gs.status',['is_contact',0])); ?>"><?php echo e(__('Deactivate')); ?></a>
                </div>
              </div>
          </div>

        <div class="form-group">
          <label for="side_title"><?php echo e(__('Contact Title')); ?> *</label>
          <textarea class="form-control summernote"  id="side_title" name="side_title" required rows="3" placeholder="<?php echo e(__('Contact title')); ?>"><?php echo e($data->side_title); ?></textarea>
        </div>


        <div class="form-group">
          <label for="contact_email"><?php echo e(__('Contact Us Email Address')); ?> *</label>
          <input type="text" class="form-control" id="contact_email" name="contact_email"  placeholder="<?php echo e(__('Contact Us Email Address')); ?>" value="<?php echo e($data->contact_email); ?>" required>
        </div>

        <div class="form-group">
          <label for="site"><?php echo e(__('Website')); ?> *</label>
          <input type="text" class="form-control" id="site" value="<?php echo e($data->site); ?>" name="site"  placeholder="<?php echo e(__('Website')); ?>" value="" required>
        </div>

        <div class="form-group">
          <label for="phone"><?php echo e(__('Phone')); ?> *</label>
          <input type="text" class="form-control" id="phone" value="<?php echo e($data->phone); ?>" name="phone"  placeholder="<?php echo e(__('Phone')); ?>" value="" required>
        </div>

        <div class="form-group">
          <label for="street"><?php echo e(__('Address')); ?> *</label>
          <textarea class="form-control summernote"  id="street" name="street" required rows="3" placeholder="<?php echo e(__('Street Address')); ?>"><?php echo e($data->street); ?></textarea>
        </div>

        <button type="submit" id="submit-btn" class="btn btn-primary w-100"><?php echo e(__('Submit')); ?></button>

      </form>
    </div>
  </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\latest\listing\project\resources\views/admin/pagesetting/contact.blade.php ENDPATH**/ ?>