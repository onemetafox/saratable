<?php $__env->startPush('css'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <?php if(in_array('Banner', $home_modules)): ?>
        <!-- ======================= Home Banner ======================== -->
        <div class="home-banner margin-bottom-0" style="background:#f41b3b url(<?php echo e(asset('assets/images/'.$ps->hero_photo)); ?>) no-repeat;" data-overlay="1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-11 col-lg-12 col-md-12 col-sm-12 col-12">

                        <div class="banner_caption text-center mb-5">
                            <h1 class="banner_title ft-bold mb-1"><?php echo e($ps->hero_title); ?></h1>
                            <p class="fs-md ft-medium"><?php echo e($ps->hero_subtitle); ?></p>
                        </div>

                        <div class="Rego-top-cates">
                            <ul>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <a href="<?php echo e(route('front.listing',['category' => $data->slug])); ?>" class="Rego-top-cat-box">
                                            <div class="Rego-tp-ico">
                                                <i class="<?php echo e($data->icon); ?>"></i>
                                            </div>
                                            <div class="Rego-tp-title">
                                                <h5><?php echo e($data->name); ?></h5>
                                            </div>
                                        </a>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- ======================= Home Banner ======================== -->

        <!-- ======================= Home Search ======================== -->
        <section class="p-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-11 col-lg-12 col-md-12 col-12">

                        <div class="Rego-search-shadow">

                            <form class="main-search-wrap fl-wrap" action="<?php echo e(route('front.listing')); ?>" method="GET">
                                <div class="main-search-item">
                                    <span class="search-tag"><i class="lni lni-keyboard"></i></span>
                                    <input type="text" class="form-control radius"name="title"  placeholder="<?php echo app('translator')->get('What are you looking for'); ?>?" />
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
        </section>
        <!-- ======================= Home Search End ======================== -->
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

                <!-- row -->
                <div class="row align-items-center">
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

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
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

                                                            <div class="Rego-cates multi"><a href="<?php echo e(route('front.listing',['category' => $category->slug])); ?>" class="cats-2"><?php echo e($restaurant->category->title); ?></a></div>
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
                <!-- /row -->

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

    <?php if(in_array('Mission', $home_modules)): ?>
        <!-- ======================= Mission Start ============================ -->
        <section class="space">
            <div class="container">

                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="m-spaced">
                            <div class="position-relative">
                                <div class="mb-2"><span class="bg-light-sky text-sky px-2 py-1 rounded"><?php echo app('translator')->get('Our Mission'); ?></span></div>
                                <h2 class="ft-bold mb-3"><?php echo e($ps->mission_title); ?></h2>
                                <p class="mb-2"><?php echo e($ps->mission_text); ?></p>
                            </div>
                            <div class="position-relative row">
                                <?php $__currentLoopData = $counters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-lg-4 col-md-4 col-4">
                                        <h3 class="ft-bold text-sky mb-0"><span class="count"><?php echo e($data->count); ?></span><?php echo e($data->messurement); ?></h3>
                                        <p class="ft-medium"><?php echo e($data->title); ?></p>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
                        <div class="position-relative">
                            <img src="<?php echo e(asset('assets/images/'.$ps->mission_photo)); ?>" class="img-fluid" alt="" />
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- ======================= Mission Start ============================ -->
    <?php endif; ?>

    <?php if(in_array('Process', $home_modules)): ?>
        <!-- ======================= Process Start ============================ -->
        <section class="space pt-0">
            <div class="container">

                <div class="row align-items-center justify-content-between">

                    <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
                        <div class="position-relative">
                            <img src="<?php echo e(asset('assets/images/'.$ps->process_photo)); ?>" class="img-fluid" alt="" />
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="m-spaced">
                            <div class="position-relative">
                                <div class="mb-1"><span class="bg-light-success text-success px-2 py-1 rounded"><?php echo app('translator')->get('Process'); ?></span></div>
                                <h2 class="ft-bold mb-3"><?php echo e($ps->process_title); ?></h2>
                                <p class="mb-3"><?php echo e($ps->process_text); ?></p>
                            </div>
                            <div class="uli-list-features">
                                <ul>
                                    <?php $__currentLoopData = $accounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li>
                                            <div class="list-uiyt">
                                                <div class="list-iobk"><i class="<?php echo e($data->icon); ?>"></i></div>
                                                <div class="list-uiyt-capt">
                                                    <h5><?php echo e($data->title); ?></h5>
                                                    <p><?php echo $data->details; ?></p>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- ======================= Process Start ============================ -->
    <?php endif; ?>

    <?php if(in_array('Packages', $home_modules)): ?>
        <!-- ============================ Pricing Start ==================================== -->
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
                    <?php if(count($plans)>0): ?>
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
                                        <a class="Rego-price-btn" href="<?php echo e(route('user.package.subscription',$data->id)); ?>"><i class="fas fa-shopping-basket"></i> <?php echo app('translator')->get('Purchase Now'); ?></a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <!-- ============================ Pricing End ==================================== -->
    <?php endif; ?>

    <?php if(in_array('Blogs', $home_modules)): ?>
        <!-- ======================= Blog Start ============================ -->
        <section class="space min">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="sec_title position-relative text-center mb-4">
                            <h6 class="theme-cl mb-0"><?php echo e($ps->blog_title); ?></h6>
                            <h2 class="ft-bold"><?php echo e($ps->blog_subtitle); ?></h2>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <?php if(count($blogs)>0): ?>
                        <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <!-- Single Item -->
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                <div class="blg_grid_box">
                                    <div class="blg_grid_thumb">
                                        <a href="<?php echo e(route('blog.details',$blog->slug)); ?>">
                                            <img src="<?php echo e(asset('assets/images/'.$blog->photo)); ?>" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="blg_grid_caption">
                                        <div class="blg_tag">
                                            <span><?php echo e($blog->category->name); ?></span>
                                        </div>
                                        <div class="blg_title">
                                            <h4>
                                                <a href="<?php echo e(route('blog.details',$blog->slug)); ?>"><?php echo e($blog->title); ?></a>
                                            </h4>
                                        </div>
                                        <div class="blg_desc">

                                        </div>
                                    </div>
                                    <div class="crs_grid_foot">
                                        <div class="crs_flex d-flex align-items-center justify-content-between br-top px-3 py-2">
                                            <div class="crs_fl_first">
                                                <div class="crs_tutor">
                                                    <div class="crs_tutor_thumb">
                                                        <a href="javascript:void(0);">
                                                            <img src="<?php echo e(asset('assets/images/'.getAdmin()->photo)); ?>" class="img-fluid circle" width="35" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="crs_fl_last">
                                                <div class="foot_list_info">
                                                    <ul>
                                                        <li><div class="elsio_ic"><i class="fa fa-eye text-success"></i></div><div class="elsio_tx"><?php echo e($blog->views); ?> <?php echo app('translator')->get('Views'); ?></div></li>
                                                        <li><div class="elsio_ic"><i class="fa fa-clock text-warning"></i></div><div class="elsio_tx"><?php echo e($blog->created_at->format('d M Y')); ?></div></li>
                                                    </ul>
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
        </section>
        <!-- ======================= Blog Start ============================ -->
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

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\saratable\project\resources\views/frontend/theme/theme-5.blade.php ENDPATH**/ ?>