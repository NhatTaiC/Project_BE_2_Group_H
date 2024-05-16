<?php $__env->startSection('content'); ?>
    <main class="signup-form">
        <div class="cotainer my-5 mx-auto">
            <div class="row justify-content-center">
                <div class="col-md-4 pt-5">
                    <div class="card mx-auto border-dark my-5" style="width: 600px;">
                        <h3 class="card-header text-center">
                            Cập Nhập Chi Nhánh
                        </h3>
                        <div class="card-body">
                            <form action="<?php echo e(route('branch.updateBranch')); ?>" method="post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <table class="table table-borderless">
                                        <tr>
                                            <input name="branch_id" type="hidden" value="<?php echo e($branch->branch_id); ?>">
                                            <td class="td-left">Mã Chi Nhánh:</td>
                                            <td class="td-right"><input type="text" id="maCN" class="td-right-mk form-control"
                                                                        name="maCN" value="<?php echo e($branch->maCN); ?>" required autofocus>
                                                <?php if($errors->has('maCN')): ?>
                                                    <span class="text-danger"><?php echo e($errors->first('maCN')); ?></span>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                       <tr>
                                           <td class="td-left">Tên Chi Nhánh:</td>
                                           <td class="td-right"><input type="text" id="tenCN" class="td-right-mk form-control"
                                                                       name="tenCN" value="<?php echo e($branch->tenCN); ?>" required autofocus>
                                               <?php if($errors->has('tenCN')): ?>
                                                   <span class="text-danger"><?php echo e($errors->first('tenCN')); ?></span>
                                               <?php endif; ?>
                                           </td>
                                       </tr>
                                    <tr>
                                        <td class="td-left">Số Điện Thoại Chi Nhánh:</td>
                                        <td class="td-right"><input type="text" id="sodtCN" class="td-right-mk form-control"
                                                                    name="sodtCN" value="<?php echo e($branch->sodtCN); ?>" required autofocus>
                                            <?php if($errors->has('sodtCN')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('sodtCN')); ?></span>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="td-left">Địa Chỉ Chi Nhánh:</td>
                                        <td class="td-right"><input type="text" id="diaChiCN" class="td-right-mk form-control"
                                                                    name="diaChiCN" value="<?php echo e($branch->diaChiCN); ?>" required autofocus>
                                            <?php if($errors->has('diaChiCN')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('diaChiCN')); ?></span>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="td-left">Anh Chi Nhánh:</td>
                                        <td><input type="file" name="imgCN" id="imgCN" class="form-control">
                                            <img src="<?php echo e(asset('uploads/branches/'.$branch->imgCN)); ?>" width="40px"
                                                 height="40px" alt="logo" />
                                            <?php if($errors->has('imgCN')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('imgCN')); ?></span>
                                            <?php endif; ?></td>
                                    </tr>
                                    <tr>
                                       <td>
                                        <td class="td-left"></td>
                                        <td class="td-right">
                                            <button class="btn btn-dark btn-block">Thêm Chi Nhánh Mới</button>
                                            <a href="<?php echo e(route('branch.listBranches')); ?>">Quay Lại</a>
                                        </td>
                                       </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project_BE_2_Group_H\Project\src\src_laravel_10.48_change_ui\21-training-laravel\resources\views/crud_branch/update_branch.blade.php ENDPATH**/ ?>