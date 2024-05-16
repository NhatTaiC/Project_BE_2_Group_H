<?php $__env->startSection('content'); ?>
    <main class="signup-form">
        <div class="cotainer my-5 mx-auto">
            <div class="row justify-content-center">
                <div class="col-md-4 pt-5">
                    <div class="card mx-auto border-dark my-5" style="width: 600px;">
                        <h3 class="card-header text-center">
                            Thêm Liên Hệ
                        </h3>
                        <div class="card-body">
                            <form action="<?php echo e(route('relationship.postRelationship')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <table class="table table-borderless">
                                    <tr>
                                        <td class="td-left">Mã liên hệ:</td>
                                        <td class="td-right"><input type="text" id="maLienHe" class="td-right-username form-control"
                                                                    name="maLienHe" required autofocus>
                                            <?php if($errors->has('maLienHe')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('maLienHe')); ?></span>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="td-left">Tên Phòng Ban:</td>
                                        <td class="td-right"><input type="text" id="tenPhongBan" class="td-right-mk form-control"
                                                                    name="tenPhongBan" required autofocus>
                                            <?php if($errors->has('tenPhongBan')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('tenPhongBan')); ?></span>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="td-left">Số Điện Thoại:</td>
                                        <td class="td-right"><input type="text" id="soDT" class="td-right-mk form-control"
                                                                    name="soDT" required autofocus>
                                            <?php if($errors->has('soDT')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('soDT')); ?></span>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="td-left"></td>
                                        <td class="td-right"></td>
                                    </tr>
                                    <tr>
                                        <td class="td-left"></td>
                                        <td class="td-right">
                                            <button class="btn btn-dark btn-block">Đăng ký</button>
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

<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project_BE_2_Group_H\Project\src\src_laravel_10.48_change_ui\21-training-laravel\resources\views/crud_relationship/add_relationship.blade.php ENDPATH**/ ?>