<?php $__env->startSection('content'); ?>

<div>
  <div class="card mb-8 mx-4 p-4 pb-0 pt-2">
    <div class="card-header pb-0">
      <div class="d-flex flex-row justify-content-between">
        <div>
          <h4 class="mb-0 text-primary font-bold">Thông tin lịch phỏng vấn</h4>
        </div>
      </div>
    </div>
    <div class="card-body pt-4">
      <div class="text-xs font-weight-bold pl-1 mb-3 flex items-center">
        <span class="font-bold text-sm text-[#344767] mr-2">Trạng thái</span>
        <?php if($interview->status === "Đang hoạt động"): ?>
        <span class="bg-green-400 text-white pb-0.5 px-2 rounded">Đang hoạt động</span>
        <?php elseif($interview->status === "Đã kết thúc"): ?>
        <span class="bg-gray-400 text-white pb-0.5 px-2 rounded">Đã kết thúc</span>
        <?php else: ?>
        <span class="bg-yellow-200 text-gray-600 py-0.5 px-2 rounded">Chờ xác nhận</span>
        <?php endif; ?>
      </div>
      <form action="/company/interviews/<?php echo e($interview->id); ?>/update" method="POST" role="form text-left">
        <?php echo csrf_field(); ?>
        <div class="row">
          <div class="col-md-6 pe-md-5">
            <div class="form-group">
              <label for="name" class="text-sm">Tên lịch phỏng vấn <span class="text-danger">*</span></label>
              <input type="text" class="form-control" placeholder="Tên lịch phỏng vấn" name="name" id="name" value="<?php echo e($interview->name); ?>">
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
              <select class="form-select" name="type" id="type" disabled>
                <option value="Phỏng vấn chuyên sâu" <?php if($interview->type === "Phỏng vấn chuyên sâu"): ?> selected <?php endif; ?>>
                  <?php echo e($interview->type); ?>

                </option>
              </select>
              <input type="hidden" name="type" value="<?php echo e($interview->type); ?>">
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
                  <input id="datepicker-range-start" datepicker datepicker-autohide datepicker-format="dd/mm/yyyy" type="text" class="form-control p-2 ps-5" placeholder="dd/mm/yyyy" name="date" id="date" value="<?php echo e($interview->date); ?>">
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
                    <input type="time" value="<?php echo e($interview->start_time); ?>" class="form-control p-2" placeholder="0" name="start_time" id="start_time" value="<?php echo e(old('start_time')); ?>">
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
                    <input type="time" value="<?php echo e($interview->end_time); ?>" class="form-control p-2" placeholder="0" name="end_time" id="end_time" value="<?php echo e(old('end_time')); ?>">
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
                <input type="text" class="form-control" placeholder="Họ và tên" name="interviewer_name" id="interviewer_name" value="<?php echo e($first_interviewer['name']); ?>">
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
                <input type="text" class="form-control" placeholder="Email" name="interviewer_email" id="interviewer_email" value="<?php echo e($first_interviewer['email']); ?>">
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
          <input type="hidden" id="interviewer_indices_size" value="<?php echo e(count($interview->interviewers)); ?>" />
          <?php $__currentLoopData = $interview->interviewers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$interviewer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="row items-end">
            <input type="hidden" name="index" value="<?php echo e($index + 1); ?>">
            <div class="col-md-4">
              <div class="form-group">
                <label for="interviewer_name_<?php echo e($index + 1); ?>">Họ và tên</label>
                <input type="text" class="form-control" placeholder="Họ và tên" name="interviewer_name_<?php echo e($index + 1); ?>" id="interviewer_name_<?php echo e($index + 1); ?>" required value="<?php echo e($interviewer['name']); ?>">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="interviewer_email_<?php echo e($index + 1); ?>">Email</label>
                <input type="text" class="form-control" placeholder="Email" name="interviewer_email_<?php echo e($index + 1); ?>" id="interviewer_email_<?php echo e($index + 1); ?>" required value="<?php echo e($interviewer['email']); ?>">
              </div>
            </div>
            <?php if($interview->status === "Chờ xác nhận"): ?>
            <div class="col-md-4">
              <button type="button" class="mb-3 py-2 px-3 hover:bg-gray-200 rounded delete-btn">
                <i class="bi bi-x-lg text-black"></i>
              </button>
            </div>
            <?php endif; ?>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <?php if($interview->status === "Chờ xác nhận"): ?>
        <button class="bg-blue-500 text-white font-bold btn-sm d-flex align-items-center gap-2 px-3 py-1 mb-3 hover:opacity-90 disabled:opacity-50 rounded-full" type="button" id="add_interviewer">
          <span class="text-md">+</span>
          Thêm người phỏng vấn
        </button>
        <?php endif; ?>

        <div class="row items-end mt-4" id="candidate_list">
          <input type="hidden" name="update_type" id="update_type">
          <div class="flex justify-between">
            <label for="" class="text-sm">Danh sách ứng viên</label>
            <?php if($interview->status === "Chờ xác nhận"): ?>
            <a href="/company/interviews/<?php echo e($interview->id); ?>/update-candidates" class="bg-blue-500 text-white font-bold btn-sm d-flex align-items-center gap-2 px-3 py-1 mb-3 hover:opacity-90 rounded-full">
              <i class="bi bi-pencil-square"></i>
              Chỉnh sửa danh sách ứng viên
            </a>
            <?php endif; ?>
          </div>
          <div class="table-responsive p-0 rounded-lg">
            <table class="table align-items-center mb-0 border rounded">
              <thead>
                <tr class="border-top border-light">
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 invisible px-0">
                    Checkbox
                  </th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                    Ứng viên
                  </th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                    Tin tuyển dụng
                  </th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                    Thông tin liên lạc
                  </th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 px-2">
                    Đánh giá
                  </th>
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $candidates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $candidate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td class="ps-4">
                    <p class="text-xs font-weight-bold mb-0"><?php echo e($index + 1); ?></p>
                  </td>
                  <td class="">
                    <p class="text-xs font-weight-bold mb-0"><?php echo e($candidate->name); ?></p>
                  </td>
                  <td class="">
                    <p class="text-xs font-weight-bold mb-0"><?php echo e($candidate->application->job->name); ?></p>
                  </td>
                  <td class="">
                    <p class="text-xs mb-2"><i class="bi bi-envelope-at-fill"></i> <?php echo e($candidate->email); ?></p>
                    <p class="text-xs mb-0"><i class="bi bi-telephone-fill"></i> <?php echo e($candidate->phone); ?></p>
                  </td>
                  <?php if($interview->status === "Đang hoạt động"): ?>
                  <td class="status">
                    <div class="text-sm mb-2 flex items-center gap-1">
                      <input
                        type="radio"
                        id="passed-<?php echo e($candidate->id); ?>"
                        name="status-<?php echo e($candidate->id); ?>"
                        value="passed"
                        class="w-3 h-3 text-green-500 cursor-pointer rounded-full focus:ring-0">
                      <label for="passed-<?php echo e($candidate->id); ?>" class="m-0 font-normal">Đạt</label>
                    </div>
                    <div class="text-sm flex items-center gap-1">
                      <input
                        type="radio"
                        id="failed-<?php echo e($candidate->id); ?>"
                        name="status-<?php echo e($candidate->id); ?>"
                        value="failed"
                        class="w-3 h-3 text-green-500 cursor-pointer rounded-full focus:ring-0">
                      <label for="failed-<?php echo e($candidate->id); ?>" class="m-0 font-normal">Không đạt</label>
                    </div>
                  </td>
                  <?php elseif($interview->status === "Đã kết thúc"): ?>
                  <td>
                    <?php if($candidate->status === "Không trúng tuyển"): ?>
                    <p class="mb-0 text-sm font-bold text-danger"><i class="bi bi-x-circle-fill"></i> Không đạt</p>
                    <?php else: ?>
                    <p class="mb-0 text-sm font-bold text-primary"><i class="bi bi-check-circle-fill"></i> Đạt</p>
                    <?php endif; ?>
                  </td>
                  <?php else: ?>
                  <td></td>
                  <?php endif; ?>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="flex justify-between mt-4">
          <?php if($interview->status === 'Đã kết thúc'): ?>
          <div class="d-flex gap-4">
            <?php if($interview->passed_mail_status === 'sent'): ?>
            <div class="my-4 flex items-center gap-1 text-primary text-sm font-bold">
              <i class="bi bi-check-circle-fill"></i>
              Đã gửi mail thông báo trúng tuyển
            </div>
            <?php else: ?>
            <button type="button" class="btn btn-primary btn-md my-4" data-bs-toggle="modal" data-bs-target="#passedMail">
              Gửi mail thông báo trúng tuyển
            </button>
            <?php endif; ?>
            <?php if($interview->failed_mail_status === 'sent'): ?>
            <div class="my-4 flex items-center gap-1 text-primary text-sm font-bold">
              <i class="bi bi-check-circle-fill"></i>
              Đã gửi mail thông báo không trúng tuyển
            </div>
            <?php else: ?>
            <button type="button" class="btn btn-info btn-md my-4" data-bs-toggle="modal" data-bs-target="#failedMail">
              Gửi mail thông báo không trúng tuyển
            </button>
            <?php endif; ?>
          </div>
          <?php else: ?>
          <div class="d-flex gap-4">
            <?php if($interview->interviewer_mail_status === 'sent'): ?>
            <div class="my-4 flex items-center gap-1 text-primary text-sm font-bold">
              <i class="bi bi-check-circle-fill"></i>
              Đã gửi mail cho người phỏng vấn
            </div>
            <?php else: ?>
            <button type="button" class="btn btn-info btn-md my-4" data-bs-toggle="modal" data-bs-target="#interviewerMail">
              Gửi mail cho người phỏng vấn
            </button>
            <?php endif; ?>

            <?php if($interview->candidate_mail_status === 'sent'): ?>
            <div class="my-4 flex items-center gap-1 text-primary text-sm font-bold">
              <i class="bi bi-check-circle-fill"></i>
              Đã gửi mail cho ứng viên
            </div>
            <?php else: ?>
            <button type="button" class="btn btn-info btn-md my-4" data-bs-toggle="modal" data-bs-target="#candidateMail">
              Gửi mail cho ứng viên
            </button>
            <?php endif; ?>
          </div>
          <?php endif; ?>
          <div class="d-flex gap-4">
            <button type="button" class="btn btn-danger btn-md my-4" data-bs-toggle="modal" data-bs-target="#confirmModal-<?php echo e($interview->id); ?>" <?php if($interview->status === "Đang hoạt động"): ?> disabled <?php endif; ?>>
              Xóa
            </button>
            <?php if($interview->status === "Chờ xác nhận"): ?>
            <button type="submit" class="btn bg-info text-white btn-md my-4" <?php if($interview->status !== "Chờ xác nhận"): ?> disabled <?php endif; ?>>
              Cập nhật
            </button>
            <?php endif; ?>
            <?php if($interview->status === "Đang hoạt động"): ?>
            <button id="save_btn" type="submit" class="btn bg-primary text-white btn-md my-4" <?php if($interview->status !== "Chờ xác nhận"): ?> disabled <?php endif; ?>>
              Lưu đánh giá và kết thúc
            </button>
            <?php endif; ?>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Confirm delete Modal -->
