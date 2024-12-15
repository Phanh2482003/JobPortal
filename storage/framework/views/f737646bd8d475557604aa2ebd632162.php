<!DOCTYPE html>
<html lang="en">

<?php echo $__env->make('company.includes.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body class="g-sidenav-show bg-gray-100 relative">
  <?php echo $__env->make('company.includes.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <main class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
    <?php echo $__env->make('company.includes.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container-fluid py-4">
      <?php echo $__env->yieldContent('content'); ?>
    </div>
  </main>
  <?php echo $__env->make('company.includes.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html><?php /**PATH C:\Users\Admin\Music\Downloads\JobPortal-main\resources\views/company/layouts/app.blade.php ENDPATH**/ ?>