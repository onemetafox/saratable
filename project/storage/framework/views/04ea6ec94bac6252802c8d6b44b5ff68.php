<?php $__env->startSection('content'); ?>

<div class="card">
	<div class="d-sm-flex align-items-center justify-content-between">
        <h5 class=" mb-0 text-gray-800 pl-3"><?php echo e(__('Faq Page')); ?></h5>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a></li>
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.faq.index')); ?>"><?php echo e(__('Faq Page')); ?></a></li>
        </ol>
	</div>
</div>


<div class="row mt-3">
  <div class="col-lg-12">

	<?php echo $__env->make('includes.admin.form-success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<div class="card mb-4">
	  <div class="table-responsive p-3">
		<table id="geniustable" class="table table-hover dt-responsive" cellspacing="0" width="100%">
		  <thead class="thead-light">
			<tr>
                <th width="30%"><?php echo e(__('Faq Question')); ?></th>
                <th width="50%"><?php echo e(__('Faq Details')); ?></th>
                <th ><?php echo e(__('Options')); ?></th>
			</tr>
		  </thead>
		</table>
	  </div>
	</div>
  </div>

</div>
<!--Row-->

<?php if ($__env->exists('partials.admin.status')) echo $__env->make('partials.admin.status', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="modal fade confirm-modal" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title"><?php echo e(__("Confirm Delete")); ?></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p class="text-center"><?php echo e(__("You are about to delete this Faq. Every informtation under this faq will be deleted.")); ?></p>
				<p class="text-center"><?php echo e(__("Do you want to proceed?")); ?></p>
			</div>
			<div class="modal-footer">
				<a href="javascript:;" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__("Cancel")); ?></a>
				<a href="javascript:;" class="btn btn-danger btn-ok"><?php echo e(__("Delete")); ?></a>
			</div>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('scripts'); ?>

<script type="text/javascript">
	"use strict";

    var table = $('#geniustable').DataTable({
           ordering: false,
           processing: true,
           serverSide: true,
           searching: true,
           ajax: '<?php echo e(route('admin.faq.datatables')); ?>',
           columns: [
                    { data: 'title', name: 'title' },
                    { data: 'details', name: 'details' },
                    { data: 'action', searchable: false, orderable: false }

                 ],
            language : {
                processing: '<img src="<?php echo e(asset('assets/backend/images/loader/'.$gs->admin_loader)); ?>">'
            }
        });

        $(function() {
        $(".btn-area").append('<div class="col-sm-12 col-md-4 pr-3 text-right">'+
            '<a class="btn btn-primary" href="<?php echo e(route('admin.faq.create')); ?>">'+
        '<i class="fas fa-plus"></i> Add New'+
        '</a>'+
        '</div>');
    });


</script>






<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\latest\listing\project\resources\views/admin/faq/index.blade.php ENDPATH**/ ?>