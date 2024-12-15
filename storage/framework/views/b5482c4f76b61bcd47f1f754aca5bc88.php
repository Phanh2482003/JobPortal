<?php $__env->startSection('content'); ?>

<div class="mx-4">
  <div class="card mb-4">
    <div class="card-header pb-0 px-4">
      <div class="d-flex justify-content-between align-content-start">
        <div>
          <h5 class="mb-2">Danh sách tin tuyển dụng</h5>
          <div class="mb-2 text-sm">
            <i class="bi bi-megaphone-fill text-primary"></i>
            <span class="text-dark ms-sm-1">Chiến dịch tuyển dụng:
              <?php if(isset($campaign)): ?>
              <a href="/company/campaigns/<?php echo e($campaign->id); ?>" class="font-semibold">
                <?php echo e($campaign->name); ?>

              </a>
              <?php else: ?>
              <span class="font-semibold">Tất cả</span>
              <?php endif; ?>
            </span>
          </div>
        </div>
        <div>
          <a href="/company/recruitment-news/create<?php echo e($query); ?>"
            class="btn bg-gradient-primary btn-sm mb-0 d-flex align-items-center gap-2 px-4"
            type="button">
            <span class="text-md">+</span>
            Đăng tin
          </a>
        </div>
      </div>
    </div>
    <div class="card-body p-4 pt-2">
      <ul class="list-group">
        <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
          <div class="d-flex flex-column">
            <h6 class="mb-3"><?php echo e($job->name); ?></h6>
            <div class="d-lg-flex gap-4 d-block mb-lg-2">
              <div class="mb-2 text-sm">
                <i class="bi bi-geo-alt-fill text-primary"></i>
                <span class="text-dark  ms-sm-1"><?php echo e($job->location); ?></span>
              </div>
              <div class="mb-2 text-sm">
                <i class="bi bi-clock text-primary"></i>
                <span class="text-dark ms-sm-1 "><?php echo e($job->employment_type); ?></span>
              </div>
              <div class="mb-2 text-sm">
                <i class="bi bi-cash text-primary"></i>
                <span class="text-dark ms-sm-1 "><?php echo e($job->salary); ?></span>
              </div>
              <div class="mb-2 text-sm">
                <i class="bi bi-calendar-event-fill text-primary"></i>
                <span class="text-dark ms-sm-1 "><?php echo e($job->deadline); ?></span>
              </div>
            </div>
            <div class="d-lg-flex gap-4 d-block mb-lg-2">
              <div class="mb-2 text-sm">
                <i class="bi bi-people-fill text-primary"></i>
                <span class="text-dark  ms-sm-1">Lượt ứng tuyển: <?php echo e($job->application_count); ?></span>
              </div>
            </div>
            <div class="d-lg-flex gap-4 d-block mb-2">
              <div class="mb-2 text-sm">
                <i class="bi bi-megaphone-fill text-primary"></i>
                <span class="text-dark  ms-sm-1">Chiến dịch tuyển dụng:
                  <a href="/company/campaigns/<?php echo e($job->campaign->id); ?>" class="font-semibold"><?php echo e($job->campaign->name); ?></a>
                </span>
              </div>
            </div>
            <div>
              <!-- <a href="/company/applications?job-id=<?php echo e($job->id); ?>" class="bg-green-100 px-4 py-2 text-xs font-bold rounded-sm hover:text-green-700">
                Xem danh sách ứng viên
              </a> -->
            </div>
          </div>
          <div class="ms-auto text-end">
            <?php if($job->status === "shown"): ?>
            <a class="btn btn-link text-info mb-0 d-block d-lg-inline-block" href="/company/recruitment-news/<?php echo e($job->id); ?>/hide<?php echo e($query); ?>">
              <i class="fa-solid fa-eye-slash text-info me-2"></i>Ẩn
            </a>
            <?php else: ?>
            <a class="btn btn-link text-info mb-0 d-block d-lg-inline-block" href="/company/recruitment-news/<?php echo e($job->id); ?>/show<?php echo e($query); ?>">
              <i class="fa-solid fa-eye text-info me-2"></i>Hiện
            </a>
            <?php endif; ?>
            <a class="btn btn-link text-dark px-2 mb-0 d-block d-lg-inline-block" href="/company/recruitment-news/update/<?php echo e($job->id); ?><?php echo e($query); ?>">
              <i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Chỉnh sửa
            </a>
            <button class="btn btn-link text-danger text-gradient mb-0" data-bs-toggle="modal" data-bs-target="#confirmModal-<?php echo e($job->id); ?>">
              <i class="far fa-trash-alt me-2"></i>Xóa
            </button>
          </div>
        </li>
        <!-- Modal -->
        <div class="modal fade" id="confirmModal-<?php echo e($job->id); ?>" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="confirmModalLabel-<?php echo e($job->id); ?>">Xác nhận xóa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p class="text-black">Xóa tin tuyển dụng sẽ đồng thời xóa tất cả ứng viên ứng tuyển cho vị trí này.</p>
                <h6 class="mb-0 text-danger">Bạn có chắc chắc muốn xóa chiến dịch này?</h6>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                <a href="/company/recruitment-news/delete/<?php echo e($job->id); ?><?php echo e($query); ?>" type="button" class="btn btn-danger">Xóa</a>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
      <?php if($jobs->count() == 0): ?>
      <?php if(isset($campaign)): ?>
      <div class="text-center py-2">Chiến dịch này chưa có tin tuyển dụng nào</div>
      <?php else: ?>
      <div class="text-center py-2">Không có tin tuyển dụng nào trên hệ thống</div>
      <?php endif; ?>
      <?php endif; ?>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('company.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Music\Downloads\JobPortal-main\resources\views/company/recruitment-news/index.blade.php ENDPATH**/ ?>