<?php $__env->startSection('content'); ?>

<div class="row">
  <div class="col-12">
    <div class="card mb-4 p-4">
      <div class="card-header pb-0">
        <div class="d-flex flex-row justify-content-between">
          <div>
            <h4 class="text-primary font-bold">Thêm ứng viên mới</h4>
          </div>
        </div>
      </div>
      <div class="card-body">
        <form action="" method="POST" role="form" enctype="multipart/form-data">
          <?php echo csrf_field(); ?>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="name">Họ và tên <span class="text-danger">*</span></label>
                <input type="text" class="form-control" placeholder="Họ và tên" name="name" id="name" value="<?php echo e(old('name')); ?>">
                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-danger text-sm fw-bold mt-2"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
              <div class="form-group">
                <label for="email">Email <span class="text-danger">*</span></label>
                <input type="text" class="form-control" placeholder="Email" name="email" id="email" value="<?php echo e(old('email')); ?>">
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-danger text-sm fw-bold mt-2"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
              <div class="form-group">
                <label for="phone">Số điện thoại <span class="text-danger">*</span></label>
                <input type="tel" maxlength="11" class="form-control" placeholder="Số điện thoại" name="phone" id="phone" value="<?php echo e(old('phone')); ?>">
                <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-danger text-sm fw-bold mt-2"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="job_id">Vị trí ứng tuyển <span class="text-danger">*</span></label>
                <select name="job_id" id="job_id" class="form-select">
                  <option value="" selected disabled>Chọn vị trí ứng tuyển</option>
                  <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($job->id); ?>"><?php echo e($job->name); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php $__errorArgs = ['job_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-danger text-sm fw-bold mt-2"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
              <div class="form-group">
                <label for="cv">CV ứng tuyển <span class="text-danger">*</span></label>
                <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" id="cv"
                  name="cv" type="file" accept=".pdf">
                <?php $__errorArgs = ['cv'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-danger text-sm fw-bold mt-2"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
            </div>
          </div>

          <div class="d-flex gap-2 justify-content-end">
            <button type="submit" class="btn bg-info text-white btn-md mt-4 mb-4">Lưu</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('company.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Music\Downloads\JobPortal-main\resources\views/company/applications/create.blade.php ENDPATH**/ ?>