<div class="modal fade" id="confirmModal-<?php echo e($interview->id); ?>" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="confirmModalLabel-<?php echo e($interview->id); ?>">Xác nhận xóa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h6 class="mb-0 text-danger">Bạn có chắc chắn muốn xóa lịch phỏng vấn này?</h6>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
        <a href="/company/interviews/<?php echo e($interview->id); ?>/delete" type="button" class="btn btn-danger">Xóa</a>
      </div>
    </div>
  </div>
</div>

<!-- Send interviewer mail Modal -->
<form action="/company/interviews/<?php echo e($interview->id); ?>/mail/interviewer" method="POST">
  <?php echo csrf_field(); ?>
  <div class="modal fade" id="interviewerMail" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="interviewerMailLabel">Email thông báo</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <input type="hidden" name="interview_id" value="<?php echo e($interview->id); ?>">
          <div class="flex items-center">
            Gửi đến:
            <div class="p-2 ml-2">
              <span class="border rounded-full bg-gray-200 px-2"><?php echo e($first_interviewer['email']); ?></span>
              <?php $__currentLoopData = $interview->interviewers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $interviewer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <span class="border rounded-full bg-gray-200 px-2"><?php echo e($interviewer['email']); ?></span>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
          </div>
          <div class="flex gap-2 items-center">
            <span class=" whitespace-nowrap">Tiêu đề:</span>
            <input type="text" class="form-control" placeholder="Tiêu đề" name="subject" id="interviewerMailSubject" value="<?php echo e($interviewer_mail?->subject); ?>">
          </div>
          <div class="mt-3">
            <?php if (isset($component)) { $__componentOriginalfa45bdf63d5f546beb2b52c7dd7ad0c1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfa45bdf63d5f546beb2b52c7dd7ad0c1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.trix-input','data' => ['id' => 'interviewerMailContent','placeholder' => 'Mô tả công việc','name' => 'content','value' => ''.e(sanitize_html($interviewer_mail?->content)).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('trix-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'interviewerMailContent','placeholder' => 'Mô tả công việc','name' => 'content','value' => ''.e(sanitize_html($interviewer_mail?->content)).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfa45bdf63d5f546beb2b52c7dd7ad0c1)): ?>
