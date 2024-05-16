<?php $__env->startSection('content'); ?>
    <main class="login-form">
        <div class="container my-5 pt-5">
            <div class="container-fluid py-2 text-center">
                <h2 style="font-weight: bold;">Danh Sách Liên Hệ</h2>
            </div>
            <div class="row justify-content-center pb-5">
                <table class="table table-bordered table:hover">
                    <thead>
                    <tr>
                        <th class="text-center">Mã Liên Hệ</th>
                        <th class="text-center">Tên Phòng Ban</th>
                        <th class="text-center">Số Điện Thoại</th>
                        <th class="text-center">Công Cụ</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $relationships; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $relationship): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="text-center"><?php echo e($relationship->maLienHe); ?></td>
                            <td class="text-center"><?php echo e($relationship->tenPhongBan); ?></td>
                            <td class="text-center"><?php echo e($relationship->soDT); ?></td>
                            <td class="text-center">
                                <a href="<?php echo e(route('relationship.deleteRelationship', ['maLienHe' => $relationship->maLienHe])); ?>"
                                   class="link-control text-decoration-none">Delete</a>
                                <a href="<?php echo e(route('relationship.updateRelationship', ['maLienHe' => $relationship->maLienHe])); ?>"
                                   class="link-control text-decoration-none">Edit</a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
               <div> <?php echo e($relationships->links()); ?></div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('relationboardship', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project_BE_2_Group_H\Project\src\src_laravel_10.48_change_ui\21-training-laravel\resources\views/crud_relationship/list_relationship.blade.php ENDPATH**/ ?>