<?php $__env->startPush('css'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <!-- ============================ Page Title Start================================== -->
    <section class="page-title gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="breadcrumbs-wrap">
                        <h2 class="mb-0 ft-medium"><?php echo e($data->title); ?></h1>
                        <nav class="transparent">
                            <ol class="breadcrumb p-0">
                                <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>"><?php echo app('translator')->get('Home'); ?></a></li>
                                <li class="breadcrumb-item active theme-cl" aria-current="page"><?php echo app('translator')->get('Blog Details'); ?></li>
                            </ol>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ============================ Page Title End ================================== -->

    <!-- ============================ Blog Detail Start ================================== -->
    <section>
        <div class="container">
            <div class="row">

                <!-- Blog Detail -->
                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="article_detail_wrapss single_article_wrap format-standard">
                        <div class="article_body_wrap">

                            <div class="article_featured_image">
                                <img class="img-fluid" src="<?php echo e(asset('assets/images/'.$data->photo)); ?>" alt="">
                            </div>

                            <div class="article_top_info">
                                <ul class="article_middle_info">
                                    <li><a href="#"><span class="icons"><i class="ti-user"></i></span><?php echo e(getAdmin()->name); ?></a></li>
                                    <li><a href="#"><span class="icons"><i class="fa fa-eye"></i></span><?php echo e($data->views); ?> <?php echo app('translator')->get('Views'); ?></a></li>
                                </ul>
                            </div>
                            <?php
                                echo $data->details;
                            ?>
                        </div>
                    </div>


                    <!-- Blog Comment -->
                    <div class="article_detail_wrapss single_article_wrap format-standard">
                        <div class="comment-area">
                            <div id="disqus_thread"></div>
                        </div>
                    </div>


                </div>

                <!-- Single blog Grid -->
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">

                    <!-- Searchbard -->
                    <div class="single_widgets widget_search">
                        <h4 class="title"><?php echo app('translator')->get('Search'); ?></h4>
                        <form action="<?php echo e(route('front.blogsearch')); ?>" class="sidebar-search-form" method="get">
                            <input type="search" name="search" placeholder="<?php echo app('translator')->get('Search..'); ?>">
                            <button type="submit"><i class="ti-search"></i></button>
                        </form>
                    </div>

                    <!-- Categories -->
                    <div class="single_widgets widget_category">
                        <h4 class="title"><?php echo app('translator')->get('Categories'); ?></h4>
                        <ul>
                            <?php $__currentLoopData = $bcats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <a href="<?php echo e(route('front.blogcategory',$category->slug)); ?>"><?php echo e($category->name); ?>

                                        <span><?php echo e(count($category->blogs)); ?></span>
                                    </a>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>

                    <!-- Trending Posts -->
                    <div class="single_widgets widget_thumb_post">
                        <h4 class="title"><?php echo app('translator')->get('Recent Posts'); ?></h4>
                        <ul>
                            <?php $__currentLoopData = $rblogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <span class="left">
                                        <img src="<?php echo e(asset('assets/images/'.$data->photo)); ?>" alt="" class="">
                                    </span>
                                    <span class="right">
                                        <a class="feed-title" href="<?php echo e(route('blog.details',$data->slug)); ?>"><?php echo e(Str::limit($data->title,50)); ?></a>
                                        <span class="post-date"><i class="ti-calendar"></i><?php echo e($data->created_at->diffForHumans()); ?></span>
                                    </span>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>

                    <!-- Tags Cloud -->
                    <div class="single_widgets widget_tags">
                        <h4 class="title"><?php echo app('translator')->get('Tags'); ?></h4>
                        <ul>
                            <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(!empty($tag)): ?>
                                    <li>
                                        <a href="<?php echo e(route('front.blogtags',$tag)); ?>"><?php echo e($tag); ?></a>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>

                </div>

            </div>
            <!-- /row -->

        </div>

    </section>
    <!-- ============================ Blog Detail End ================================== -->

    <!-- ======================= Newsletter Start ============================ -->
        <?php echo $__env->make('partials.front.cta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- ======================= Newsletter Start ============================ -->

    <!-- ============================ Footer Start ================================== -->
    <?php echo $__env->make('partials.front.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- ============================ Footer End ================================== -->

<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
<?php if($gs->is_disqus == 1): ?>
<script>
	'use strict';
	(function () {
		var d = document,
		s = d.createElement('script');
		s.src = 'https://<?php echo e($gs->disqus); ?>.disqus.com/embed.js';
		s.setAttribute('data-timestamp', +new Date());
		(d.head || d.body).appendChild(s);
	})();
</script>
<noscript><?php echo e(__('Please enable JavaScript to view the')); ?> <a href="https://disqus.com/?ref_noscript"><?php echo e(__('comments powered by Disqus.')); ?></a></noscript>
<?php endif; ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\latest\listing\project\resources\views/frontend/blogdetails.blade.php ENDPATH**/ ?>