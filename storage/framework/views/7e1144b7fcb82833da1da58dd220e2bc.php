<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="m-0 navbar-brand text-wrap text-center p-1" href="#">
      <div class="font-bold text-xl fs-5"><i class="bi bi-briefcase-fill"></i> ENUY </div>
      <p class="mb-0 underline underline-offset-4"><?php echo e($role); ?></p>
    </a>
  </div>
  <hr class="horizontal dark mt-0">
  <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
    <ul class="navbar-nav pb-6">
      <?php if($role == "ADMIN"): ?>
      <li class="nav-item">
        <a class="nav-link <?php echo e((Request::is('company/users') || Request::is('company/users/*') ? 'active' : '')); ?>" href="<?php echo e(url('company/users')); ?>">
          <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <i style="font-size: 1rem;" class="fas fa-lg fa-list-ul ps-2 pe-2 text-center text-dark <?php echo e((Request::is('company/users') || Request::is('company/users/*') ? 'text-white' : 'text-dark')); ?> " aria-hidden="true"></i>
          </div>
          <span class="nav-link-text ms-1">Quản lý tài khoản</span>
        </a>
      </li>
      <?php endif; ?>
      <?php if($role != "HR"): ?>
      <li class="nav-item">
        <a class="nav-link <?php echo e((Request::is('company/campaigns') || Request::is('company/campaigns/*') ? 'active' : '')); ?>" href="<?php echo e(url('company/campaigns')); ?>">
          <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <i style="font-size: 0.9rem" class="bi bi-megaphone-fill pb-1 <?php echo e((Request::is('company/campaigns') || Request::is('company/campaigns/*') ? 'text-white' : 'text-dark')); ?>"></i>
          </div>
          <span class="nav-link-text ms-1">Chiến dịch tuyển dụng</span>
        </a>
      </li>
      <?php endif; ?>
      <li class="nav-item">
        <a class="nav-link <?php echo e((Request::is('company/recruitment-news') || Request::is('company/recruitment-news/*') ? 'active' : '')); ?>" href="<?php echo e(url('company/recruitment-news')); ?>">
          <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <i style="font-size: 0.9rem" class="bi bi-newspaper pb-1 <?php echo e((Request::is('company/recruitment-news') || Request::is('company/recruitment-news/*') ? 'text-white' : 'text-dark')); ?>"></i>
          </div>
          <span class="nav-link-text ms-1">Tin tuyển dụng</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo e((Request::is('company/applications') || Request::is('company/applications/*') ? 'active' : '')); ?>" href="<?php echo e(url('company/applications')); ?>">
          <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <i style="font-size: 0.9rem" class="bi bi-people-fill pb-1 <?php echo e((Request::is('company/applications') || Request::is('company/applications/*') ? 'text-white' : 'text-dark')); ?>"></i>
          </div>
          <span class="nav-link-text ms-1">Quản lý ứng viên</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo e((Request::is('company/interviews') || Request::is('company/interviews/*') ? 'active' : '')); ?>" href="<?php echo e(url('company/interviews')); ?>">
          <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <i style="font-size: 0.9rem" class="bi bi-headset pb-1 <?php echo e((Request::is('company/interviews') || Request::is('company/interviews/*') ? 'text-white' : 'text-dark')); ?>"></i>
          </div>
          <span class="nav-link-text ms-1">Lịch phỏng vấn</span>
        </a>
      </li>
      <?php if($role != "ADMIN"): ?>
      <li class="nav-item">
        <a class="nav-link <?php echo e((Request::is('company/profile') || Request::is('company/profile/*') ? 'active' : '')); ?>" href="<?php echo e(url('company/profile')); ?>">
          <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <i style="font-size: 1rem;" class="bi bi-person-circle ps-2 pe-2 text-center text-dark <?php echo e((Request::is('company/profile') || Request::is('company/profile/*') ? 'text-white' : 'text-dark')); ?> " aria-hidden="true"></i>
          </div>
          <span class="nav-link-text ms-1">Quản lý tài khoản</span>
        </a>
      </li>
      <?php endif; ?>
    </ul>
  </div>
</aside><?php /**PATH C:\Users\Admin\Music\Downloads\JobPortal-main\resources\views/company/includes/sidebar.blade.php ENDPATH**/ ?>