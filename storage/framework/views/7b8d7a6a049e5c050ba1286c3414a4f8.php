<?php $__env->startSection('content'); ?>

<div>
  <div class="row">
    <div class="col-12">
      <div class="card mb-4 mx-4">
        <div class="card-header pb-0">
          <div class="d-flex flex-row justify-content-between">
            <h5 class="mb-0">Danh sách chiến dịch</h5>
            <a href="/company/campaigns/create" class="btn bg-gradient-primary btn-sm mb-0 d-flex align-items-center gap-2 px-4" type="button">
              <span class="text-md">+</span>
              Thêm mới
            </a>
          </div>
        </div>
        <div class="card-body px-0 pt-3 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr class="border-top border-light">
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-4">
                    Tên chiến dịch
                  </th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                    Thời gian bắt đầu
                  </th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                    Thời gian kết thúc
                  </th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                    Người phụ trách
                  </th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                    Trạng thái
                  </th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                    Ngày tạo
                  </th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 invisible">
                    Action
                  </th>
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $campaigns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $campaign): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td class="ps-4">
                    <p class="text-xs font-weight-bold mb-0"><?php echo e($campaign->name); ?></p>
                  </td>
                  <td class="text-center">
                    <p class="text-xs font-weight-bold mb-0"><?php echo e($campaign->start_time); ?></p>
                  </td>
                  <td class="text-center">
                    <p class="text-xs font-weight-bold mb-0"><?php echo e($campaign->end_time); ?></p>
                  </td>
                  <td class="">
                    <p class="text-xs font-weight-bold mb-0"><?php echo e($campaign->user_in_charge); ?></p>
                  </td>
                  <td class="">
                    <p class="text-xs font-weight-bold mb-0">
                      <?php if($campaign->is_active): ?>
                      <span class="bg-green-400 text-white pb-0.5 px-2 rounded">Đang hoạt động</span>
                      <?php else: ?>
                      <span class="bg-gray-400 text-white pb-0.5 px-2 rounded">Đã kết thúc</span>
                      <?php endif; ?>
                    </p>
                  </td>
                  <td class="text-center">
                    <span class="text-secondary text-xs font-weight-bold"><?php echo e(date("d/m/Y", strtotime($campaign->created_at))); ?></span>
                  </td>
                  <td class="text-center">
                    <a href="/company/campaigns/<?php echo e($campaign->id); ?>" class="me-2">
                      <i class="fa-solid fa-up-right-from-square"></i>
                    </a>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
            <?php if($campaigns->count() == 0): ?>
            <div class="text-center py-5">
              Chưa có chiến dịch nào trên hệ thống
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('company.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Music\Downloads\JobPortal-main\resources\views/company/campaigns/index.blade.php ENDPATH**/ ?>