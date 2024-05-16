<?php $__env->startSection('content'); ?>
<!-- Nhận data vao để sửa -->

<main class="signup-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Update Loai Xe</h3>
                    <div class="card-body">
                        <form action="<?php echo e(route('loaiXe.postUpdateLoaiXe')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <input name="id" type="hidden" value="<?php echo e($loaiXe->maLoaiXe); ?>">

                            
                            <div class="form-group mb-3">
                                <label for="name">Tên loại xe:</label>
                                <input type="text" placeholder="Name" id="tenLoaiXe" class="form-control" name="tenLoaiXe" value="<?php echo e($loaiXe->tenLoaiXe); ?>" required autofocus>
                                <?php if($errors->has('name')): ?>
                                <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                                <?php endif; ?>
                            </div>

                            <!-- Hinh anh -->
                            <div class="form-group mb-3">
                                <label for="imgLoaiXe">imgLoaiXe:</label>
                                <input id="imgLoaiXe" type="file" class="form-control" name="imgLoaiXe">
                                <br>
                                <img src="<?php echo e(asset('img/' . $loaiXe->imgLoaiXe )); ?>" style="width: 70px; height: 70px" alt="imgLoaiXe">
                            </div>

                            
                            

                            
                            
                            
                            
                            
                            
                            
                            
                            

                            

                            
                            <div class="form-group mb-3">
                                <label for="moTa">Mô tả:</label>
                                <input type="text" placeholder="mô tả" id="moTa" class="form-control" name="moTa" value="<?php echo e($loaiXe->moTa); ?>">
                                <?php if($errors->has('phone')): ?>
                                <span class="text-danger"><?php echo e($errors->first('moTa')); ?></span>
                                <?php endif; ?>
                            </div>


                            
                            <div class="form-group mb-3">
                                <label for="nsx">Năm sản xuất:</label>
                                <input type="text" placeholder="MSSV" id="nsx" class="form-control" name="nsx" value="<?php echo e($loaiXe->namSanXuat); ?>">
                                <?php if($errors->has('nsx')): ?>
                                <span class="text-danger"><?php echo e($errors->first('nsx')); ?></span>
                                <?php endif; ?>
                            </div>

                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\hvd\hk4\DoAnFE2\Project_BE_2_Group_H\Src_Code\Project_BE2_GroupH\resources\views/crud_loaiXe/update_loaiXe.blade.php ENDPATH**/ ?>