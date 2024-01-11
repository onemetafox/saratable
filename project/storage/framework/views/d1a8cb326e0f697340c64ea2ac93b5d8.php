<?php $__env->startSection('content'); ?>
<div class="content-area">
  <div class="card">
    <div class="d-sm-flex align-items-center justify-content-between">
    <h5 class=" mb-0 text-gray-800 pl-3"><?php echo e(__('Email Configuration')); ?></h5>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a></li>
        <li class="breadcrumb-item"><a href="javascript:;"><?php echo e(__('Email Settings')); ?></a></li>
        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.group.show')); ?>"><?php echo e(__('Email Configuration')); ?></a></li>
    </ol>
    </div>
  </div>
</div>

  <div class="card mb-4 mt-3">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
    </div>

    <div class="card-body">
      <div class="gocover" style="background: url(<?php echo e(asset('assets/images/'.$gs->admin_loader)); ?>) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
      <form class="geniusform" action="<?php echo e(route('admin.gs.update')); ?>" method="POST" enctype="multipart/form-data">

          <?php echo $__env->make('includes.admin.form-both', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

          <?php echo e(csrf_field()); ?>


          <div class="form-group">
              <label for="inp-title"><?php echo e(__('SMTP')); ?></label>
              <div class="frm-btn btn-group mb-1">
                  <button type="button" class="btn btn-sm btn-rounded dropdown-toggle btn-<?php echo e($gs->is_smtp == 1 ? 'success' : 'danger'); ?>" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <?php echo e($gs->is_smtp == 1 ? __('Activated') : __('Deactivated')); ?>

                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item drop-change" href="javascript:;" data-status="1" data-val="<?php echo e(__('Activated')); ?>" data-href="<?php echo e(route('admin.gs.status',['is_smtp',1])); ?>"><?php echo e(__('Activate')); ?></a>
                    <a class="dropdown-item drop-change" href="javascript:;" data-status="0" data-val="<?php echo e(__('Deactivated')); ?>" data-href="<?php echo e(route('admin.gs.status',['is_smtp',0])); ?>"><?php echo e(__('Deactivate')); ?></a>
                  </div>
                </div>
          </div>


          <div class="form-group">
            <label><?php echo e(__('SMTP Host')); ?> *</label>
            <input type="text" class="input-field" placeholder="<?php echo e(__('Mail Host')); ?>" name="smtp_host" value="<?php echo e($gs->smtp_host); ?>" required>
          </div>

          <div class="form-group">
            <label><?php echo e(__('SMTP Port')); ?> *</label>
            <input type="text" class="input-field" placeholder="<?php echo e(__('Mail Port')); ?>" name="smtp_port" value="<?php echo e($gs->smtp_port); ?>" required>
          </div>

          <div class="form-group">
            <label><?php echo e(__('Encryption')); ?> *</label>
            <select class="form-control" id="mail_encryption" name="smtp_encryption">
                <option value="tls" <?php echo e($gs->smtp_encryption == 'tls' ? 'selected' : ''); ?>><?php echo app('translator')->get('TLS'); ?></option>
                <option value="ssl" <?php echo e($gs->smtp_encryption == 'ssl' ? 'selected' : ''); ?>><?php echo app('translator')->get('SSL'); ?></option>
            </select>
          </div>

          <div class="form-group">
            <label><?php echo e(__('SMTP Username')); ?> *</label>
            <input type="text" class="input-field" placeholder="<?php echo e(__('Mail Username')); ?>" name="smtp_user" value="<?php echo e($gs->smtp_user); ?>" required>
          </div>

          <div class="form-group">
            <label><?php echo e(__('SMTP Password')); ?> *</label>
            <input type="text" class="input-field" placeholder="<?php echo e(__('Mail Password')); ?>" name="smtp_pass" value="<?php echo e($gs->smtp_pass); ?>" required>
          </div>

          <div class="form-group">
            <label><?php echo e(__('From Email')); ?> *</label>
            <input type="text" class="input-field" placeholder="<?php echo e(__('From Email')); ?>" name="from_email" value="<?php echo e($gs->from_email); ?>" required>
          </div>

          <div class="form-group">
            <label><?php echo e(__('From Name')); ?> *</label>
            <input type="text" class="input-field" placeholder="<?php echo e(__('From Name')); ?>" name="from_name" value="<?php echo e($gs->from_name); ?>" required>
          </div>


          <button type="submit" id="submit-btn" class="btn btn-primary w-100"><?php echo e(__('Submit')); ?></button>

      </form>
    </div>
  </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\latest\listing\project\resources\views/admin/email/config.blade.php ENDPATH**/ ?>