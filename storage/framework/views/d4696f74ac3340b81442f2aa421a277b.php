<?php $__env->startSection('content'); ?>

<div class="row">
  <div class="col-12">
    <div class="card mb-4 mx-4">
      <div class="card-header pb-0">
        <div class="d-flex flex-row justify-content-between">
          <div>
            <h5 class="mb-0">Cập nhật tài khoản</h5>
          </div>
        </div>
      </div>
      <div class="card-body pt-4">
        <form action="/company/profile" method="POST" role="form text-left">
          <?php echo csrf_field(); ?>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="email">Email đăng nhập <span class="text-danger">*</span></label>
                <input type="text" class="form-control" placeholder="Email" name="email" id="email" aria-label="Email" aria-describedby="email-addon" value="<?php echo e($current_user->email); ?>">
                <?php $__errorArgs = ['email'];
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
                <label for="name">Họ và tên <span class="text-danger">*</span></label>
                <input type="text" class="form-control" placeholder="Họ và tên" name="name" id="name" aria-label="Name" aria-describedby="name" value="<?php echo e($current_user->name); ?>">
                <?php $__errorArgs = ['name'];
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
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="phone">Số điện thoại <span class="text-danger">*</span></label>
                <input type="tel" maxlength="10" class="form-control" placeholder="Số điện thoại" name="phone" id="phone" aria-label="Phone" aria-describedby="phone" value="<?php echo e($current_user->phone); ?>">
                <?php $__errorArgs = ['phone'];
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
          </div>
          <div class="d-flex justify-content-end gap-2">
            <a href="/company/profile/change-password" type="button" class="btn bg-info text-white btn-md mt-4 mb-4">Đổi mật khẩu</a>
            <button type="submit" class="btn bg-primary text-white btn-md mt-4 mb-4">Lưu</button>
          </div>
        </form>

      </div>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('company.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Music\Downloads\JobPortal-main\resources\views/company/profile.blade.php ENDPATH**/ ?>