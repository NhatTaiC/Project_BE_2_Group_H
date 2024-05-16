<!DOCTYPE html>
<html>
<head>
    <title>Liên Hệ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-dark bg-dark navbar-expand-lg mb-5 text-white fixed-top" style="background-color: #e3f2fd;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#" style="font-weight: 700; color: white">Laravel Training - Group H</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-auto">
                <?php if(auth()->guard()->guest()): ?>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('signout')); ?>" style="font-weight: 700; color: white">Đăng Xuất</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>


<div class="container-fluid fixed-bottom bg-dark">
    <div class="container-fluid text-white py-2 my-2">
        <p class="mx-auto my-auto text-center" style="font-weight: 700; color: white">Lập trình web &#169 01/2024 - Nhóm H</p>
    </div>
</div>
<?php echo $__env->yieldContent('content'); ?>
</body>
</html>
<?php /**PATH D:\Project_BE_2_Group_H\Project\src\src_laravel_10.48_change_ui\21-training-laravel\resources\views/relationboardship.blade.php ENDPATH**/ ?>