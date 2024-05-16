<!DOCTYPE html>
<html>
<head>
    <title>Laravel 10.48.0 - CRUD User Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/all.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/font/bootstrap-icons.css')); ?>">
</head>
<body>


<section class="section-navbar">
    <nav class="navbar navbar-dark bg-dark text-white navbar-expand-lg mb-5" style="background-color: #e3f2fd;">
        <div class="container">
            <a class="navbar-brand mr-auto" href="#">Laravel Group H</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <?php if(auth()->guard()->guest()): ?>
                        
                        <li class="nav-item">
                            <a class="nav-link text-white" href="<?php echo e(route('login')); ?>">Login</a>
                        </li>

                        
                        <li class="nav-item">
                            <a class="nav-link text-white" href="<?php echo e(route('user.createUser')); ?>">Register</a>
                        </li>
                    <?php else: ?>
                        
                        <li class="nav-item">
                            <a class="nav-link text-white" href="<?php echo e(route('home')); ?>">Home</a>
                        </li>

                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                               data-bs-toggle="dropdown">Management</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href=" <?php echo e(route('user.list')); ?> ">TaiKhoan</a></li>
                                <li><a class="dropdown-item" href="#">LoaiXe</a></li>
                                <li><a class="dropdown-item" href="#">Xe</a></li>
                                <li><a class="dropdown-item" href="#">ChiTietXe</a></li>
                                <li><a class="dropdown-item" href="#">ChiNhanh</a></li>
                                <li><a class="dropdown-item" href="#">LichHen</a></li>
                                <li><a class="dropdown-item" href="#">LienHe</a></li>
                            </ul>
                        </li>

                        
                        <li class="nav-item">
                            <a class="nav-link text-white" href="<?php echo e(route('signout')); ?>">Logout</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
</section>


<?php echo $__env->yieldContent('content'); ?>


<section class="section-footer mt-5 pt-5">
    <div class="container-fluid text-center bg-dark fixed-bottom p-2">
        <h1 class="footer-title text-white">Lập Trình Web BE 2 2024</h1>
    </div>
</section>

<script src="<?php echo e(asset('js/all.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>

</body>
</html>
<?php /**PATH D:\hvd\hk4\DoAnFE2\Project_BE_2_Group_H\Src_Code\Project_BE2_GroupH\resources\views/dashboard.blade.php ENDPATH**/ ?>