<?php $attributes = $__attributesOriginalfa45bdf63d5f546beb2b52c7dd7ad0c1; ?>
<?php unset($__attributesOriginalfa45bdf63d5f546beb2b52c7dd7ad0c1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfa45bdf63d5f546beb2b52c7dd7ad0c1)): ?>
<?php $component = $__componentOriginalfa45bdf63d5f546beb2b52c7dd7ad0c1; ?>
<?php unset($__componentOriginalfa45bdf63d5f546beb2b52c7dd7ad0c1); ?>
<?php endif; ?>
          </div>
          <div>
            <p class="text-sm pl-2 font-semibold italic my-1 text-yellow-400">Lưu ý: Giữ nguyên định dạng các nhãn [...] khi chỉnh sửa email</p>
          </div>
        </div>
        <div class="modal-footer w-full">
          <div class="flex justify-between w-full">
            <a href="/company/interviews/<?php echo e($interview->id); ?>/mail-setting/interviewer" type="button" class="btn">
              <i class="bi bi-gear mr-1"></i>Thiết lập email
            </a>
            <div class="flex gap-2">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
              <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Gửi</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>

<!-- Send candidate mail Modal -->
<form
  <?php if($interview->type === "Phỏng vấn chuyên sâu"): ?>
  action="/company/interviews/<?php echo e($interview->id); ?>/mail/candidate-online"
  <?php else: ?>
  action="/company/interviews/<?php echo e($interview->id); ?>/mail/candidate-offline"
  <?php endif; ?>
  method="POST">
  <?php echo csrf_field(); ?>
  <div class="modal fade" id="candidateMail" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="candidateMailLabel">Email thông báo</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <input type="hidden" name="interview_id" value="<?php echo e($interview->id); ?>">
          <div class="flex items-center">
            Gửi đến:
            <div class="p-2 ml-2">
              <?php $__currentLoopData = $candidates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $candidate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <span class="border rounded-full bg-gray-200 px-2"><?php echo e($candidate['email']); ?></span>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
          </div>
          <div class="flex gap-2 items-center">
            <span class=" whitespace-nowrap">Tiêu đề:</span>
            <input type="text" class="form-control" placeholder="Tiêu đề" name="subject" id="candidateMailSubject" value="<?php echo e($candidate_mail?->subject); ?>">
          </div>
          <div class="mt-3">
            <?php if (isset($component)) { $__componentOriginalfa45bdf63d5f546beb2b52c7dd7ad0c1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfa45bdf63d5f546beb2b52c7dd7ad0c1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.trix-input','data' => ['id' => 'candidateMailContent','placeholder' => 'Mô tả công việc','name' => 'content','value' => ''.e(sanitize_html($candidate_mail?->content)).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('trix-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'candidateMailContent','placeholder' => 'Mô tả công việc','name' => 'content','value' => ''.e(sanitize_html($candidate_mail?->content)).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfa45bdf63d5f546beb2b52c7dd7ad0c1)): ?>
