<?php $__env->startSection('content'); ?>

<div class="row">
  <div class="col-12">
    <div class="card mb-4 mx-4">
      <div class="card-header pb-0">
        <div class="d-flex flex-row justify-content-between">
          <div>
            <h5 class="mb-0">Đổi mật khẩu</h5>
          </div>
        </div>
      </div>
      <div class="card-body pt-4">
        <form action="" method="POST" role="form text-left">
          <?php echo csrf_field(); ?>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="password">Mật khẩu cũ <span class="text-danger">*</span></label>
                <input type="password" class="form-control" placeholder="Mật khẩu cũ" name="password" id="password" required>
                <?php $__errorArgs = ['error'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-danger text-xs mt-2"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="new_password">Mật khẩu mới <span class="text-danger">*</span></label>
                <input type="password" class="form-control" placeholder="Mật khẩu mới" name="new_password" id="new_password" required>
              </div>
            </div>
          </div>
          <div class="d-flex justify-content-end gap-2">
            <button type="submit" class="btn bg-primary text-white btn-md mt-4 mb-4">Lưu</button>
          </div>
        </form>

      </div>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('company.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Music\Downloads\JobPortal-main\resources\views/company/change-password.blade.php ENDPATH**/ ?>