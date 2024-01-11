    <!-- Room Booking -->
    <div class="jb-apply-form bg-white rounded py-4 px-4 border mb-4">
        <h4 class="ft-bold mb-1"><?php echo app('translator')->get('Book a room'); ?></h4>

        <form action="<?php echo e(route('user.booking.store')); ?>" method="post">
            <?php echo csrf_field(); ?>

            <input type="hidden" name="listing_id" value="<?php echo e($data->id); ?>">
            <input type="hidden" name="listing_owner_id" value="<?php echo e($data->user_id != NULL ? $data->user_id : 0); ?>">
            <input type="hidden" name="owner_type" value="<?php echo e($data->user_id != NULL ? 'user' : 'admin'); ?>">
            <input type="hidden" name="type" value="hotel">

            <div class="Rego-boo-space mt-3">
                <div class="row">

                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                        <div class="form-group mb-3">
                            <label class="ft-medium small mb-1"><?php echo app('translator')->get('Check In'); ?></label>
                            <div class="cld-box">
                                <i class="ti-calendar"></i>
                                <input type="text" name="checkin" class="form-control" value="<?php echo e(now()->format('m/d/Y')); ?>" placeholder="<?php echo app('translator')->get('Check In'); ?>" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                        <div class="form-group mb-3">
                            <label class="ft-medium small mb-1"><?php echo app('translator')->get('Check Out'); ?></label>
                            <div class="cld-box">
                                <i class="ti-calendar"></i>
                                <input type="text" name="checkout" class="form-control" value="<?php echo e(now()->format('m/d/Y')); ?>" placeholder="<?php echo app('translator')->get('Check Out'); ?>" autocomplete="off">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                        <div class="form-group mb-3">
                            <div class="guests">
                            <label class="ft-medium small mb-1"><?php echo app('translator')->get('Adults'); ?></label>
                            <div class="guests-box">
                                <button class="counter-btn restaurantDec" type="button" id="cnt-down"><i class="ti-minus"></i></button>
                                <input type="text" id="guestNo" name="adults" value="2">
                                <button class="counter-btn restaurantInc" type="button" id="cnt-up"><i class="ti-plus"></i></button>
                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                        <div class="form-group mb-3">
                            <div class="guests">
                            <label class="ft-medium small mb-1"><?php echo app('translator')->get('Kids'); ?></label>
                            <div class="guests-box">
                                <button class="counter-btn" type="button" id="kcnt-down"><i class="ti-minus"></i></button>
                                <input type="text" id="kidsNo" name="kids" value="0">
                                <button class="counter-btn" type="button" id="kcnt-up"><i class="ti-plus"></i></button>
                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group mb-3">
                            <label class="ft-medium small mb-1"><?php echo app('translator')->get('Room Type'); ?></label>
                            <select class="border form-control rounded ps-3" name="room_type">
                                <option value="executive"><?php echo app('translator')->get('Executive room'); ?></option>
                                <option value="standard"><?php echo app('translator')->get('Standard room'); ?></option>
                            </select>
                        </div>
                    </div>


                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <button type="submit" class="btn text-light rounded full-width theme-bg ft-medium"><?php echo app('translator')->get('Submit'); ?></button>
                    </div>
                </div>
            </div>
        </form>
    </div>

<?php /**PATH C:\wamp\htdocs\geniuslisting\project\resources\views/partials/front/listing/hotel.blade.php ENDPATH**/ ?>