<?php $__env->startSection('content'); ?>

<div class="card">
	<div class="d-sm-flex align-items-center justify-content-between">
    <h5 class=" mb-0 text-gray-800 pl-3"><?php echo e(__('Add New Plan')); ?> <a class="btn btn-primary btn-rounded btn-sm" href="<?php echo e(route('admin.plans.index')); ?>"><i class="fas fa-arrow-left"></i> <?php echo e(__('Back')); ?></a></h5>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a></li>
      <li class="breadcrumb-item"><a href="javascript:;"><?php echo e(__('Manage Plan')); ?></a></li>
    </ol>
	</div>
</div>

<div class="row justify-content-center mt-3">
  <div class="col-md-10">
    <div class="card mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary"><?php echo e(__('Add New Plan Form')); ?></h6>
      </div>

      <div class="card-body py-5">
        <div class="gocover" style="background: url(<?php echo e(asset('assets/images/'.$gs->admin_loader)); ?>) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
        <form class="geniusform" action="<?php echo e(route('admin.plans.store')); ?>" method="POST" enctype="multipart/form-data">

            <?php echo $__env->make('includes.admin.form-both', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php echo e(csrf_field()); ?>


            <div class="form-group">
              <label for="inp-title"><?php echo e(__('Title')); ?></label>
              <input type="text" class="form-control" id="inp-title" name="title"  placeholder="<?php echo e(__('Enter Title')); ?>" value="" required>
            </div>

            <div class="form-group">
              <label for="inp-subtitle"><?php echo e(__('Subtitle')); ?></label>
              <input type="text" class="form-control" id="inp-subtitle" name="subtitle"  placeholder="<?php echo e(__('Enter Subtitle')); ?>" value="" required>
            </div>

            <div class="form-group">
                <label for="plan_type"><?php echo e(__('Plan Type')); ?></label>
                <select name="plan_type" class="form-control" id="plan_type">
                  <option value="monthly"> <?php echo e(__('Monthly')); ?> </option>
                  <option value="yearly"> <?php echo e(__('Yearly')); ?> </option>
                  <option value="life_time"> <?php echo e(__('Life Time')); ?> </option>
                </select>
            </div>

            <div class="form-group">
                <label for="price"><?php echo e(__('Price')); ?> (<?php echo e($currency->name); ?>)</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="<?php echo e(__('Plan Price')); ?>" min="0" step="0.01" value="">
            </div>

            <div class="form-group">
                <label for="prev_price"><?php echo e(__('Previous Price')); ?> (<?php echo e($currency->name); ?>)</label>
                <input type="number" class="form-control" id="prev_price" name="prev_price" placeholder="<?php echo e(__('Plan Previous Price')); ?>" min="0" step="0.01" value="">
            </div>

            <div class="form-group">
                <label for="limit"><?php echo e(__('Ad Limit')); ?></label>
                <input type="number" class="form-control" id="limit" name="post_limit" placeholder="0" min="0" value="">
            </div>

            <div class="form-group">
                <label for="limit"><?php echo e(__('Ad Duration')); ?> (<?php echo app('translator')->get('Days'); ?>)</label>
                <input type="number" class="form-control" id="limit" name="post_duration" placeholder="0" min="0" value="">
            </div>

            <div class="form-group">
                <label for="limit"><?php echo e(__('Price Color')); ?></label>
                <div  id="cp3-container">
                  <div class="input-group" title="Using input value">
                      <input  type="color" name="price_color" class="form-control" value="" id="exampleInputPassword1">
                  </div>
                </div>
            </div>

            <div class="form-group">
              <label for="status"><?php echo e(__('Status')); ?></label>
              <select name="status" class="form-control" id="status">
                <option value="1"> <?php echo e(__('activated')); ?> </option>
                <option value="0"> <?php echo e(__('deactivated')); ?> </option>
              </select>
            </div>

            <div class="featured-keyword-area">
                <div class="lang-tag-top-filds" id="lang-section">


                </div>

                <a href="javascript:;" id="lang-btn" class="add-fild-btn d-flex justify-content-center"><i class="icofont-plus"></i> <?php echo e(__('Add Attribute')); ?></a>
              </div>

            <input type="hidden" name="manage_schedule_id" value="" id="scheduleId">
            <button type="submit" id="submit-btn" class="btn btn-primary w-100 mt-3"><?php echo e(__('Submit')); ?></button>

        </form>
      </div>
    </div>
  </div>

</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script type="text/javascript">
        "use strict";
        function isEmpty(el){
            return !$.trim(el.html())
        }


    $("#lang-btn").on('click', function(){

        $("#lang-section").append(''+
                                    '<div class="lang-area mb-3">'+
                                        '<span class="remove lang-remove"><i class="fas fa-times"></i></span>'+
                                        '<div class="row">'+
                                        '<div class="col-md-12">'+
                                        '<input type="text" class="form-control" name="attribute[]" placeholder="<?php echo e(__('Enter Plan Attribute')); ?>" value="" required>'+
                                        '</div>'+
                                        '</div>'+
                                    '</div>'+
                                '');

    });

    $(document).on('click','.lang-remove', function(){

        $(this.parentNode).remove();

    });

  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\htdocs\geniuslisting\project\resources\views/admin/plans/create.blade.php ENDPATH**/ ?>