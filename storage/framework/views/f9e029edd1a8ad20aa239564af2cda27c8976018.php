<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

                <div class="card-body">
                    <form action="<?php echo e(route('login')); ?>" method="POST">
                        <?php echo csrf_field(); ?>

                        <div type="email" class="form-group">
                            <label for="">username</label>
                            <input type="text" name="username" class="form-control">
                        </div>

                        <div type="password" class="form-group">
                            <label for="">password</label>
                            <input type="text" name="password" class="form-control">
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="inlineFormCheck", name="remember_me">
                            <label class="form-check-label" for="inlineFormCheck">
                            Remember me
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MSI-PC\Desktop\recycon-main\recycon\resources\views/login.blade.php ENDPATH**/ ?>