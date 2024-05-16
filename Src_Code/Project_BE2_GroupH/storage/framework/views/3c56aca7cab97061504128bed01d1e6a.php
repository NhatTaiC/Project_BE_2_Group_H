

<?php $__env->startSection('content'); ?>

<link rel="stylesheet" href="<?php echo e(asset('css/list.css')); ?>">


<section class="section-title">
    <div class="container-fluid my-5 text-center">
        <h1 class="title">List Loai xe</h1>
    </div>
</section>


<main class="login-form">
    <div class="container">
        <div class="row justify-content-center">

            <table class="table table-bordered table-striped">
                <thead>
                    <tr class="row-header">
                        <!-- <th class="text-center bg-info th-data">Loại Xe ID</th> -->
                        <th class="text-center bg-info th-data">Mã Loại Xe</th>
                        <th class="text-center bg-info th-data">Tên loại xe</th>
                        <th class="text-center bg-info th-data">imgLoaiXe</th>
                        <th class="text-center bg-info th-data">mô Tả</th>
                        <th class="text-center bg-info th-data">năm Sản Xuất</th>
                        <th class="text-center bg-dark-subtle th-data">Tiện Ích</th>

                    </tr>
                </thead>
                <tbody>
                    <!-- $loaixes = Loaixe::all(); -->

                    <?php $__currentLoopData = $loaixes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loaiXe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="row-data">
                        <!-- <td class="text-center td-data"><?php echo e($loaiXe->LoaiXeID); ?></td> -->
                        <td class="text-center td-data"><?php echo e($loaiXe->maLoaiXe); ?></td>
                        <td class="text-center td-data"><?php echo e($loaiXe->tenLoaiXe); ?></td>
                        <td class="text-center td-data"><img src="<?php echo e(asset('img/' . $loaiXe->imgLoaiXe )); ?>" style="width: 70px; height: 70px" alt="Loaixe.img"></td>
                        <td class="text-center td-data"><?php echo e($loaiXe->moTa); ?></td>
                        <td class="text-center td-data"><?php echo e($loaiXe->namSanXuat); ?></td>
                        <td class="text-center td-data">
                            <a href="<?php echo e(route('loaiXe.read_loaiXe', ['maLoaiXe' => $loaiXe->maLoaiXe])); ?>" class="text-decoration-none btn btn-primary">View</a>
                            <a href="<?php echo e(route('loaiXe.edit_loaiXe', ['maLoaiXe' => $loaiXe->maLoaiXe])); ?>" class="text-decoration-none btn btn-success">Edit</a>
                            <a href="<?php echo e(route('loaiXe.deleteLoaiXe', ['maLoaiXe' => $loaiXe->maLoaiXe])); ?>" class="text-decoration-none btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <br>

            <div class="link text-center my-5 mx-5 px-5" style="text-align: center"><?php echo $loaixes->links(); ?></div>

        </div>
    </div>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\hvd\hk4\DoAnFE2\Project_BE_2_Group_H\Src_Code\Project_BE2_GroupH\resources\views/crud_loaiXe/index.blade.php ENDPATH**/ ?>