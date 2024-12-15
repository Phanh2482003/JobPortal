<?php $__env->startSection('content'); ?>

<div class="row">
  <div class="col-12">
    <div class="card mb-4">
      <div class="card-body p-5">
        <!-- Head -->
        <div class="flex justify-between items-center pb-4 mb-4 border-b">
          <div class="flex items-center gap-2">
            <img src="/user.png" alt="user avatar" width="50px" class="">
            <div>
              <div class="font-bold"><?php echo e($application->candidate->name); ?></div>
              <div>Ngày tạo hồ sơ: <?php echo e(date("d/m/Y", strtotime($application->created_at))); ?></div>
            </div>
          </div>
          <div class="flex gap-3">
            <a href="#" class="border-2 rounded-lg py-2 px-4 bg-green-200 text-black hover:text-black cursor-default">
              <i class="bi bi-person-fill text-primary"></i>
              Hồ sơ ứng viên
            </a>
            <a href="/company/applications/<?php echo e($application->id); ?>/recruitment-process" class="border-2 rounded-lg py-2 px-4 hover:text-black hover:bg-green-50">
              <i class="bi bi-briefcase-fill text-danger"></i>
              Quy trình tuyển dụng
            </a>
          </div>
        </div>

        <!-- Body -->
        <form action="/company/applications/<?php echo e($application->id); ?>" method="POST" role="form">
          <?php echo csrf_field(); ?>
          <div class="row">
            <div class="col-md-6">
              <p class="text-xl font-bold text-green-600">Thông tin chung</p>
              <div class="form-group">
                <label for="name">Họ và tên</label>
                <input type="text" readonly class="form-control" placeholder="Họ và tên" name="name" id="name" value="<?php echo e($application->candidate->name); ?>">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" readonly class="form-control" placeholder="Email" name="email" id="email" value="<?php echo e($application->candidate->email); ?>">
              </div>
              <div class="form-group">
                <label for="phone">Số điện thoại</label>
                <input type="tel" readonly maxlength="10" class="form-control" placeholder="Số điện thoại" name="phone" id="phone" value="<?php echo e($application->candidate->phone); ?>">
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <label for="birthday">Ngày sinh</label>
                  <div class="relative ms-1">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                      <i class="bi bi-calendar-event-fill"></i>
                    </div>
                    <input id="birthday" autocomplete="off" datepicker datepicker-autohide datepicker-format="dd/mm/yyyy" type="text" class="form-control p-2 ps-5" placeholder="dd/mm/yyyy" name="birthday" value="<?php echo e($application->candidate->birthday); ?>">
                  </div>
                </div>
                <div class="col-lg-6">
                  <label for="">Giới tính</label>
                  <select class="form-select" name="gender" id="gender">
                    <option value="" disabled selected>Giới tính</option>
                    <option value="Nam" <?php if($application->candidate->gender === "Nam"): ?> selected <?php endif; ?>>Nam</option>
                    <option value="Nữ" <?php if($application->candidate->gender === "Nữ"): ?> selected <?php endif; ?>>Nữ</option>
                    <option value="Khác" <?php if($application->candidate->gender === "Khác"): ?> selected <?php endif; ?>>Khác</option>
                  </select>
                </div>
              </div>
              <div class="form-group mt-3">
                <label for="identity_card">Số CMND/CCCD</label>
                <input type="text" maxlength="12" class="form-control" placeholder="Số CMND/CCCD" name="identity_card" id="identity_card" value="<?php echo e($application->candidate->identity_card); ?>">
              </div>
              <div class="form-group mt-3">
                <label for="address">Địa chỉ</label>
                <input type="text" class="form-control" placeholder="Địa chỉ" name="address" id="address" value="<?php echo e($application->candidate->address); ?>">
              </div>
              <div class="py-3">
                <label for="name" class="text-sm mr-3">Trạng thái: </label>
                <?php if($application->candidate->status === "Trúng tuyển"): ?>
                <span class="text-xs bg-green-500 text-white font-bold py-1.5 px-4 rounded-md">
                  <?php echo e($application->candidate->status); ?>

                </span>
                <?php elseif($application->candidate->status === "Không trúng tuyển"): ?>
                <span class="text-xs bg-gray-400 text-white font-bold py-1.5 px-4 rounded-md">
                  <?php echo e($application->candidate->status); ?>

                </span>
                <?php else: ?>
                <span class="text-xs bg-yellow-200 text-gray-600 font-bold py-1.5 px-4 rounded-md">
                  <?php echo e($application->candidate->status); ?>

                </span>
                <?php endif; ?>
              </div>
            </div>
            <div class="col-md-6">
              <p class="text-xl font-bold text-green-600">Hồ sơ ứng viên</p>
              <div class="form-group">
                <label for="name">Chiến dịch tuyển dụng</label>
                <input type="text" readonly class="form-control" name="campaign_name" value="<?php echo e($application->job->campaign->name); ?>">
              </div>
              <div class="form-group">
                <label for="name">Vị trí ứng tuyển</label>
                <input type="text" readonly class="form-control bg-white" name="job_name" value="<?php echo e($application->job->name); ?>">
              </div>
              <div class="py-3">
                <label for="name" class="text-sm mr-3">CV ứng tuyển :</label>
                <button
                  type="button"
                  class="text-xs bg-green-500 text-white font-bold py-1.5 px-4 rounded-md hover:opacity-80"
                  data-bs-toggle="modal" data-bs-target="#cv-modal">
                  <i class=" bi bi-eye"></i> Xem CV
                </button>
              </div>
              <?php if($application->candidate->cover_letter): ?>
              <div class="form-group">
                <label for="cover_letter" class="text-sm">Thư ứng tuyển</label>
                <textarea name="cover_letter" id="cover_letter" readonly class="form-control" placeholder="Thư ứng tuyển" rows="5"><?php echo e($application->candidate->cover_letter); ?></textarea>
              </div>
              <?php endif; ?>
            </div>
          </div>
          <div class="d-flex gap-2 justify-content-end">
            <button type="submit" class="btn bg-info text-white btn-md mt-4 mb-4">Cập nhật</button>
            <?php if($role !== "HR"): ?>
            <a href="/company/applications/<?php echo e($application->id); ?>/delete" class="btn bg-danger text-white btn-md mt-4 mb-4">Xoá ứng viên</a>
            <?php endif; ?>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="cv-modal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="cv-modal-label">CV ứng tuyển</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body flex justify-center">
        <object
          data="<?php echo e($application->candidate->cv_path); ?>"
          width="800"
          height="800">
        </object>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
      </div>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('company.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Music\Downloads\JobPortal-main\resources\views/company/applications/show.blade.php ENDPATH**/ ?>