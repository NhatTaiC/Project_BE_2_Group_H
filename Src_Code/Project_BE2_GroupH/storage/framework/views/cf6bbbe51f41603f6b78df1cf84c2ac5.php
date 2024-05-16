<?php $__env->startSection('content'); ?>

<link rel="stylesheet" href="<?php echo e(asset('css/list.css')); ?>">


<section class="section-title">
    <div class="container-fluid my-5 text-center">
        <h1 class="title"><?php echo e($loaiXe->tenLoaiXe); ?>'s Information</h1>
    </div>
</section>


<main class="login-form">
    <div class="container">
        <div class="row justify-content-center">
            <table class="table table-bordered mb-5 pb-5">
                <thead>
                    <tr class="row-header" style="background: lightcoral; font-size: 30px; font-weight: 700">
                        <th class="text-center bg-info th-data">mã Loại Xe</th>
                        <th class="text-center bg-info th-data">tên Loại Xe</th>
                        <th class="text-center bg-info th-data">hình ảnh</th>
                        <th class="text-center bg-info th-data">Mô tả</th>
                        <th class="text-center bg-info th-data">Năm sản xuất</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center td-data"><?php echo e($loaiXe->maLoaiXe); ?></td>
                        <td class="text-center td-data"><?php echo e($loaiXe->tenLoaiXe); ?></td>
                        <td class="text-center td-data">
                            <img src="<?php echo e(asset('img/' .$loaiXe->imgLoaiXe )); ?>" style="width: 70px; height: 70px"
                                alt="loaixe.img">
                        </td>
                        <td class="text-center td-data"><?php echo e($loaiXe->moTa); ?></td>
                        <td class="text-center td-data"><?php echo e($loaiXe->namSanXuat); ?></td>
                </tbody>
            </table>
        </div>
    </div>
</main>

<br><br>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\hvd\hk4\DoAnFE2\Project_BE_2_Group_H\Src_Code\Project_BE2_GroupH\resources\views/crud_loaiXe/read_loaiXe.blade.php ENDPATH**/ ?>