<?php $attributes = $__attributesOriginalfa45bdf63d5f546beb2b52c7dd7ad0c1; ?>
<?php unset($__attributesOriginalfa45bdf63d5f546beb2b52c7dd7ad0c1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfa45bdf63d5f546beb2b52c7dd7ad0c1)): ?>
<?php $component = $__componentOriginalfa45bdf63d5f546beb2b52c7dd7ad0c1; ?>
<?php unset($__componentOriginalfa45bdf63d5f546beb2b52c7dd7ad0c1); ?>
<?php endif; ?>
          </div>
          <div>
            <p class="text-sm pl-2 font-semibold italic my-1 text-yellow-400">Lưu ý: Giữ nguyên định dạng các nhãn [...] khi chỉnh sửa email</p>
          </div>
        </div>
        <div class="modal-footer w-full">
          <div class="flex justify-between w-full">
            <a
              <?php if($interview->type === "Phỏng vấn chuyên sâu"): ?>
              href="/company/interviews/<?php echo e($interview->id); ?>/mail-setting/candidate-online"
              <?php else: ?>
              href="/company/interviews/<?php echo e($interview->id); ?>/mail-setting/candidate-offline"
              <?php endif; ?>
              type="button" class="btn">
              <i class="bi bi-gear mr-1"></i>Thiết lập email
            </a>
            <div class="flex gap-2">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
              <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Gửi</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>

