<!DOCTYPE html>
<html lang="en">

<?php echo $__env->make('candidate.includes.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- header -->
        <?php echo $__env->make('candidate.includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- // header -->


        <!-- contents -->
        <?php echo $__env->yieldContent('content'); ?>
        <!-- // contents -->


        <!-- footer -->
        <?php echo $__env->make('candidate.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- // footer -->
    </div>

    <!-- Toast notification -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <?php if(session()->has('success')): ?>
    <script>
        toastr.options = {
            "progressBar": true,
            "closeButton": true
        }
        toastr.success("<?php echo e(session('success')); ?>", 'Thành công!', {
            timeOut: 3000
        });
    </script>
    <?php endif; ?>

    <?php if(session()->has('error')): ?>
    <script>
        toastr.options = {
            "progressBar": true,
            "closeButton": true
        }
        toastr.error("<?php echo e(session('error')); ?>", 'Thất bại!', {
            timeOut: 3000
        });
    </script>
    <?php endif; ?>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/candidate/lib/wow/wow.min.js"></script>
    <script src="/assets/candidate/lib/easing/easing.min.js"></script>
    <script src="/assets/candidate/lib/waypoints/waypoints.min.js"></script>
    <script src="/assets/candidate/lib/owlcarousel/owl.carousel.min.js"></script>



    <!-- Template Javascript -->
    <script src="/assets/candidate/js/main.js"></script>

</body>

</html><?php /**PATH C:\Users\Admin\Music\Downloads\JobPortal-main\resources\views/candidate/layouts/default.blade.php ENDPATH**/ ?>