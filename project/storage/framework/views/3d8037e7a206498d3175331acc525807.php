<?php $__env->startPush('css'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <!-- ======================= Top Breadcrubms ======================== -->
    <div class="bg-dark py-3">
        <div class="container">
            <div class="row">
                <div class="colxl-12 col-lg-12 col-md-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(route('front.index')); ?>" class="text-light"><?php echo app('translator')->get('Home'); ?></a></li>
                            <li class="breadcrumb-item active theme-cl" aria-current="page"><?php echo app('translator')->get('Pricing'); ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ======================= Top Breadcrubms ======================== -->

    <!-- =========================== Price Box ======================= -->
    <section class="space min gray">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-7 col-md-9 col-sm-12">
                    <div class="sec_title position-relative text-center mb-5">
                        <h6 class="theme-cl mb-0"><?php echo e($ps->plan_title); ?></h6>
                        <h2 class="ft-bold"><?php echo e($ps->plan_subtitle); ?></h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                        <div class="Rego-price-wrap">
                            <div class="Rego-author-header">
                                <div class="Rego-price-currency">
                                    <h3>
                                        <span class="Rego-new-price" style="color:<?php echo e($data->price_color); ?>"><?php echo e(globalCurrency()->sign); ?><del><?php echo e(showAmount($data->price)); ?></del></span>
                                        <?php if($data->prev_price>0): ?>
                                            <span class="Rego-old-price"><?php echo e(globalCurrency()->sign); ?><del><?php echo e(showAmount($data->prev_price)); ?></del></span>
                                        <?php endif; ?>
                                    </h3>
                                </div>
                                <div class="Rego-price-title">
                                    <div class="Rego-price-tlt">
                                        <h4><?php echo e($data->title); ?></h4>
                                    </div>

                                </div>
                                <div class="Rego-price-subtitle"><?php echo e($data->subtitle); ?></div>
                            </div>
                            <div class="Rego-price-body">
                                <ul class="price__features">
                                    <?php if($data->attribute != NULL): ?>
                                        <?php $__currentLoopData = json_decode($data->attribute); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><i class="fa fa-angle-right"></i><?php echo e($attribute); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </ul>
                            </div>
                            <div class="Rego-price-bottom">
                                <a class="Rego-price-btn" href="<?php echo e(route('user.package.subscription',$data->id)); ?>"><i class="fas fa-shopping-basket"></i><?php echo app('translator')->get('Purchase Now'); ?></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

        </div>
    </section>
    <!-- ===========================  Price Box End ===================== -->

    <!-- ======================= Newsletter Start ============================ -->
    <?php if ($__env->exists('partials.front.cta')) echo $__env->make('partials.front.cta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- ======================= Newsletter Start ============================ -->

    <!-- ============================ Footer Start ================================== -->
    <?php echo $__env->make('partials.front.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- ============================ Footer End ================================== -->

<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\latest\listing\project\resources\views/frontend/plan.blade.php ENDPATH**/ ?>