<!-- Send passed mail Modal -->
<form
  <?php if($interview->type === "Phỏng vấn chuyên sâu"): ?>
  action="/company/interviews/<?php echo e($interview->id); ?>/mail/candidate-passed"
  <?php else: ?>
  action="/company/interviews/<?php echo e($interview->id); ?>/mail/candidate-passed-final"
  <?php endif; ?>
  method="POST">
  <?php echo csrf_field(); ?>
  <div class="modal fade" id="passedMail" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="passedMailLabel">Email thông báo trúng tuyển</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <input type="hidden" name="interview_id" value="<?php echo e($interview->id); ?>">
          <div class="flex items-center">
            Gửi đến:
            <div class="p-2 ml-2">
              <?php $__currentLoopData = $candidates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $candidate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if($candidate->status !== "Không trúng tuyển"): ?>
              <span class="border rounded-full bg-gray-200 px-2"><?php echo e($candidate['email']); ?></span>
              <?php endif; ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
          </div>
          <div class="flex gap-2 items-center">
            <span class=" whitespace-nowrap">Tiêu đề:</span>
            <input type="text" class="form-control" placeholder="Tiêu đề" name="subject" value="<?php echo e($passed_mail?->subject); ?>">
          </div>
          <div class="mt-3">
            <?php if (isset($component)) { $__componentOriginalfa45bdf63d5f546beb2b52c7dd7ad0c1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfa45bdf63d5f546beb2b52c7dd7ad0c1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.trix-input','data' => ['id' => 'passedMailContent','placeholder' => 'Mô tả công việc','name' => 'content','value' => ''.e(sanitize_html($passed_mail?->content)).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('trix-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'passedMailContent','placeholder' => 'Mô tả công việc','name' => 'content','value' => ''.e(sanitize_html($passed_mail?->content)).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfa45bdf63d5f546beb2b52c7dd7ad0c1)): ?>
<?php $attributes = $__attributesOriginalfa45bdf63d5f546beb2b52c7dd7ad0c1; ?>
<?php unset($__attributesOriginalfa45bdf63d5f546beb2b52c7dd7ad0c1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfa45bdf63d5f546beb2b52c7dd7ad0c1)): ?>
<?php $component = $__componentOriginalfa45bdf63d5f546beb2b52c7dd7ad0c1; ?>
<?php unset($__componentOriginalfa45bdf63d5f546beb2b52c7dd7ad0c1); ?>
<?php endif; ?>
          </div>
          <div>
            <p class="text-sm pl-2 font-semibold italic my-1 text-yellow-400">Lưu ý: Giữ nguyên định dạng các nhãn [...] khi chỉnh sửa email</p>
          </div>
        </div>
        <div class="modal-footer w-full">
          <div class="flex justify-between w-full">
            <a
              <?php if($interview->type === "Phỏng vấn chuyên sâu"): ?>
              href="/company/interviews/<?php echo e($interview->id); ?>/mail-setting/candidate-passed"
              <?php else: ?>
              href="/company/interviews/<?php echo e($interview->id); ?>/mail-setting/candidate-passed-final"
              <?php endif; ?>
              type="button" class="btn">
              <i class="bi bi-gear mr-1"></i>Thiết lập email
            </a>
            <div class="flex gap-2">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
              <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Gửi</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>

