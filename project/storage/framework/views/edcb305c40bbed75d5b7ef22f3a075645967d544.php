<?php if(isset($beauties)): ?>
    <?php $__currentLoopData = $beauties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $beauty): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <input type="hidden" name="service_id[]" value="<?php echo e($beauty->id); ?>">
        <div class="card mb-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="left-area">
                            <h4 class="heading"><?php echo e(__('Service Name')); ?> *</h4>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <input type="text" class="input-field" name="service_name[]" placeholder="<?php echo e(__('Enter Name')); ?>" value="<?php echo e($beauty->service_name); ?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3">
                        <div class="left-area">
                            <h4 class="heading"><?php echo e(__('Service Price')); ?> *</h4>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <input type="number" class="input-field" name="service_price[]" placeholder="<?php echo e(__('Enter Price')); ?>" value="<?php echo e($beauty->service_price); ?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3">
                        <div class="left-area">
                            <h4 class="heading"><?php echo e(__('Service Photo')); ?></h4>
                            <p class="sub-heading">(<?php echo e(__('Preferred Size 600 x 600')); ?>)</p>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="wrapper-image-preview">
                            <div class="box">
                                <div class="back-preview-image" style="background-image: url(<?php echo e($beauty->service_photo ? asset('assets/images/'.$beauty->service_photo) : asset('assets/images/default.png')); ?>);"></div>
                                <div class="upload-options">
                                    <label class="img-upload-label" for="service-items-1"><i class="fas fa-camera"></i> <?php echo e(__('Upload Picture')); ?> </label>
                                    <input id="service-items-1" type="file" class="image-upload" name="service_photo[]" accept="image/*">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row my-3">
                    <div class="col-lg-3">
                        <div class="left-area">
                            <h4 class="heading"><?php echo e(__('Service Time')); ?> *</h4>
                        </div>
                    </div>

                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-md-4">
                                <input type="text" class="input-field" name="service_from[]" placeholder="<?php echo e(__('Enter time')); ?>" value="<?php echo e($beauty->service_from); ?>">
                            </div>

                            <div class="col-md-5">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="left-area">
                                            <h4 class="heading"><?php echo e(__('To')); ?> *</h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="text" class="input-field" name="service_to[]" placeholder="<?php echo e(__('Enter time')); ?>" value="<?php echo e($beauty->service_to); ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-lg-3">
                        <div class="left-area">
                            <h4 class="heading"><?php echo e(__('Service Duration')); ?> *</h4>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <input type="number" class="input-field" name="service_duration[]" placeholder="<?php echo e(__('Enter Duration')); ?>" value="<?php echo e($beauty->service_duration); ?>">
                    </div>
                </div>

            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
    <div class="card mb-4">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-3">
                    <div class="left-area">
                        <h4 class="heading"><?php echo e(__('Service Name')); ?> *</h4>
                    </div>
                </div>
                <div class="col-lg-9">
                    <input type="text" class="input-field" name="service_name[]" placeholder="<?php echo e(__('Enter Name')); ?>" value="">
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3">
                    <div class="left-area">
                        <h4 class="heading"><?php echo e(__('Service Price')); ?> *</h4>
                    </div>
                </div>
                <div class="col-lg-9">
                    <input type="number" class="input-field" name="service_price[]" placeholder="<?php echo e(__('Enter Price')); ?>" value="">
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3">
                    <div class="left-area">
                        <h4 class="heading"><?php echo e(__('Service Photo')); ?></h4>
                        <p class="sub-heading">(<?php echo e(__('Preferred Size 600 x 600')); ?>)</p>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="wrapper-image-preview">
                        <div class="box">
                            <div class="back-preview-image" style="background-image: url(<?php echo e(asset('assets/images/placeholder.jpg')); ?>);"></div>
                            <div class="upload-options">
                                <label class="img-upload-label" for="service-items-1"><i class="fas fa-camera"></i> <?php echo e(__('Upload Picture')); ?> </label>
                                <input id="service-items-1" type="file" class="image-upload" name="service_photo[]" accept="image/*">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row my-3">
                <div class="col-lg-3">
                    <div class="left-area">
                        <h4 class="heading"><?php echo e(__('Service Time')); ?> *</h4>
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-md-4">
                            <input type="text" class="input-field" name="service_from[]" placeholder="<?php echo e(__('Enter time')); ?>" value="">
                        </div>

                        <div class="col-md-5">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="left-area">
                                        <h4 class="heading"><?php echo e(__('To')); ?> *</h4>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" class="input-field" name="service_to[]" placeholder="<?php echo e(__('Enter time')); ?>" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-3">
                    <div class="left-area">
                        <h4 class="heading"><?php echo e(__('Service Duration')); ?> *</h4>
                    </div>
                </div>
                <div class="col-lg-9">
                    <input type="number" class="input-field" name="service_duration[]" placeholder="<?php echo e(__('Enter Duration')); ?>" value="">
                </div>
            </div>

        </div>
    </div>
<?php endif; ?>
<?php /**PATH C:\wamp\htdocs\geniuslisting\project\resources\views/partials/admin/listing/beauty.blade.php ENDPATH**/ ?>