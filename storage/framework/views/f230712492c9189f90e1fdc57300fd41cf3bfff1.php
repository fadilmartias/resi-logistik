
<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Rating'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Extended <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?>Rating <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Rater Js</h4>
                <p class="card-title-desc">Rater Js Different Example For Rating</p>
            </div>
            <div class="card-body">

                <div class="row">
                    <div class="col-sm-6">
                        <div class="p-lg-5 p-4 text-center" dir="ltr">
                            <h5 class="font-size-15 mb-4">Basic Rater</h5>
                            <div id="basic-rater"></div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-sm-6">
                        <div class="p-lg-5 p-4 text-center" dir="ltr">
                            <h5 class="font-size-15 mb-4">Rater with Step</h5>
                            <div id="rater-step"></div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-sm-6">
                        <div class="p-lg-5 p-4 text-center" dir="ltr">
                            <h5 class="font-size-15 mb-4">Custom Messages</h5>
                            <div id="rater-message"></div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-sm-6">
                        <div class="p-lg-5 p-4 text-center" dir="ltr">
                            <h5 class="font-size-15 mb-4">Example with unlimited number of stars. readOnly option is set to true.</h5>
                            <div id="rater-unlimitedstar"></div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-sm-6">
                        <div class="p-lg-5 p-4 text-center" dir="ltr">
                            <h5 class="font-size-15 mb-4">On Hover event</h5>
                            <div id="rater-onhover" class="align-middle"></div>
                            <span class="ratingnum badge bg-info align-middle ms-2"></span>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-sm-6">
                        <div class="p-lg-5 p-4 text-center" dir="ltr">
                            <h5 class="font-size-15 mb-4">Clear/Reset rater</h5>
                            <div id="raterreset" class="align-middle"></div>
                            <span class="clear-rating"></span>
                            <button id="raterreset-button" class="btn btn-outline-primary btn-sm ms-2">Reset</button>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

            </div>
        </div>
    </div>
    <!-- end col -->
</div>
<!-- end row -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(URL::asset('assets/libs/rater-js/rater-js.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/js/pages/rating.init.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\resi-logistik\resources\views/extended-rating.blade.php ENDPATH**/ ?>