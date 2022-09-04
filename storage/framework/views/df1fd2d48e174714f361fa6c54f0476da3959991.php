
<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Form_Validation'); ?>  <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Resi Pengiriman <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Edit Resi Pengiriman <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit Resi Pengiriman</h4>
                <p class="card-title-desc">Ubah data resi pengiriman</p>
            </div>
            <div class="card-body">
                <form class="needs-validation" novalidate method="post" action="<?php echo e(route('resi-pengiriman.update', $data->id)); ?>">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="validationCustom01">Nama Pengirim</label>
                                <input type="text" class="form-control" id="validationCustom01" placeholder="Nama Pengirim" name="pengirim" value="<?php echo e(old('pengirim') ?? $data->pengirim); ?>" required>
                                <div class="invalid-feedback">
                                    Masukkan nama pengirim yang valid.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="validationCustom02">Nama Penerima</label>
                                <input type="text" class="form-control" id="validationCustom02" placeholder="Nama Penerima" name="penerima" value="<?php echo e(old('penerima') ?? $data->penerima); ?>"required>
                                <div class="invalid-feedback">
                                    Masukkan nama penerima yang valid.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label" for="validationCustom03">Tanggal</label>
                                <input type="date" class="form-control" id="validationCustom03" placeholder="Tanggal" name="tanggal" value="<?php echo e(old('tanggal') ?? $data->tanggal); ?>" required>
                                <div class="invalid-feedback">
                                    Masukkan tanggal yang valid.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label" for="validationCustom04">Berat</label>
                                <input type="text" class="form-control" id="validationCustom04" placeholder="Berat" name="berat" value="<?php echo e(old('berat') ?? $data->berat); ?>" required>
                                <div class="invalid-feedback">
                                    Masukkan berat yang valid.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label" for="validationCustom05">Ukuran</label>
                                <input type="text" class="form-control" id="validationCustom05" placeholder="Ukuran" name="ukuran" value="<?php echo e(old('ukuran') ?? $data->ukuran); ?>" required>
                                <div class="invalid-feedback">
                                    Masukkan ukuran yang valid.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label" for="validationCustom05">Isi</label>
                                <input type="text" class="form-control" id="validationCustom05" placeholder="Isi" name="isi" value="<?php echo e(old('isi') ?? $data->isi); ?>" required>
                                <div class="invalid-feedback">
                                    Masukkan isi yang valid.
                                </div>
                            </div>
                        </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label" for="validationCustom05">Layanan</label>
                            <input type="text" class="form-control" id="validationCustom05" placeholder="Layanan" name="layanan" value="<?php echo e(old('layanan') ?? $data->layanan); ?>" required>
                            <div class="invalid-feedback">
                                Masukkan layanan yang valid.
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="row float-end">
                        <div class="col-xl-12">
                    <button class="btn btn-primary" type="submit">Submit</button>
                    <a href="<?php echo e(route('resi-pengiriman.index')); ?>" class="btn btn-danger">Batal</a>
                </div>
            </div>
                </form>
            </div>
        </div>
        <!-- end card -->
    </div> <!-- end col -->
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(URL::asset('assets/js/pages/form-validation.init.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\resi-logistik\resources\views/resi-pengiriman/edit.blade.php ENDPATH**/ ?>