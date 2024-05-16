<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/management_page.css')); ?>">


<section id="section-title">
    <div class="container-fluid text-center mt-5">
        <h1 class="text-center">
            Management Page
        </h1>
    </div>
</section>


<section id="section-option">
    <div class="container-fluid mt-5 center">
        <ul class="ul-option">
            <li><a href="<?php echo e(route('user.list')); ?>" class="ul-item text-decoration-none">Management TaiKhoan</a></li>
            <li><a href="<?php echo e(route('loaiXe.list')); ?>" class="ul-item text-decoration-none">Management LoaiXe</a></li>
            <li><a href="#" class="ul-item text-decoration-none">Management Xe</a></li>
            <li><a href="#" class="ul-item text-decoration-none">Management ChiTietXe</a></li>
            <li><a href="#" class="ul-item text-decoration-none">Management ChiNhanh</a></li>
            <li><a href="#" class="ul-item text-decoration-none">Management LichHen</a></li>
            <li><a href="#" class="ul-item text-decoration-none">Management LienHe</a></li>
        </ul>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\hvd\hk4\DoAnFE2\Project_BE_2_Group_H\Src_Code\Project_BE2_GroupH\resources\views/management_page.blade.php ENDPATH**/ ?>