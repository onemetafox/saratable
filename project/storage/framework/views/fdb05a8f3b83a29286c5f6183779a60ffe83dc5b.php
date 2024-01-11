<?php $__env->startPush('css'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <?php if(in_array('Banner', $home_modules)): ?>
        <!-- ======================= Home Banner ======================== -->
        <div class="home-banner margin-bottom-0 gray">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="pe-3">
                            <div class="banner_caption text-left mb-4">
                                <h1 class="banner_title ft-normal mb-1"><span class="theme-cl ft-bold"><?php echo e($ps->hero_title); ?></h1>
                                <p class="fs-md ft-regular"><?php echo e($ps->hero_subtitle); ?></p>
                            </div>

                            <form class="main-search-wrap fl-wrap one-column" action="<?php echo e(route('front.listing')); ?>" method="GET">
                                <div class="main-search-item">
                                    <span class="search-tag"><?php echo app('translator')->get('Find'); ?></span>
                                    <input type="text" class="form-control radius" name="title" placeholder="<?php echo app('translator')->get('Nail salons, plumbers, takeout...'); ?>">
                                </div>
                                <div class="main-search-button">
                                    <button class="btn full-width theme-bg text-white" type="submit"><?php echo app('translator')->get('Search'); ?><i class="fas fa-search"></i></button>
                                </div>
                            </form>
                            <div class="Rego-over-cats-sty">
                                <h6 class="ft-bold mb-1"><?php echo app('translator')->get('Browse categories'); ?></h6>
                                <span class="small"><?php echo app('translator')->get('Get Popular Categories in Your City'); ?></span>
                                <ul>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li>
                                            <a href="<?php echo e(route('front.listing',['category' => $data->slug])); ?>" style="background-color: <?php echo e($data->bg_color); ?>">
                                                <i class="<?php echo e($data->icon); ?>"></i>
                                            </a>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-1 col-lg-1 col-md-12 col-sm-12 col-12 order-lg-3">
                        <div class="Rego-counter">
                            <ul>
                                <?php $__currentLoopData = $counters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><div class="Rego-ylp">
                                        <div class="Rego-ylp-first">
                                            <h3><span class="text-success count"><?php echo e($data->count); ?></span><?php echo e($data->messurement); ?></h3>
                                        </div>
                                        <div class="Rego-ylp-last">
                                            <span><?php echo e($data->title); ?></span>
                                        </div>
                                    </div>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                        <div class="list-tyuhn">
                            <img src="<?php echo e(asset('assets/images/'.$ps->hero_photo)); ?>" class="img-fluid" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ======================= Home Banner ======================== -->
    <?php endif; ?>

    <?php if(in_array('Feature Directory', $home_modules)): ?>
        <!-- ======================= All Listing ======================== -->
        <section class="space min">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="sec_title position-relative text-center mb-5">
                            <h6 class="theme-cl mb-0"><?php echo e($ps->directory_title); ?></h6>
                            <h2 class="ft-bold"><?php echo e($ps->directory_subtitle); ?></h2>
                        </div>
                    </div>
                </div>

                <!-- row -->
                <div class="row justify-content-center">
                    <?php $__currentLoopData = $featured_listing; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <!-- Single -->
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                            <div class="Rego-grid-wrap">
                                <div class="Rego-grid-upper">
                                    <div class="Rego-bookmark-btn">
                                        <button type="button" class="wishList" data-listing="<?php echo e($data->id); ?>" data-user=<?php echo e(auth()->id()); ?>>
                                            <i class="lni lni-heart<?php echo e($data->userFavourite(auth()->id(),$data->id) ? '-filled' : ''); ?> position-absolute"></i>
                                        </button>
                                    </div>

                                    <div class="Rego-pos ab-left">
                                        <div class="Rego-status open me-2"><?php echo e($data->openClose($data->id)); ?></div>
                                        <?php if($data->is_feature): ?>
                                            <div class="Rego-featured-tag"><?php echo app('translator')->get('Featured'); ?></div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="Rego-grid-thumb">
                                        <a href="<?php echo e(route('front.listing.details',$data->slug)); ?>" class="d-block text-center m-auto">
                                            <img src="<?php echo e(asset('assets/images/'.$data->photo)); ?>" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <?php if(count($data->reviews)>0): ?>
                                        <div class="Rego-rating overlay">
                                            <div class="Rego-pr-average high"><?php echo e($data->directoryRatting($data->id)); ?></div>
                                            <div class="Rego-aldeio">
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
                                                <div class="Rego-all-review"><span><?php echo e(count($data->reviews)); ?> <?php echo app('translator')->get('Reviews'); ?></span></div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="Rego-grid-fl-wrap">
                                    <div class="Rego-caption px-3 py-2">
                                        <div class="Rego-author">
                                            <?php if($data->user_id == NULL && $data->admin_id == NULL): ?>
                                                <a href="<?php echo e(route('front.author.details','admin')); ?>">
                                                    <img src="<?php echo e(asset('assets/images/'.getAdmin()->photo)); ?>" class="img-fluid circle" alt="">
                                                </a>
                                            <?php else: ?>
                                                <a href="<?php echo e(route('front.author.details',$data->user->username)); ?>">
                                                    <img src="<?php echo e(asset('assets/images/'.$data->user->photo)); ?>" class="img-fluid circle" alt="">
                                                </a>
                                            <?php endif; ?>
                                        </div>

                                        <div class="Rego-cates multi">
                                            <a href="<?php echo e(route('front.listing',['category' => $data->category->slug])); ?>" class="cats-2"><?php echo e($data->category->title); ?></a>
                                        </div>

                                        <h4 class="mb-0 ft-medium medium">
                                            <a href="<?php echo e(route('front.listing.details',$data->slug)); ?>" class="text-dark fs-md">
                                                <?php echo e($data->name); ?>

                                                <span class="verified-badge">
                                                    <i class="fas fa-check-circle"></i>
                                                </span>
                                            </a>
                                        </h4>

                                        <div class="Rego-middle-caption mt-2">
                                            <p><?php echo e(Str::limit($data->description,58)); ?></p>
                                            <div class="Rego-facilities-wrap mb-0">
                                                <div class="Rego-facility-title"><?php echo app('translator')->get('Facilities'); ?> :</div>
                                                <?php if($data->amenity_icons != NULL): ?>
                                                    <div class="Rego-facility-list">
                                                        <ul class="no-list-style">
                                                            <?php $__currentLoopData = json_decode($data->amenity_icons,true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$icon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php if($key<=4): ?>
                                                                    <li><i class="<?php echo e($icon); ?>"></i></li>
                                                                <?php endif; ?>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </ul>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="Rego-grid-footer py-2 px-3">
                                        <div class="Rego-ft-first">
                                            <div class="Rego-location">
                                                <i class="fas fa-map-marker-alt me-1 theme-cl"></i>
                                            <?php echo e($data->real_address); ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
                <!-- /row -->

            </div>
        </section>
        <!-- ======================= All Listings ======================== -->
    <?php endif; ?>

    <?php if(in_array('Category', $home_modules)): ?>
        <!-- ======================= Listing Categories ======================== -->
        <section class="space min gray">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="sec_title position-relative text-center mb-5">
                            <h6 class="mb-0 theme-cl">Popular Categories</h6>
                            <h2 class="ft-bold">Browse Top Categories</h2>
                        </div>
                    </div>
                </div>

                <!-- row -->
                <div class="row align-items-center">
                    <?php if($categories): ?>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                                <div class="cats-wrap text-center">
                                    <a href="<?php echo e(route('front.listing',['category' => [$category->slug]])); ?>" class="Rego-catg-wrap">
                                        <div class="Rego-catg-city"><?php echo e($category->listings->where('status',1)->count()); ?> <?php echo app('translator')->get('Listings'); ?></div>
                                        <div class="Rego-catg-icon"><i class="<?php echo e($category->icon); ?>"></i></div>
                                        <div class="Rego-catg-caption">
                                            <h4 class="fs-md mb-0 ft-medium m-catrio"><?php echo e($category->title); ?></h4>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>
                <!-- row -->

            </div>
        </section>
        <!-- ======================= Listing Categories End ======================== -->
    <?php endif; ?>

    <?php if(in_array('Location', $home_modules)): ?>
        <!-- ======================= Explore By Location ======================== -->
        <section class="space min">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="sec_title position-relative text-center mb-5">
                            <h6 class="theme-cl mb-0">Find By Location</h6>
                            <h2 class="ft-bold">Explore By <span class="theme-cl">Top Locations</span></h2>
                        </div>
                    </div>
                </div>

                <!-- row -->
                <div class="row justify-content-center">
                    <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="Rego-img-location-wrap">
                                <div class="Rego-img-location-thumb"><a href="<?php echo e(route('front.listing',['location' => $data->id])); ?>"><img src="<?php echo e(asset('assets/images/'.$data->photo)); ?>" class="img-fluid" alt=""></a></div>
                                <div class="Rego-img-location-caption">
                                    <h4 class="fs-md mb-0 ft-medium m-catrio"><?php echo e($data->name); ?></h4>
                                    <a href="<?php echo e(route('front.listing',['location' => $data->id])); ?>" class="Rego-cat-arrow"><i class="lni lni-arrow-right-circle"></i></a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
                <!-- /row -->

            </div>
        </section>
        <!-- ======================= Explore By Location ======================== -->
    <?php endif; ?>

    <?php if(in_array('Submit listing', $home_modules)): ?>
        <!-- ============================ Tag & Submit listing ============================= -->
        <section class="bg-cover text-center" style="background:#353535 url(<?php echo e(asset('assets/images/'.$ps->listing_photo)); ?>);" data-overlay="7">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-10 text-center">
                        <div class="sec-heading center">
                            <h2 class="text-light ft-bold"><?php echo e($ps->listing_title); ?></h2>
                            <h3 class="text-light ft-medium mb-4"><?php echo e($ps->listing_subtitle); ?></h3>
                            <p class="text-light mb-4">
                                <?php
                                    echo $ps->listing_details;
                                ?>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="counter-link">
                            <a href="<?php echo e(route('front.listing')); ?>" class="btn btn-md text-dark ft-medium btn-light"><?php echo app('translator')->get('Explore & Submit Listings'); ?></a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- ============================ Tag & Submit listing End ============================= -->
    <?php endif; ?>

    <?php if(in_array('Review', $home_modules)): ?>
        <!-- ======================= Customer Review ======================== -->
        <section class="space">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="sec_title position-relative text-center mb-5">
                            <h6 class="text-muted mb-0"><?php echo app('translator')->get('Our Reviews'); ?></h6>
                            <h2 class="ft-bold"><?php echo app('translator')->get('What Our Customer'); ?> <span class="theme-cl"><?php echo app('translator')->get('Saying'); ?></span></h2>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="reviews-slide">
                            <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <!-- single review -->
                                <div class="single-list">
                                    <div class="single_review">
                                        <div class="sng_rev_thumb"><figure><img src="<?php echo e(asset('assets/images/'.$data->photo)); ?>" class="img-fluid circle" alt="" /></figure></div>
                                        <div class="rev_author">
                                            <h4 class="mb-0 fs-md ft-medium"><?php echo e($data->title); ?></h4>
                                            <span class="fs-sm theme-cl"><?php echo e($data->subtitle); ?></span>
                                        </div>
                                        <div class="sng_rev_caption text-center">
                                            <div class="rev_desc mb-4">
                                                <p>
                                                    <?php
                                                        echo $data->details;
                                                    ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======================= Customer Review ======================== -->
    <?php endif; ?>

    <?php if(in_array('CTAs', $home_modules)): ?>
        <!-- ======================= Newsletter Start ============================ -->
        <?php echo $__env->make('partials.front.cta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- ======================= Newsletter Start ============================ -->
    <?php endif; ?>

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

    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\htdocs\geniuslisting\project\resources\views/frontend/theme/theme-4.blade.php ENDPATH**/ ?>