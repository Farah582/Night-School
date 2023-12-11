<!DOCTYPE html>
<html lang="en">

<head>
    <title>Users</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <?php echo $__env->make('shared.admin-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h3>Teachers</h3>
                <a href="<?php echo e(url('admin/teachers')); ?>">Manage teachers</a>
            </div>
            <div class="col-sm-6">
                <h3>Students</h3>
                <a href="<?php echo e(url('admin/students')); ?>">Manage students</a>
            </div>
        </div>
    </div>

    <?php echo $__env->make('shared.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html><?php /**PATH H:\BreakingGrad\Works\1_SchoolManagementLaravel\xampp\htdocs\NightSchool\resources\views/admin/home/users.blade.php ENDPATH**/ ?>