<?php $__env->startPush('css'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

    <!-- =============================== Dashboard Header ========================== -->
    <?php if ($__env->exists('partials.user.header')) echo $__env->make('partials.user.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- =============================== Dashboard Header ========================== -->

    <!-- ======================= dashboard Detail ======================== -->
    <div class="dashboard-wrap gray px-4 py-5">
        <a class="mobNavigation" data-bs-toggle="collapse" href="#MobNav" role="button" aria-expanded="false" aria-controls="MobNav">
            <i class="fas fa-bars me-2"></i><?php echo app('translator')->get('Dashboard Navigation'); ?>
        </a>
        <div class="collapse" id="MobNav">
            <?php if ($__env->exists('partials.user.sidebar')) echo $__env->make('partials.user.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <div class="dashboard-content">
            <div class="dashboard-tlbar d-block mb-5">
                <div class="row">
                    <div class="colxl-12 col-lg-12 col-md-12">
                        <h1 class="ft-medium"><?php echo app('translator')->get('Messages'); ?></h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item text-muted"><a href="<?php echo e(route('front.index')); ?>"><?php echo app('translator')->get('Home'); ?></a></li>
                                <li class="breadcrumb-item text-muted"><a href="<?php echo e(route('user.dashboard')); ?>"><?php echo app('translator')->get('Dashboard'); ?></a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="dashboard-widg-bar d-block">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="_dashboard_content bg-white rounded mb-4">

                            <div class="_dashboard_content_body">
                                <!-- Convershion -->
                                <div class="messages-container margin-top-0">
                                    <div class="messages-headline">
                                        <h4>Connor Griffin</h4>
                                        <a href="javascript:void(0)" class="message-action" data-bs-toggle="modal" data-bs-target="#ticket-modal"><i class="ti-plus"></i> <?php echo app('translator')->get('Open a ticket'); ?></a>
                                    </div>

                                    <div class="messages-container-inner">

                                        <!-- Messages -->
                                        <div class="dash-msg-inbox">
                                            <ul>
                                                <?php $__currentLoopData = $tickets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li class="<?php echo e(request()->query('ticket') == $data->id ? 'active-message' : ''); ?>">
                                                        <a href="<?php echo e(route('user.message.index',['ticket'=>$data->id])); ?>">
                                                            <div class="message-by">
                                                                <div class="message-by-headline">
                                                                    <h5><?php echo e($data->ticket_number); ?></h5>
                                                                    <span><?php echo e($data->created_at->diffForHumans()); ?></span>
                                                                </div>
                                                                <p><?php echo e($data->subject); ?></p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        </div>
                                        <!-- Messages / End -->

                                        <!-- Message Content -->
                                        <div class="dash-msg-content">
                                            <?php if(count($messages)>0): ?>
                                                <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($data->user_id == 0): ?>
                                                        <div class="message-plunch">
                                                            <div class="dash-msg-avatar"><img src="<?php echo e(asset('assets/images/'.getAdmin()->photo)); ?>" alt=""></div>
                                                            <div class="dash-msg-text">
                                                                <p><?php echo e($data->message); ?>

                                                                    <br>
                                                                    <?php if($data->photo != NULL): ?>
                                                                        <a href="<?php echo e(asset('assets/images/'.$data->photo)); ?>" download=""><i class="fas fa-paperclip"></i> <?php echo app('translator')->get('attachment'); ?>-<?php echo e($key +=1); ?></a>
                                                                    <?php endif; ?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    <?php else: ?>

                                                    <div class="message-plunch me">
                                                        <div class="dash-msg-avatar"><img src="<?php echo e(asset('assets/images/'.$user->photo)); ?>" alt=""></div>
                                                        <div class="dash-msg-text">
                                                            <p><?php echo e($data->message); ?>

                                                                <br>
                                                                <?php if($data->photo != NULL): ?>
                                                                    <a href="<?php echo e(asset('assets/images/'.$data->photo)); ?>" download=""><i class="fas fa-paperclip"></i> <?php echo app('translator')->get('attachment'); ?>-<?php echo e($key +=1); ?></a>
                                                                <?php endif; ?>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php else: ?>
                                                <h3><?php echo app('translator')->get('No Message Found'); ?></h3>
                                            <?php endif; ?>

                                                <!-- Reply Area -->
                                                <div class="clearfix"></div>
                                                <div class="message-reply">
                                                    <form action="<?php echo e(route('user.message.conversation',$ticket->id)); ?>" method="post" enctype="multipart/form-data">
                                                        <?php echo csrf_field(); ?>
                                                        <input type="file" name="photo" id="">
                                                        <textarea cols="40" rows="3" name="message" class="form-control with-light" placeholder="<?php echo app('translator')->get('Your Message'); ?>"></textarea>
                                                        <button type="submit" class="btn theme-bg text-white"><?php echo app('translator')->get('Send Message'); ?></button>
                                                    </form>
                                                </div>

                                        </div>
                                        <!-- Message Content -->

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- footer -->
            <div class="row">
                <div class="col-md-12">
                    <div class="py-3">
                        <?php
                            echo $gs->copyright;
                        ?>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- ======================= dashboard Detail End ======================== -->



<div class="modal fade" id="ticket-modal" aria-modal="true" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
          <form action="<?php echo e(route('user.message.store')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="modal-body p-4">
                <h4 class="modal-title text-center" id="withdrawModalTitle"><?php echo app('translator')->get('Create a ticket'); ?></h4>
                <div class="pt-3 pb-4">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="form-label required"><?php echo e(__('Subject')); ?></label>
                                <input type="text" name="subject" class="form-control <?php $__errorArgs = ['subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" autocomplete="off" placeholder="<?php echo e(__('Enter Subject')); ?>" value="<?php echo e(old('subject')); ?>">
                                <?php $__errorArgs = ['subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="text-danger mt-2"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="form-label"><?php echo e(__('Message')); ?></label>
                                <textarea name="message" class="form-control nic-edit <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" cols="30" rows="5" placeholder="<?php echo e(__('Enter Subject')); ?>"></textarea>
                                <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="text-danger mt-2"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="file" name="attachment" class="form-control <?php $__errorArgs = ['attachment'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                <?php $__errorArgs = ['attachment'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="text-danger mt-2"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="d-flex">
                    <button type="button" class="btn shadow-none btn-danger me-2 w-50" data-bs-dismiss="modal"><?php echo app('translator')->get('Close'); ?></button>
                    <button type="submit" class="btn shadow-none btn-success w-50"><?php echo app('translator')->get('Send'); ?></button>
                </div>
            </div>
          </form>
        </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
<script type="text/javascript">
    'use strict';

    $('#confirm-delete').on('show.bs.modal', function(e) {
        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
    });

</script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\latest\listing\project\resources\views/user/message/index.blade.php ENDPATH**/ ?>