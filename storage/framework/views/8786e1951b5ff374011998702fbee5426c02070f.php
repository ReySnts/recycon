<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <?php if(session('status')): ?>
                <h6 class="alert alert-success"><?php echo e(session('status')); ?></h6>
            <?php endif; ?>

                <div class="card-body">
                    <form action="<?php echo e(url('/register')); ?>" method="POST">
                        <?php echo csrf_field(); ?>

                        <div class="form-group mb-3">
                            <label for="">username</label>
                            <input type="text" name="username" class="form-control">
                        </div>
                        <div type="email" class="form-group mb-3">
                            <label for="">email</label>
                            <input type="text" name="email_address" class="form-control">
                        </div>
                        <div type="password" class="form-group mb-3">
                            <label for="">password</label>
                            <input type="text" name="password" class="form-control">
                        </div>
                        <div type="password" class="form-group mb-3">
                            <label for="">repeat password</label>
                            <input type="text" name="repassword" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MSI-PC\Desktop\recycon-main\recycon\resources\views/register.blade.php ENDPATH**/ ?>