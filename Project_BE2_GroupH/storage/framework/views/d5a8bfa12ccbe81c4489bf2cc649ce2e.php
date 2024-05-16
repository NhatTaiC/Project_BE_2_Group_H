<?php $__env->startSection('content'); ?>
    <main class="signup-form">
        <div class="cotainer my-5 mx-auto">
            <div class="row justify-content-center">
                <div class="col-md-4 pt-5">
                    <div class="card mx-auto border-dark my-5" style="width: 600px;">
                        <h3 class="card-header text-center">
                            Cập nhập Liên Hệ
                        </h3>
                        <div class="card-body">
                            <form action="<?php echo e(route('relationship.postUpdateRelationship')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <table class="table table-borderless">
                                    <tr>
                                        <td class="td-left">Mã liên hệ:</td>
                                        <td class="td-right"><input type="text" id="maLienHe" class="td-right-username form-control"
                                                                    name="maLienHe" required autofocus value="<?php echo e($relationship->maLienHe); ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="td-left">Tên Phòng Ban:</td>
                                        <td class="td-right"><input type="text" id="tenPhongBan" class="td-right-mk form-control"
                                                                    name="tenPhongBan" required autofocus value="<?php echo e($relationship->tenPhongBan); ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="td-left">Số Điện Thoại:</td>
                                        <td class="td-right"><input type="text" id="soDT" class="td-right-mk form-control"
                                                                    name="soDT" required autofocus value="<?php echo e($relationship->soDT); ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="td-left"></td>
                                        <td class="td-right"></td>
                                    </tr>
                                    <tr>
                                        <td class="td-left"></td>
                                        <td class="td-right">
                                            <button class="btn btn-dark btn-block">cập nhâp</button>
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

<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project_BE_2_Group_H\Project\src\src_laravel_10.48_change_ui\21-training-laravel\resources\views/crud_relationship/update_relationship.blade.php ENDPATH**/ ?>