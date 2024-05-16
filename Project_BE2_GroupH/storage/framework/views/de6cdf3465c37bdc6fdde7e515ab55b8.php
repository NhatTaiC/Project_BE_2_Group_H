<?php $__env->startSection('content'); ?>
    <main class="signup-form">
        <div class="cotainer my-5 mx-auto">
            <div class="row justify-content-center">
                <div class="col-md-4 pt-5">
                    <div class="card mx-auto border-dark my-5" style="width: 600px;">
                        <h3 class="card-header text-center">
                            Thêm Chi Nhánh
                        </h3>
                        <div class="card-body">
                            <form action="<?php echo e(route('branch.createBranch')); ?>" method="post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <table class="table table-borderless">
                                    <tr>
                                        <td class="td-left">Mã chi nhánh:</td>
                                        <td class="td-right"><input type="text" id="maCN" class="td-right-username form-control"
                                                                    name="maCN" required autofocus>
                                            <?php if($errors->has('maCN')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('maCN')); ?></span>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="td-left">Tên Chi Nhánh:</td>
                                        <td class="td-right"><input type="text" id="tenCN" class="td-right-mk form-control"
                                                                    name="tenCN" required autofocus>
                                            <?php if($errors->has('tenCN')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('tenCN')); ?></span>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="td-left">Số Điện Thoại Chi Nhánh:</td>
                                        <td class="td-right"><input type="text" id="sodtCN" class="td-right-mk form-control"
                                                                    name="sodtCN" required autofocus>
                                            <?php if($errors->has('sodtCN')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('sodtCN')); ?></span>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="td-left">Địa Chỉ Chi Nhánh:</td>
                                        <td class="td-right"><input type="text" id="diaChiCN" class="td-right-mk form-control"
                                                                    name="diaChiCN" required autofocus>
                                            <?php if($errors->has('diaChiCN')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('diaChiCN')); ?></span>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="td-left">Anh Chi Nhánh:</td>
                                        <td><input type="file" name="imgCN" id="" class="form-control">
                                            <?php if($errors->has('imgCN')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('imgCN')); ?></span>
                                            <?php endif; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="td-left btn btn-block"><a href="<?php echo e(route('branch.listBranches')); ?>">Về Trang Danh Sách</a></td>
                                        <td class="td-right">
                                            <button class="btn btn-dark btn-block">Thêm Chi Nhánh Mới</button>
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

<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project_BE_2_Group_H\Project\src\src_laravel_10.48_change_ui\21-training-laravel\resources\views/crud_branch/add_branch.blade.php ENDPATH**/ ?>