<?php $__env->startPush('css'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <?php if(in_array('Banner', $home_modules)): ?>
        <!-- ======================= Home Banner ======================== -->
        <div class="home-banner margin-bottom-0" style="background:#f41b3b url(<?php echo e(asset('assets/images/'.$ps->hero_photo)); ?>) no-repeat;" data-overlay="5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-11 col-lg-12 col-md-12 col-sm-12 col-12">

                        <div class="banner_caption text-center mb-5">
                            <h1 class="banner_title ft-bold mb-1"><?php echo e($ps->hero_title); ?></h1>
                            <p class="fs-md ft-medium"><?php echo e($ps->hero_subtitle); ?></p>
                        </div>

                        <form class="main-search-wrap fl-wrap" action="<?php echo e(route('front.listing')); ?>" method="GET">
                            <div class="main-search-item">
                                <span class="search-tag"><i class="lni lni-keyboard"></i></span>
                                <input type="text" class="form-control radius" name="title" placeholder="<?php echo app('translator')->get('Nail salons, plumbers, takeout...'); ?>" />
                            </div>
                            <div class="main-search-item">
                                <span class="search-tag"><i class="lni lni-map-marker"></i></span>
                                <input type="text" class="form-control" name="real_address" placeholder="<?php echo app('translator')->get('San Francisco, CA'); ?>" />
                            </div>
                            <div class="main-search-item">
                                <span class="search-tag"><i class="lni lni-briefcase"></i></span>
                                <select class="form-control" name="category[]">
                                    <option value=""><?php echo app('translator')->get('Choose Categories'); ?></option>
                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($category->slug); ?>"><?php echo e($category->title); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="main-search-button">
                                <button class="btn full-width theme-bg text-white" type="submit"><?php echo app('translator')->get('Search'); ?></button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- ======================= Home Banner ======================== -->
    <?php endif; ?>

    <?php if(in_array('Partners', $home_modules)): ?>
        <!-- ======================= Our Partner Start ============================ -->
        <section class="gray">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-7 col-md-9 col-sm-12">
                        <div class="sec_title position-relative text-center mb-5">
                            <h6 class="text-muted mb-0"><?php echo e($ps->partner_title); ?></h6>
                            <h2 class="ft-bold"><?php echo e($ps->partner_subtitle); ?></h2>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <?php $__currentLoopData = $partners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                            <div class="empl-thumb text-center px-3 py-4">
                                <img src="<?php echo e(asset('assets/images/'.$data->photo)); ?>" class="img-fluid mx-auto" alt="" />
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

            </div>
        </section>
        <!-- ======================= Our Partner Start ============================ -->
    <?php endif; ?>

    <?php if(in_array('Feature Directory', $home_modules)): ?>
        <!-- ======================= All Types Listing ======================== -->
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

                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <ul class="nav nav-tabs small-tab mb-3" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="restaurants-tab" data-bs-toggle="tab" data-bs-target="#restaurants" type="button" role="tab" aria-controls="restaurants" aria-selected="true"><?php echo app('translator')->get('Restaurant'); ?></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="hotels-tab" data-bs-toggle="tab" data-bs-target="#hotels" type="button" role="tab" aria-controls="hotels" aria-selected="false"><?php echo app('translator')->get('Hotel'); ?></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="beauty-tab" data-bs-toggle="tab" data-bs-target="#beauty" type="button" role="tab" aria-controls="beauty" aria-selected="false"><?php echo app('translator')->get('Beauty'); ?></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="real-tab" data-bs-toggle="tab" data-bs-target="#real" type="button" role="tab" aria-controls="real_estate" aria-selected="true"><?php echo app('translator')->get('Real estate'); ?></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="doctor-tab" data-bs-toggle="tab" data-bs-target="#doctor" type="button" role="tab" aria-controls="doctor" aria-selected="false"><?php echo app('translator')->get('Doctor'); ?></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="car-tab" data-bs-toggle="tab" data-bs-target="#car" type="button" role="tab" aria-controls="car" aria-selected="false"><?php echo app('translator')->get('Car'); ?></button>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="row justify-content-center">

                    <div class="tab-content" id="myTabContent">

                        <!-- Restaurant -->
                        <div class="tab-pane fade show active" id="restaurants" role="tabpanel" aria-labelledby="restaurants-tab">
                            <div class="row justify-content-center">
                                <?php if(count($resturant_listings)>0): ?>
                                    <?php $__currentLoopData = $resturant_listings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $restaurant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                            <div class="Rego-grid-wrap">
                                                <div class="Rego-grid-upper">
                                                    <div class="Rego-bookmark-btn">
                                                        <button type="button" class="wishList" data-listing="<?php echo e($restaurant->id); ?>" data-user=<?php echo e(auth()->id()); ?>>
                                                            <i class="lni lni-heart<?php echo e($restaurant->userFavourite(auth()->id(),$restaurant->id) ? '-filled' : ''); ?> position-absolute"></i>
                                                        </button>
                                                    </div>
                                                    <div class="Rego-pos ab-left">
                                                        <div class="Rego-status close me-2"><?php echo e($restaurant->openClose($restaurant->id)); ?></div>
                                                    </div>
                                                    <div class="Rego-grid-thumb">
                                                        <a href="<?php echo e(route('front.listing.details',$restaurant->slug)); ?>" class="d-block text-center m-auto">
                                                            <img src="<?php echo e(asset('assets/images/'.$restaurant->photo)); ?>" class="img-fluid" alt="">
                                                        </a>
                                                    </div>
                                                    <?php if(count($restaurant->reviews)>0): ?>
                                                        <div class="Rego-rating overlay">
                                                            <div class="Rego-pr-average high"><?php echo e($restaurant->directoryRatting($restaurant->id)); ?></div>
                                                            <div class="Rego-aldeio">
                                                                <div class="Rego-rates">
                                                                    <?php
                                                                        $rate = ceil($restaurant->directoryRatting($restaurant->id));
                                                                    ?>

                                                                    <?php for($i=1; $i<=$rate; $i++): ?>
                                                                        <i class="fas fa-star active"></i>
                                                                    <?php endfor; ?>

                                                                    <?php for($i=1; $i<=(5-$rate); $i++): ?>
                                                                        <i class="fas fa-star"></i>
                                                                    <?php endfor; ?>
                                                                </div>
                                                                <div class="Rego-all-review"><span><?php echo e(count($restaurant->reviews)); ?> <?php echo app('translator')->get('Reviews'); ?></span></div>
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="Rego-grid-fl-wrap">
                                                    <div class="Rego-caption px-3 py-2">
                                                        <div class="Rego-author">
                                                            <?php if($restaurant->user_id == NULL && $restaurant->admin_id == NULL): ?>
                                                                <a href="<?php echo e(route('front.author.details','admin')); ?>">
                                                                    <img src="<?php echo e(asset('assets/images/'.getAdmin()->photo)); ?>" class="img-fluid circle" alt="">
                                                                </a>
                                                            <?php else: ?>
                                                                <a href="<?php echo e(route('front.author.details',$restaurant->user->username)); ?>">
                                                                    <img src="<?php echo e(asset('assets/images/'.$restaurant->user->photo)); ?>" class="img-fluid circle" alt="">
                                                                </a>
                                                            <?php endif; ?>
                                                        </div>

                                                        <div class="Rego-cates multi">
                                                            <a href="<?php echo e(route('front.listing',['category' => $restaurant->category->slug])); ?>" class="cats-2"><?php echo e($restaurant->category->title); ?></a>
                                                        </div>

                                                        <h4 class="mb-0 ft-medium medium">
                                                            <a href="<?php echo e(route('front.listing.details',$restaurant->slug)); ?>" class="text-dark fs-md">
                                                                <?php echo e($restaurant->name); ?>

                                                                <span class="verified-badge">
                                                                    <i class="fas fa-check-circle"></i>
                                                                </span>
                                                            </a>
                                                        </h4>
                                                        <div class="Rego-middle-caption mt-3">
                                                            <div class="Rego-location"><i class="fas fa-map-marker-alt"></i><?php echo e($restaurant->real_address); ?></div>
                                                            <div class="Rego-call"><i class="fas fa-phone-alt"></i><?php echo e($restaurant->phone_number); ?></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>

                            </div>
                        </div>
                        <!-- /Places -->

                        <!-- Hotels -->
                        <div class="tab-pane fade" id="hotels" role="tabpanel" aria-labelledby="hotels-tab">
                            <div class="row justify-content-center">
                                <?php if(count($hotel_listings)>0): ?>
                                    <?php $__currentLoopData = $hotel_listings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $hotel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <!-- Single -->
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                            <div class="Rego-grid-wrap">
                                                <div class="Rego-grid-upper">
                                                    <div class="Rego-bookmark-btn">
                                                        <button type="button" class="wishList" data-listing="<?php echo e($hotel->id); ?>" data-user=<?php echo e(auth()->id()); ?>>
                                                            <i class="lni lni-heart<?php echo e($hotel->userFavourite(auth()->id(),$hotel->id) ? '-filled' : ''); ?> position-absolute"></i>
                                                        </button>
                                                    </div>
                                                    <?php if($hotel->is_featured): ?>
                                                        <div class="Rego-pos ab-left">
                                                            <div class="Rego-featured-tag"><?php echo app('translator')->get('Featured'); ?></div>
                                                        </div>
                                                    <?php endif; ?>
                                                    <div class="Rego-grid-thumb">
                                                        <a href="<?php echo e(route('front.listing.details',$hotel->slug)); ?>" class="d-block text-center m-auto"><img src="<?php echo e(asset('assets/images/'.$hotel->photo)); ?>" class="img-fluid" alt=""></a>
                                                    </div>
                                                    <?php if(count($hotel->reviews)>0): ?>
                                                        <div class="Rego-rating overlay">
                                                            <div class="Rego-pr-average high"><?php echo e($hotel->directoryRatting($hotel->id)); ?></div>
                                                            <div class="Rego-aldeio">
                                                                <div class="Rego-rates">
                                                                    <?php
                                                                        $rate = ceil($hotel->directoryRatting($hotel->id));
                                                                    ?>

                                                                    <?php for($i=1; $i<=$rate; $i++): ?>
                                                                        <i class="fas fa-star active"></i>
                                                                    <?php endfor; ?>

                                                                    <?php for($i=1; $i<=(5-$rate); $i++): ?>
                                                                        <i class="fas fa-star"></i>
                                                                    <?php endfor; ?>
                                                                </div>
                                                                <div class="Rego-all-review"><span><?php echo e(count($hotel->reviews)); ?> <?php echo app('translator')->get('Reviews'); ?></span></div>
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="Rego-grid-fl-wrap">
                                                    <div class="Rego-caption px-3 py-2">
                                                        <h4 class="mb-0 ft-medium medium mb-0"><a href="<?php echo e(route('front.listing.details',$hotel->slug)); ?>" class="text-dark fs-md"><?php echo e($hotel->name); ?><span class="verified-badge"><i class="fas fa-check-circle"></i></span></a></h4>

                                                        <div class="Rego-middle-caption mt-3">
                                                            <div class="Rego-location"><i class="fas fa-map-marker-alt"></i><?php echo e($hotel->real_address); ?></div>
                                                            <div class="Rego-call"><i class="fas fa-phone-alt"></i><?php echo e($hotel->phone_number); ?></div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>

                            </div>
                        </div>
                        <!-- /Hotels -->

                        <!-- Beauty -->
                        <div class="tab-pane fade" id="beauty" role="tabpanel" aria-labelledby="beauty-tab">
                            <div class="row justify-content-center">
                                <?php if(count($beauty_listings)>0): ?>
                                    <?php $__currentLoopData = $beauty_listings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $beauty): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <!-- Single -->
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                            <div class="Rego-grid-wrap">
                                                <div class="Rego-grid-upper">
                                                    <div class="Rego-bookmark-btn">
                                                        <button type="button" class="wishList" data-listing="<?php echo e($beauty->id); ?>" data-user=<?php echo e(auth()->id()); ?>>
                                                            <i class="lni lni-heart<?php echo e($beauty->userFavourite(auth()->id(),$beauty->id) ? '-filled' : ''); ?> position-absolute"></i>
                                                        </button>
                                                    </div>
                                                    <div class="Rego-grid-thumb">
                                                        <a href="<?php echo e(route('front.listing.details',$beauty->slug)); ?>" class="d-block text-center m-auto"><img src="<?php echo e(asset('assets/images/'.$beauty->photo)); ?>" class="img-fluid" alt=""></a>
                                                    </div>
                                                    <div class="Rego-overlay-caps">
                                                        <h4 class="mb-0 ft-medium medium"><a href="<?php echo e(route('front.listing.details',$beauty->slug)); ?>" class="text-white fs-md"><?php echo e($beauty->name); ?></a></h4>
                                                        <div class="Rego-location text-white"><i class="fas fa-map-marker-alt me-1"></i><?php echo e($beauty->real_address); ?></div>
                                                    </div>
                                                </div>
                                                <div class="Rego-grid-fl-wrap">
                                                    <div class="Rego-grid-footer py-3 px-3">
                                                        <div class="Rego-ft-first">
                                                            <div class="Rego-catsin">
                                                                <?php echo e($beauty->category->title); ?>

                                                            </div>
                                                        </div>
                                                        <div class="Rego-ft-last">
                                                            <span class="small">

                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>

                            </div>
                        </div>
                        <!-- /Beauty -->

                        <!-- Real -->
                        <div class="tab-pane fade" id="real" role="tabpanel" aria-labelledby="real-tab">
                            <div class="row justify-content-center">
                                <?php if(count($real_listings)>0): ?>
                                    <?php $__currentLoopData = $real_listings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $real): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <!-- Single -->
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                            <div class="Rego-grid-wrap">
                                                <div class="Rego-grid-upper">
                                                    <div class="Rego-bookmark-btn">
                                                        <button type="button" class="wishList" data-listing="<?php echo e($real->id); ?>" data-user=<?php echo e(auth()->id()); ?>>
                                                            <i class="lni lni-heart<?php echo e($real->userFavourite(auth()->id(),$real->id) ? '-filled' : ''); ?> position-absolute"></i>
                                                        </button>
                                                    </div>
                                                    <div class="Rego-pos ab-left">
                                                        <div class="Rego-status open me-2"><?php echo e($real->r_property_type); ?></div>
                                                        <?php if($real->is_featured): ?>
                                                            <div class="Rego-featured-tag"><?php echo app('translator')->get('Featured'); ?></div>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="Rego-grid-thumb">
                                                        <a href="<?php echo e(route('front.listing.details',$real->slug)); ?>" class="d-block text-center m-auto"><img src="<?php echo e(asset('assets/images/'.$real->photo)); ?>" class="img-fluid" alt=""></a>
                                                    </div>
                                                    <div class="Rego-rating overlay">
                                                        <div class="Rego-prt-price"><span><?php echo e(showSignAmount($real->r_price)); ?></span></div>
                                                    </div>
                                                </div>
                                                <div class="Rego-grid-fl-wrap">
                                                    <div class="Rego-caption px-3 py-2">
                                                        <div class="Rego-author">
                                                            <?php if($real->user_id == NULL && $real->admin_id == NULL): ?>
                                                                <a href="<?php echo e(route('front.author.details','admin')); ?>">
                                                                    <img src="<?php echo e(asset('assets/images/'.getAdmin()->photo)); ?>" class="img-fluid circle" alt="">
                                                                </a>
                                                            <?php else: ?>
                                                                <a href="<?php echo e(route('front.author.details',$real->user->username)); ?>">
                                                                    <img src="<?php echo e(asset('assets/images/'.$real->user->photo)); ?>" class="img-fluid circle" alt="">
                                                                </a>
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="Rego-cates multi">
                                                            <?php if($real->reviews->count()>0): ?>
                                                                <span class="Rego-apr-rates">
                                                                    <i class="fas fa-star"></i>
                                                                <?php echo e($real->reviews->count()); ?>

                                                                </span>
                                                            <?php endif; ?>
                                                            <a href="<?php echo e(route('front.listing',['category' => $category->slug])); ?>" class="cats-1"><?php echo e($real->category->title); ?></a>
                                                        </div>
                                                        <h4 class="mb-0 ft-medium medium"><a href="<?php echo e(route('front.listing.details',$real->slug)); ?>" class="text-dark fs-md"><?php echo e($real->real_address); ?><span class="verified-badge"><i class="fas fa-check-circle"></i></span></a></h4>
                                                        <div class="Rego-middle-caption mt-2">
                                                            <div class="Rego-options-list">
                                                                <ul class="no-list-style">
                                                                    <li><i class="fas fa-bed"></i><span><?php echo e($real->r_bed); ?> <?php echo app('translator')->get('Beds'); ?></span></li>
                                                                    <li><i class="fas fa-bath"></i><span><?php echo e($real->r_baths); ?> <?php echo app('translator')->get('Baths'); ?></span></li>
                                                                    <li><i class="fas fa-clone"></i><span><?php echo e($real->r_square); ?> <?php echo app('translator')->get('sqft'); ?></span></li>
                                                                    <li><i class="fas fa-calendar"></i><span><?php echo e($real->created_at->diffForHumans()); ?> <?php echo app('translator')->get('Days Ago'); ?></span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="Rego-grid-footer py-2 px-3">
                                                        <div class="Rego-ft-first">
                                                            <div class="Rego-location"><i class="fas fa-map-marker-alt me-1 theme-cl"></i>San Francisco, USA</div>
                                                        </div>
                                                        <div class="Rego-ft-last">
                                                            <div class="Rego-inline">
                                                                <div class="Rego-bookmark-btn"><button type="button"><i class="lni lni-envelope position-absolute"></i></button></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>

                            </div>
                        </div>
                        <!-- /Real -->

                        <!-- Doctor -->
                        <div class="tab-pane fade" id="doctor" role="tabpanel" aria-labelledby="doctor-tab">
                            <div class="row justify-content-center">
                                <?php if(count($doctors_listings)>0): ?>
                                    <?php $__currentLoopData = $doctors_listings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <!-- Single -->
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                            <div class="doctor-grid-view">
                                                <div class="doctor-grid-thumb">
                                                    <a href="<?php echo e(route('front.listing.details',$doctor->slug)); ?>"><img src="<?php echo e(asset('assets/images/'.$doctor->photo)); ?>" class="img-fluid" alt=""></a>
                                                </div>

                                                <div class="doctor-grid-caption">
                                                    <div class="doc-title-wrap"><h4 class="doc-title verified"><a href="<?php echo e(route('front.listing.details',$doctor->slug)); ?>"><?php echo e($doctor->name); ?></a></h4></div>
                                                    <span class="doc-designation"><?php echo e($doctor->designation); ?></span>

                                                    <div class="doc-inner-wrap">
                                                        <?php if(count($doctor->reviews)>0): ?>
                                                            <div class="doc-ratting-boxes">
                                                                <ul class="doc ratting-view">
                                                                    <?php
                                                                        $rate = ceil($restaurant->directoryRatting($doctor->id));
                                                                    ?>

                                                                    <?php for($i=1; $i<=$rate; $i++): ?>
                                                                        <li><i class="fas fa-star filled"></i></li>
                                                                    <?php endfor; ?>

                                                                    <?php for($i=1; $i<=(5-$rate); $i++): ?>
                                                                        <li><i class="fas fa-star"></i></li>
                                                                    <?php endfor; ?>

                                                                </ul>
                                                                <span class="doctor-review-list">(<?php echo e(count($doctor->reviews)); ?> <?php echo app('translator')->get('Reviews'); ?>)</span>
                                                            </div>
                                                        <?php endif; ?>
                                                        <div class="doc-location"><i class="fas fa-map-marker-alt me-1 theme-cl"></i><?php echo e($doctor->real_address); ?></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <!-- /Doctor -->

                        <!-- car -->
                        <div class="tab-pane fade" id="car" role="tabpanel" aria-labelledby="car-tab">
                            <div class="row justify-content-center">
                                <?php if(count($cars_listings)>0): ?>
                                    <?php $__currentLoopData = $cars_listings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <!-- Single -->
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                            <div class="Rego-grid-wrap">
                                                <div class="Rego-grid-upper">
                                                    <div class="Rego-bookmark-btn">
                                                        <button type="button" class="wishList" data-listing="<?php echo e($car->id); ?>" data-user=<?php echo e(auth()->id()); ?>>
                                                            <i class="lni lni-heart<?php echo e($car->userFavourite(auth()->id(),$car->id) ? '-filled' : ''); ?> position-absolute"></i>
                                                        </button>
                                                    </div>
                                                    <div class="Rego-pos ab-left">
                                                        <div class="Rego-featured-tag">Featured</div>
                                                    </div>
                                                    <div class="Rego-grid-thumb">
                                                        <a href="<?php echo e(route('front.listing.details',$car->slug)); ?>" class="d-block text-center m-auto"><img src="<?php echo e(asset('assets/images/'.$car->photo)); ?>" class="img-fluid" alt=""></a>
                                                    </div>
                                                    <div class="Rego-rating overlay">
                                                        <div class="Rego-prt-price"><span><?php echo e(showSignAmount($car->car_price)); ?></span></div>
                                                    </div>
                                                </div>
                                                <div class="Rego-grid-fl-wrap">
                                                    <div class="Rego-caption px-3 py-2">
                                                        <div class="Rego-cates multi"><a href="<?php echo e(route('front.listing',['category' => $category->slug])); ?>" class="cats-1"><?php echo e($car->category->title); ?></a></div>
                                                        <h4 class="mb-0 ft-medium medium"><a href="<?php echo e(route('front.listing.details',$car->slug)); ?>" class="text-dark fs-md"><?php echo e($car->name); ?></a></h4>
                                                        <div class="Rego-middle-caption mt-2">
                                                            <div class="Rego-options-list">
                                                                <ul class="no-list-style">
                                                                    <li><i class="fas fa-gas-pump"></i><span><?php echo e($car->car_fuel_type); ?></span></li>
                                                                    <li><i class="far fa-calendar-alt"></i><span><?php echo e($car->car_manufacture_year); ?></span></li>
                                                                    <li><i class="fas fa-blender-phone"></i><span><?php echo e($car->car_mileage); ?></span></li>
                                                                    <li><i class="fab fa-accusoft"></i><span><?php echo e($car->car_engine_capacity); ?></span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="Rego-grid-footer py-2 px-3">
                                                        <div class="Rego-ft-first">
                                                            <div class="Rego-location"><i class="fas fa-map-marker-alt me-1 theme-cl"></i><?php echo e($car->real_address); ?></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>

                            </div>
                        </div>
                        <!-- /car -->

                    </div>

                </div>

            </div>
        </section>
        <!-- ======================= All Types Listing ======================== -->
    <?php endif; ?>

    <?php if(in_array('Category', $home_modules)): ?>
        <!-- ======================= Listing Categories ======================== -->
        <section class="space min gray">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="sec_title position-relative text-center mb-5">
                            <h6 class="mb-0 theme-cl"><?php echo e($ps->category_title); ?></h6>
                            <h2 class="ft-bold"><?php echo e($ps->category_subtitle); ?></h2>
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

    <?php if(in_array('Space', $home_modules)): ?>
        <!-- ============================ Boo Your Room ============================= -->
        <section class="space min">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="sec_title position-relative text-center mb-5">
                            <h6 class="mb-0 theme-cl">Book Your Space</h6>
                            <h2 class="ft-bold">Book Your Room in California</h2>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <?php $__currentLoopData = $room_listings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <!-- Single -->
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                            <div class="Rego-grid-wrap">
                                <div class="Rego-grid-upper">
                                    <div class="Rego-bookmark-btn">
                                        <button type="button" class="wishList" data-listing="<?php echo e($data->id); ?>" data-user=<?php echo e(auth()->id()); ?>>
                                            <i class="lni lni-heart<?php echo e($data->userFavourite(auth()->id(),$data->id) ? '-filled' : ''); ?> position-absolute"></i>
                                        </button>
                                    </div>

                                    <?php if($data->is_feature): ?>
                                        <div class="Rego-pos ab-left">
                                            <div class="Rego-featured-tag"><?php echo app('translator')->get('Featured'); ?></div>
                                        </div>
                                    <?php endif; ?>

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

                                        <h4 class="mb-0 ft-medium medium mb-0">
                                            <a href="<?php echo e(route('front.listing.details',$data->slug)); ?>" class="text-dark fs-md">
                                                <?php echo e($data->name); ?>

                                                <span class="verified-badge">
                                                    <i class="fas fa-check-circle"></i>
                                                </span>
                                            </a>
                                        </h4>

                                        <div class="Rego-distance"><?php echo e($data->distance); ?></div>

                                        <div class="Rego-middle-caption mt-3">
                                            <?php if($data->amenity_icons != NULL): ?>
                                                <div class="Rego-facilities-wrap Rego-flx mb-0">
                                                    <div class="Rego-facility-list">
                                                        <ul class="no-list-style">
                                                            <?php $__currentLoopData = json_decode($data->amenity_icons,true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$icon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <li><i class="<?php echo e($icon); ?>"></i></li>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                            <div class="Rego-booking-button">
                                                <a href="<?php echo e(route('front.listing.details',$data->slug)); ?>" class="Rego-btn-book"><?php echo app('translator')->get('Book Now'); ?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>

            </div>
        </section>
        <!-- ============================ Boo Your Room End ============================= -->
    <?php endif; ?>

    <?php if(in_array('Submit listing', $home_modules)): ?>
        <!-- ============================ Tag & Submit listing ============================= -->
        <section class="bg-cover text-center" style="background:#353535 url(<?php echo e(asset('assets/images/'.$gs->theme3_hero)); ?>);" data-overlay="7">
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

    <?php if(in_array('Author', $home_modules)): ?>
        <!-- ============================ Top Author Lists ============================= -->
        <section>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="sec_title position-relative text-center mb-5">
                            <h6 class="mb-0 theme-cl">Featured Authors</h6>
                            <h2 class="ft-bold">Meet Top Authors in Las Vegas</h2>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">

                        <div class="slide_items">
                            <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="single-list">
                                    <div class="Rego-author-wrap">
                                        <div class="Rego-author-lists"><?php echo e(count($author->listings)); ?> <?php echo app('translator')->get('Listings'); ?></div>
                                        <div class="Rego-author-thumb">
                                            <a href="<?php echo e(route('front.author.details',$author->username)); ?>">
                                                <img src="<?php echo e(asset('assets/images/'.$author->photo )); ?>" class="img-fluid circle" alt="">
                                            </a>
                                        </div>
                                        <div class="Rego-author-caption">
                                            <h4 class="fs-md mb-0 ft-medium m-catrio">
                                                <a href="<?php echo e(route('front.author.details',$author->username)); ?>"><?php echo e($author->name); ?></a>
                                            </h4>
                                            <div class="Rego-location"><i class="fas fa-map-marker-alt me-1 theme-cl"></i><?php echo e($author->address); ?></div>
                                        </div>
                                        <div class="Rego-author-links">
                                            <ul class="Rego-social">
                                                <li>
                                                    <a href="<?php echo e($author->fb_link); ?>">
                                                        <i class="lni lni-facebook-filled"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="<?php echo e($author->linkedin_link); ?>">
                                                        <i class="lni lni-linkedin-original"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="<?php echo e($author->twitter_link); ?>">
                                                        <i class="lni lni-twitter-original"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="<?php echo e($author->instagram_link); ?>">
                                                        <i class="lni lni-instagram-original"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>

                    </div>
                </div>

            </div>
        </section>
        <!-- ============================ Top Author Lists End ============================= -->
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

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\htdocs\geniuslisting\project\resources\views/frontend/theme/theme-3.blade.php ENDPATH**/ ?>