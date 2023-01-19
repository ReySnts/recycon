<?php if(auth()->guard()->guest()): ?>
<li class="nav-item">
    <a class="nav-link" href="<?php echo e(route('login')); ?>">Login</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="<?php echo e(route('register')); ?>">Register</a>
</li>
<?php else: ?>
<li class="nav-item">
    <a class="nav-link" href="<?php echo e(route('logout')); ?>">Logout</a>
</li>
<?php endif; ?>
<?php /**PATH C:\Users\MSI-PC\Desktop\recycon-main\recycon\resources\views/navbar.blade.php ENDPATH**/ ?>