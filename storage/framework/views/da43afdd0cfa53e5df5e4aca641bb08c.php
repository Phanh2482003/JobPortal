<?php $__env->startSection('content'); ?>

<div class="row">
  <div class="col-12">
    <div class="card mb-4 mx-4 p-4 pb-0 pt-2">
      <div class="card-header pb-0">
        <div class="d-flex flex-row justify-content-between">
          <div>
            <h4 class="mb-4 text-primary font-bold">Tạo lịch phỏng vấn mới</h4>
            <h6 class="mb-0 font-bold">Bước 1: Nhập thông tin cơ bản</h6>
          </div>
        </div>
      </div>
      <div class="card-body pt-4">
        <form action="/company/interviews/create" method="POST" role="form text-left">
          <?php echo csrf_field(); ?>
          <div class="row">
            <div class="col-md-6 pe-md-5">
              <div class="form-group">
                <label for="name" class="text-sm">Tên lịch phỏng vấn <span class="text-danger">*</span></label>
                <input type="text" class="form-control" placeholder="Tên lịch phỏng vấn" name="name" id="name" value="<?php echo e(old('name')); ?>">
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
              <div class="form-group">
                <label for="type" class="text-sm">Vòng phỏng vấn <span class="text-danger">*</span></label>
                <select class="form-select" name="type" id="type">
                  <option value="" disabled selected>Chọn vòng phỏng vấn</option>
                  <option value="Phỏng vấn chuyên sâu">Phỏng vấn chuyên sâu (online)</option>
                  <option value="Phỏng vấn doanh nghiệp">Phỏng vấn doanh nghiệp (offline)</option>
                </select>
                <?php $__errorArgs = ['type'];
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
            <div class="col-md-6 ps-md-5">
              <div class="form-group">
                <div class="flex align-items-center">
                  <label for="" class="text-sm">Thời gian <span class="text-danger">*</span></label>
                </div>
                <div class="flex items-center gap-3 ms-md-3 mb-3">
                  <label for="date" class="mb-0">Ngày phỏng vấn</label>
                  <div class="relative ms-1">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                      <i class="bi bi-calendar-event-fill"></i>
                    </div>
                    <input id="datepicker-range-start" autocomplete="off" datepicker datepicker-autohide datepicker-format="dd/mm/yyyy" type="text" class="form-control p-2 ps-5" placeholder="dd/mm/yyyy" name="date" id="date" value="<?php echo e(old('date')); ?>">
                  </div>
                </div>
                <?php $__errorArgs = ['date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-danger text-xs mt-2 ps-8"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <div class="flex ms-md-3 gap-3">
                  <div class=" col-md-auto d-flex align-items-center gap-3">
                    <label for="start_time" class="mb-0">Từ</label>
                    <div class="relative">
                      <div class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                          <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z" clip-rule="evenodd" />
                        </svg>
                      </div>
                      <input type="time" value="08:00" class="form-control p-2" placeholder="0" name="start_time" id="start_time" value="<?php echo e(old('start_time')); ?>">
                    </div>
                  </div>
                  <div class="col-md-auto d-flex align-items-center gap-3">
                    <label for="end_time" class="mb-0">Đến</label>
                    <div class="relative">
                      <div class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                          <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z" clip-rule="evenodd" />
                        </svg>
                      </div>
                      <input type="time" value="17:00" class="form-control p-2" placeholder="0" name="end_time" id="end_time" value="<?php echo e(old('end_time')); ?>">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row items-end" id="interviewer_list">
            <label for="" class="text-sm">Danh sách người phỏng vấn <span class="text-danger">*</span></label>
            <input type="hidden" name="interviewer_indices" id="interviewer_indices">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="interviewer_name">Họ và tên <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" placeholder="Họ và tên" name="interviewer_name" id="interviewer_name" value="<?php echo e(old('interviewer_name')); ?>">
                  <?php $__errorArgs = ['interviewer_name'];
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
              <div class="col-md-4">
                <div class="form-group">
                  <label for="interviewer_email">Email <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" placeholder="Email" name="interviewer_email" id="interviewer_email" value="<?php echo e(old('interviewer_email')); ?>">
                  <?php $__errorArgs = ['interviewer_email'];
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
          </div>
          <button class="bg-blue-500 text-white font-bold btn-sm d-flex align-items-center gap-2 px-3 py-1 mb-3 hover:opacity-90 rounded-full" type="button" id="add_interviewer">
            <span class="text-md">+</span>
            Thêm người phỏng vấn
          </button>

          <div class="d-flex justify-content-end gap-4 mt-4">
            <a href="/company/interviews" class="btn btn-secondary" type="button">Quay lại</a>
            <button type="submit" class="btn bg-primary text-white btn-md">Tiếp tục</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
  let interviewer_index = 1;
  const interviewer_indices = [];

  const interviewerList = document.getElementById("interviewer_list");

  document.getElementById("add_interviewer").addEventListener("click", function() {
    const index = interviewer_index;
    interviewer_index++;
    interviewer_indices.push(index);

    const listItem = document.createElement("div");
    listItem.className = "row items-end";
    listItem.innerHTML = `
    <div class="col-md-4">
      <div class="form-group">
        <label for="interviewer_name_${index}">Họ và tên</label>
        <input type="text" class="form-control" placeholder="Họ và tên" name="interviewer_name_${index}" id="interviewer_name_${index}" required>
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <label for="interviewer_email_${index}">Email</label>
        <input type="text" class="form-control" placeholder="Email" name="interviewer_email_${index}" id="interviewer_email_${index}" required>
      </div>
    </div>
    `

    const delBtn = document.createElement('button');
    delBtn.type = "button";
    delBtn.className = "mb-3 py-2 px-3 hover:bg-gray-200 rounded";
    delBtn.innerHTML = `<i class="bi bi-x-lg text-black"></i>`;

    delBtn.addEventListener("click", () => {
      interviewer_indices.splice(interviewer_indices.indexOf(index), 1);

      interviewerList.removeChild(listItem);

      document.getElementById("interviewer_indices").value = interviewer_indices.toString();
    });

    const delBtnContainer = document.createElement('div');
    delBtnContainer.className = "col-md-4";

    delBtnContainer.appendChild(delBtn);

    listItem.appendChild(delBtnContainer);

    interviewerList.appendChild(listItem);

    document.getElementById("interviewer_indices").value = interviewer_indices.toString();
  });
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('company.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Music\Downloads\JobPortal-main\resources\views/company/interviews/create.blade.php ENDPATH**/ ?>