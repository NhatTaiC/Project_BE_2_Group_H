<?php $__env->startSection('content'); ?>
    <main class="login-form">
        <div class="container my-5 pt-5">
            <div class="container-fluid py-2 text-center">
                <h2 style="font-weight: bold;">Danh Sách Chi Nhánh</h2>
                <?php echo csrf_field(); ?>
                <form action=""  enctype="multipart/form-data">
                    <input name="keyWord" class="form-control me-2" type="text" placeholder="Tìm kiếm">
                    <input name="search" value="Tìm kiếm" class="btn btn-info" type="submit">
                </form>

            </div>
            <div class="row justify-content-center pb-5">
                <table class="table table-bordered table:hover">
                    <thead>
                    <tr>
                        <th class="text-center">Số lượng </th>
                        <th class="text-center">Mã Chi Nhánh</th>
                        <th class="text-center">Tên Chi Nhánh</th>
                        <th class="text-center">Số Điện Thoại Chi Nhánh</th>
                        <th class="text-center">Địa Chỉ nhánh</th>
                        <th class="text-center">IMG</th>
                        <th class="text-center">Công Cụ</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $branches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $branch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="text-center"><?php echo e($branch->branch_id); ?></td>
                            <td class="text-center"><?php echo e($branch->maCN); ?></td>
                            <td class="text-center"><?php echo e($branch->tenCN); ?></td>
                            <td class="text-center"><?php echo e($branch->sodtCN); ?></td>
                            <td class="text-center"><?php echo e($branch->diaChiCN); ?></td>
                            <td><img src="<?php echo e(asset('uploads/branches/'.$branch->imgCN)); ?>" width="70px"
                                     height="70px" alt="Anh dai dien" /></td>
                            <td class="text-center">


                                <a href="<?php echo e(route('branch.editBranch', ['branch_id' => $branch->branch_id])); ?>"
                                   class="btn btn-primary">Edit</a>
                                <a href="<?php echo e(route('branch.deleteBranch', ['branch_id' => $branch->branch_id])); ?>"
                                   class="btn btn-primary">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <a href="<?php echo e(route('branch.createBranch')); ?>">Thêm Chi Nhánh</a>
                <div> <?php echo e($branches->links()); ?></div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('relationboardship', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project_BE_2_Group_H\Project\src\src_laravel_10.48_change_ui\21-training-laravel\resources\views/crud_branch/list_branch.blade.php ENDPATH**/ ?>