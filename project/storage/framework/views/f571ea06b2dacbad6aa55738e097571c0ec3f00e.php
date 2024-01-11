<?php if(isset($data)): ?>
    <div class="row">
        <div class="col-lg-3">
            <div class="left-area">
                <h4 class="heading"><?php echo e(__('Property Price')); ?></h4>
            </div>
        </div>

        <div class="col-lg-9">
            <input type="number" min="0" class="input-field" name="r_price" placeholder="<?php echo e(__('Price')); ?>" value="<?php echo e($data->r_price); ?>">
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <div class="left-area">
                <h4 class="heading"><?php echo e(__('No. Bed')); ?></h4>
            </div>
        </div>

        <div class="col-lg-9">
            <input type="number" min="0" class="input-field" name="r_bed" placeholder="<?php echo e(__('Example: 3')); ?>" value="<?php echo e($data->r_bed); ?>">
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <div class="left-area">
                <h4 class="heading"><?php echo e(__('No. Bathrooms')); ?></h4>
            </div>
        </div>

        <div class="col-lg-9">
            <input type="number" min="0" class="input-field" name="r_baths" placeholder="<?php echo e(__('Example: 1')); ?>" value="<?php echo e($data->r_baths); ?>">
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <div class="left-area">
                <h4 class="heading"><?php echo e(__('Square Feet')); ?></h4>
            </div>
        </div>

        <div class="col-lg-9">
            <input type="number" min="0" class="input-field" name="r_square" placeholder="<?php echo e(__('Example: 1200 sqrt')); ?>" value="<?php echo e($data->r_square); ?>">
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <div class="left-area">
                <h4 class="heading"><?php echo e(__('Property Type')); ?></h4>
            </div>
        </div>
        <div class="col-lg-9">
            <select name="r_property_type" class="input-field">
                <option value="buy" <?php echo e($data->r_property_type == 'buy' ? 'selected' : ''); ?>><?php echo e(__('Buy')); ?></option>
                <option value="rent" <?php echo e($data->r_property_type == 'rent' ? 'selected' : ''); ?>><?php echo e(__('Rent')); ?></option>
            </select>
        </div>
    </div>
<?php else: ?>
    <div class="row">
        <div class="col-lg-3">
            <div class="left-area">
                <h4 class="heading"><?php echo e(__('Property Price')); ?></h4>
            </div>
        </div>

        <div class="col-lg-9">
            <input type="number" min="0" class="input-field" name="r_price" placeholder="<?php echo e(__('Price')); ?>">
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <div class="left-area">
                <h4 class="heading"><?php echo e(__('No. Bed')); ?></h4>
            </div>
        </div>

        <div class="col-lg-9">
            <input type="number" min="0" class="input-field" name="r_bed" placeholder="<?php echo e(__('Example: 3')); ?>">
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <div class="left-area">
                <h4 class="heading"><?php echo e(__('No. Bathrooms')); ?></h4>
            </div>
        </div>

        <div class="col-lg-9">
            <input type="number" min="0" class="input-field" name="r_baths" placeholder="<?php echo e(__('Example: 1')); ?>">
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <div class="left-area">
                <h4 class="heading"><?php echo e(__('Square Feet')); ?></h4>
            </div>
        </div>

        <div class="col-lg-9">
            <input type="number" min="0" class="input-field" name="r_square" placeholder="<?php echo e(__('Example: 1200 sqrt')); ?>">
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <div class="left-area">
                <h4 class="heading"><?php echo e(__('Property Type')); ?></h4>
            </div>
        </div>
        <div class="col-lg-9">
            <select name="r_property_type" class="input-field">
                <option value="buy"><?php echo e(__('Buy')); ?></option>
                <option value="rent"><?php echo e(__('Rent')); ?></option>
            </select>
        </div>
    </div>

<?php endif; ?>

<?php /**PATH C:\wamp\htdocs\geniuslisting\project\resources\views/partials/admin/listing/real_estate.blade.php ENDPATH**/ ?>