<!-- Send failed mail Modal -->
<form action="/company/interviews/<?php echo e($interview->id); ?>/mail/candidate-failed" method="POST">
  <?php echo csrf_field(); ?>
  <div class="modal fade" id="failedMail" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="failedMailLabel">Email thông báo</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <input type="hidden" name="interview_id" value="<?php echo e($interview->id); ?>">
          <div class="flex items-center">
            Gửi đến:
            <div class="p-2 ml-2">
              <?php $__currentLoopData = $candidates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $candidate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if($candidate->status === "Không trúng tuyển"): ?>
              <span class="border rounded-full bg-gray-200 px-2"><?php echo e($candidate['email']); ?></span>
              <?php endif; ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
          </div>
          <div class="flex gap-2 items-center">
            <span class=" whitespace-nowrap">Tiêu đề:</span>
            <input type="text" class="form-control" placeholder="Tiêu đề" name="subject" id="failedMailSubject" value="<?php echo e($failed_mail?->subject); ?>">
          </div>
          <div class="mt-3">
            <?php if (isset($component)) { $__componentOriginalfa45bdf63d5f546beb2b52c7dd7ad0c1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfa45bdf63d5f546beb2b52c7dd7ad0c1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.trix-input','data' => ['id' => 'failedMailContent','placeholder' => 'Mô tả công việc','name' => 'content','value' => ''.e(sanitize_html($failed_mail?->content)).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('trix-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'failedMailContent','placeholder' => 'Mô tả công việc','name' => 'content','value' => ''.e(sanitize_html($failed_mail?->content)).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfa45bdf63d5f546beb2b52c7dd7ad0c1)): ?>
<?php $attributes = $__attributesOriginalfa45bdf63d5f546beb2b52c7dd7ad0c1; ?>
<?php unset($__attributesOriginalfa45bdf63d5f546beb2b52c7dd7ad0c1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfa45bdf63d5f546beb2b52c7dd7ad0c1)): ?>
<?php $component = $__componentOriginalfa45bdf63d5f546beb2b52c7dd7ad0c1; ?>
<?php unset($__componentOriginalfa45bdf63d5f546beb2b52c7dd7ad0c1); ?>
<?php endif; ?>
          </div>
          <div>
            <p class="text-sm pl-2 font-semibold italic my-1 text-yellow-400">Lưu ý: Giữ nguyên định dạng các nhãn [...] khi chỉnh sửa email</p>
          </div>
        </div>
        <div class="modal-footer w-full">
          <div class="flex justify-between w-full">
            <a href="/company/interviews/<?php echo e($interview->id); ?>/mail-setting/candidate-failed" type="button" class="btn">
              <i class="bi bi-gear mr-1"></i>Thiết lập email
            </a>
            <div class="flex gap-2">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
              <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Gửi</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>

<script>
  function setSaveBtnStatus() {
    let isDisabled = true;

    document.querySelectorAll(".status").forEach(e => {
      const passedInput = e.querySelector("input[value='passed']");
      const failedInput = e.querySelector("input[value='failed']");

      if (passedInput.checked || failedInput.checked) {
        isDisabled = false;
      } else {
        isDisabled = true;
      }
    });

    document.getElementById("save_btn").disabled = isDisabled;
    if (!isDisabled) {
      document.getElementById("update_type").value = "candidate_status";
    }
  }

  document.querySelectorAll("input[type='radio']").forEach(e => {
    e.addEventListener("change", () => {
      setSaveBtnStatus();
    });
  });

  const interviewer_indices_size = document.getElementById("interviewer_indices_size").value;

  let interviewer_index = parseInt(interviewer_indices_size) + 1;
  const interviewer_indices = Array.from({
    length: interviewer_indices_size
  }, (_, i) => i + 1);

  document.getElementById("interviewer_indices").value = interviewer_indices.toString();

  const interviewerList = document.getElementById("interviewer_list");

  try {
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

    document.querySelectorAll(".delete-btn").forEach(e => {
      e.addEventListener("click", () => {
        const index = parseInt(e.parentElement.parentElement.querySelector("input[name='index']").value)
        interviewer_indices.splice(interviewer_indices.indexOf(index), 1);

        interviewerList.removeChild(e.parentElement.parentElement);

        document.getElementById("interviewer_indices").value = interviewer_indices.toString();
      })
    });
  } catch (error) {
    console.log(error);
  }
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('company.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Music\Downloads\JobPortal-main\resources\views/company/interviews/show.blade.php ENDPATH**/ ?>