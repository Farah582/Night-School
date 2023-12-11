<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Teacher</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <?php echo $__env->make('shared.admin-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="jumbotron">
        <form action="<?php echo e(url('admin/update-teacher/'.$teacher->id)); ?>" method="post">
            <?php echo csrf_field(); ?>
            <h2>Edit Teacher</h2>
            <div class="form-group">
                <label for="name" class="text-info">Name:</label><br>
                <input type="text" name="name" value="<?php echo e($teacher->name); ?>" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="email" class="text-info">Email:</label><br>
                <input type="text" name="email" value="<?php echo e($teacher->email); ?>" id="email" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-info btn-md" value="Update">
            </div>
        </form>
    </div>

    <?php echo $__env->make('shared.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


</body>

</html><?php /**PATH H:\BreakingGrad\Works\1_SchoolManagementLaravel\xampp\htdocs\NightSchool\resources\views/admin/home/editTeacher.blade.php ENDPATH**/ ?>