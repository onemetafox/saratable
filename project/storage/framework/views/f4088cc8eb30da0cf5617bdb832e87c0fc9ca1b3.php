<?php $__env->startPush('css'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <!-- ============================ Main Section Start ================================== -->
    <section class="gray">
        <div class="container">
            <div class="row">

                <div class="col-xl-4 col-lg-4 col-md-12">
                    <div class="author-wrap-ngh">
                        <?php if(isset($admin)): ?>
                            <div class="author-wrap-head-ngh">
                                <div class="author-wrap-ngh-thumb">
                                    <img src="<?php echo e(asset('assets/images/'.$admin->photo)); ?>" class="img-fluid circle" alt="" />
                                </div>
                                <div class="author-wrap-ngh-info">
                                    <h5><?php echo e($admin->name); ?></h5>
                                    <div class="Rego-location"><i class="fas fa-map-marker-alt"></i><?php echo e($admin->address); ?></div>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if(isset($user)): ?>
                            <div class="author-wrap-head-ngh">
                                <div class="author-wrap-ngh-thumb">
                                    <img src="<?php echo e(asset('assets/images/'.$user->photo)); ?>" class="img-fluid circle" alt="" />
                                </div>
                                <div class="author-wrap-ngh-info">
                                    <h5><?php echo e($user->name); ?></h5>
                                    <div class="Rego-location"><i class="fas fa-map-marker-alt"></i><?php echo e($user->address); ?></div>
                                </div>
                            </div>
                        <?php endif; ?>

                        <div class="author-wrap-caption-ngh">
                            <div class="author-wrap-jhyu-ngh">
                                <ul>
                                    <?php if(isset($user)): ?>
                                        <li>
                                            <div class="list-kjvr">
                                                <div class="list-kjvr-icon bg-light-sky text-sky"><i class="fas fa-file"></i></div>
                                                <div class="list-kjvr-ctr"><h6 class="count"><?php echo e(count($user->listings)); ?></h6></div>
                                                <div class="list-kjvr-text"><?php echo app('translator')->get('Listings'); ?></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="list-kjvr">
                                                <div class="list-kjvr-icon bg-light-warning text-warning"><i class="fas fa-thumbs-up"></i></div>
                                                <div class="list-kjvr-ctr"><h6 class="count"><?php echo e(DB::table('followers')->where('user_id',$user->id)->count()); ?></h6><span></span></div>
                                                <div class="list-kjvr-text"><?php echo app('translator')->get('Followers'); ?></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="list-kjvr">
                                                <div class="list-kjvr-icon bg-light-danger text-danger"><i class="fas fa-heart"></i></div>
                                                <div class="list-kjvr-ctr"><h6 class="count"><?php echo e(DB::table('followers')->where('follower_id',$user->id)->count()); ?></h6></div>
                                                <div class="list-kjvr-text"><?php echo app('translator')->get('Followings'); ?></div>
                                            </div>
                                        </li>
                                    <?php endif; ?>

                                    <?php if(isset($admin)): ?>
                                        <li>
                                            <div class="list-kjvr">
                                                <div class="list-kjvr-icon bg-light-sky text-sky"><i class="fas fa-file"></i></div>
                                                <div class="list-kjvr-ctr"><h6 class="count"><?php echo e(count(DB::table('listings')->where('user_id',NULL)->where('admin_id',NULL)->get())); ?></h6></div>
                                                <div class="list-kjvr-text"><?php echo app('translator')->get('Listings'); ?></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="list-kjvr">
                                                <div class="list-kjvr-icon bg-light-warning text-warning"><i class="fas fa-thumbs-up"></i></div>
                                                <div class="list-kjvr-ctr"><h6 class="count"><?php echo e(DB::table('followers')->where('user_id','NULL')->count()); ?></h6><span></span></div>
                                                <div class="list-kjvr-text"><?php echo app('translator')->get('Followers'); ?></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="list-kjvr">
                                                <div class="list-kjvr-icon bg-light-danger text-danger"><i class="fas fa-heart"></i></div>
                                                <div class="list-kjvr-ctr"><h6 class="count"><?php echo e((int)DB::table('recent_views_listings')->where('listing_owner_id',NULL)->count()); ?></h6></div>
                                                <div class="list-kjvr-text"><?php echo app('translator')->get('views'); ?></div>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            </div>

                            <?php if(isset($admin)): ?>
                            <div class="author-wrap-yuio-ngh mt-5">
                                <div class="row g-4">
                                    <div class="col-12">
                                        <a href="javascript:void(0);" class="adv-btn full-width add-follow" data-user="<?php echo e(auth()->id()); ?>" data-owner="" data-listing=""><?php echo app('translator')->get('Follow Now'); ?></a>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php if(isset($user)): ?>
                            <div class="author-wrap-yuio-ngh mt-5">
                                <div class="row g-4">
                                    <div class="col-12">
                                        <a href="javascript:void(0);" class="adv-btn full-width add-follow" data-user="<?php echo e(auth()->id()); ?>" data-owner="<?php echo e($user->id); ?>" data-listing=""><?php echo app('translator')->get('Follow Now'); ?></a>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>

                        <div class="author-wrap-footer-ngh">
                            <ul>
                                <?php if(isset($user)): ?>
                                    <li>
                                        <div class="jhk-list-inf">
                                            <div class="jhk-list-inf-ico"><i class="fas fa-envelope"></i></div>
                                            <div class="jhk-list-inf-caption"><h5><?php echo app('translator')->get('Mail Us'); ?></h5><p><?php echo e($user->email); ?></p></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="jhk-list-inf">
                                            <div class="jhk-list-inf-ico"><i class="fas fa-phone"></i></div>
                                            <div class="jhk-list-inf-caption"><h5><?php echo app('translator')->get('Make Call'); ?></h5><p><?php echo e($user->phone); ?></p></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="jhk-list-inf">
                                            <div class="jhk-list-inf-ico"><i class="fas fa-map-marker-alt"></i></div>
                                            <div class="jhk-list-inf-caption"><h5><?php echo app('translator')->get('Get Direction'); ?></h5><p><?php echo e($user->direction); ?></p></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="jhk-list-inf">
                                            <div class="jhk-list-inf-ico"><i class="fas fa-globe"></i></div>
                                            <div class="jhk-list-inf-caption"><h5><?php echo app('translator')->get('Live Web'); ?>:</h5><p><?php echo e($user->website); ?></p></div>
                                        </div>
                                    </li>
                                <?php endif; ?>

                                <?php if(isset($admin)): ?>
                                <li>
                                    <div class="jhk-list-inf">
                                        <div class="jhk-list-inf-ico"><i class="fas fa-envelope"></i></div>
                                        <div class="jhk-list-inf-caption"><h5><?php echo app('translator')->get('Mail Us'); ?></h5><p><?php echo e($admin->email); ?></p></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="jhk-list-inf">
                                        <div class="jhk-list-inf-ico"><i class="fas fa-phone"></i></div>
                                        <div class="jhk-list-inf-caption"><h5><?php echo app('translator')->get('Make Call'); ?></h5><p><?php echo e($admin->phone); ?></p></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="jhk-list-inf">
                                        <div class="jhk-list-inf-ico"><i class="fas fa-map-marker-alt"></i></div>
                                        <div class="jhk-list-inf-caption"><h5><?php echo app('translator')->get('Get Direction'); ?></h5><p><?php echo e($admin->direction); ?></p></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="jhk-list-inf">
                                        <div class="jhk-list-inf-ico"><i class="fas fa-globe"></i></div>
                                        <div class="jhk-list-inf-caption"><h5><?php echo app('translator')->get('Live Web'); ?>:</h5><p><?php echo e($admin->website); ?></p></div>
                                    </div>
                                </li>
                            <?php endif; ?>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="col-xl-8 col-lg-8 col-md-12">


                    <!-- row -->
                    <div class="row justify-content-center gx-3">
                        <?php if(count($listings)>0): ?>
                            <?php $__currentLoopData = $listings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                    <div class="Rego-grid-wrap">
                                        <div class="Rego-grid-upper">
                                            <div class="Rego-bookmark-btn">
                                                <button type="button" class="wishList" data-listing="<?php echo e($data->id); ?>" data-user=<?php echo e(auth()->id()); ?>>
                                                    <i class="lni lni-heart<?php echo e($data->userFavourite(auth()->id(),$data->id) ? '-filled' : ''); ?> position-absolute"></i>
                                                </button>
                                            </div>
                                            <div class="Rego-pos ab-left">
                                                <div class="Rego-status open me-2"><?php echo e($data->openClose($data->id)); ?></div>
                                                <?php if($data->is_featured): ?>
                                                    <div class="Rego-featured-tag"><?php echo app('translator')->get('Featured'); ?></div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="Rego-grid-thumb">
                                                <a href="<?php echo e(route('front.listing.details',$data->slug)); ?>" class="d-block text-center m-auto"><img src="<?php echo e(asset('assets/images/'.$data->photo)); ?>" class="img-fluid" alt="" /></a>
                                            </div>
                                        </div>
                                        <div class="Rego-grid-fl-wrap">
                                            <div class="Rego-caption px-3 py-2">
                                                <div class="Rego-cates"><a href="<?php echo e(route('front.listing',['category' => $data->category->slug])); ?>"><?php echo e($data->category->name); ?></a></div>
                                                <h4 class="mb-0 ft-medium medium"><a href="<?php echo e(route('front.listing.details',$data->slug)); ?>" class="text-dark fs-md"><?php echo e($data->name); ?><span class="verified-badge"><i class="fas fa-check-circle"></i></span></a></h4>
                                                <div class="Rego-middle-caption mt-3">
                                                    <div class="Rego-location"><i class="fas fa-map-marker-alt"></i><?php echo e($data->real_address); ?></div>
                                                    <div class="Rego-call"><i class="fas fa-phone-alt"></i><?php echo e($data->phone_number); ?></div>
                                                </div>
                                            </div>
                                            <div class="Rego-grid-footer py-3 px-3">
                                                <div class="Rego-ft-first">
                                                    <?php if(count($data->reviews)>0): ?>
                                                    <div class="Rego-rating">
                                                        <div class="Rego-pr-average high"><?php echo e($data->directoryRatting($data->id)); ?></div>
                                                        <div class="Rego-rates">
                                                            <?php
                                                                $rate = ceil($data->directoryRatting($data->id));
                                                            ?>

                                                            <?php for($i=1; $i<=$rate; $i++): ?>
                                                                <i class="fas fa-star active"></i>
                                                            <?php endfor; ?>

                                                            <?php for($i=1; $i<=(5-$rate); $i++): ?>
                                                                <i class="fas fa-star"></i>
                                                            <?php endfor; ?>
                                                        </div>
                                                    </div>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="Rego-ft-last">
                                                    <span class="small"><?php echo e($data->created_at->diffForHumans()); ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                            <div class="col-12 text-center">
                                <h3 class="m-0"><?php echo e(__('No Directory Found')); ?></h3>
                            </div>
                        <?php endif; ?>

                    </div>
                    <!-- /row -->

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <?php if($listings->hasPages()): ?>
                                <?php echo e($listings->links()); ?>

                            <?php endif; ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ============================ Main Section End ================================== -->

    <!-- ============================ Call To Action ================================== -->
    <?php if ($__env->exists('partials.front.cta')) echo $__env->make('partials.front.cta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- ============================ Call To Action End ================================== -->

    <!-- ============================ Footer Start ================================== -->
    <?php echo $__env->make('partials.front.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- ============================ Footer End ================================== -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
    <script>
        'use strict';

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).on('click','.wishList',function(){
            let $this = $(this);
            let listingId = $(this).data('listing');
            let userId = $(this).data('user');
            if(userId == ''){
                window.location.href = mainurl+'/user/login'
            }

            $.ajax({
                method:"POST",
                url: mainurl+'/listing/wishlist',
                data: {
                    listing_id : listingId,
                    user_id : userId
                },
                success:function(data)
                {
                    if(data.success){
                        $this.children().prop('class','');
                        $this.children().prop('class','lni lni-heart-filled  position-absolute');
                        toastr.success(data.success);
                    }else{
                        $this.children().prop('class','');
                        $this.children().prop('class','lni lni-heart  position-absolute');
                        toastr.error(data.error);
                    }
                }

            });

        })

        $(document).on('click','.add-follow',function(){
            let $this = $(this);
            let listingId = $(this).data('listing');
            let ownerId = $(this).data('owner');
            let userId = $(this).data('user');
            if(userId == ''){
                window.location.href = mainurl+'/user/login'
            }

            $.ajax({
                method:"POST",
                url: mainurl+'/follow',
                data: {
                    listing_id : listingId,
                    owner_id : ownerId,
                    user_id : userId,
                },
                success:function(data)
                {
                    if(data.success) toastr.success(data.success);
                    else toastr.error(data.error);
                }

            });
        })
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\htdocs\geniuslisting\project\resources\views/frontend/author_details.blade.php ENDPATH**/ ?>