<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Course</title>
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
        <form action="<?php echo e(url('admin/update-course/'.$course->id)); ?>" method="post">
            <?php echo csrf_field(); ?>
            <h2>Edit Course</h2>
            <div class="form-group">
                <label for="title" class="text-info">Title:</label><br>
                <input type="text" name="title" value="<?php echo e($course->title); ?>" id="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="description" class="text-info">Description:</label><br>
                <input type="text" name="description" value="<?php echo e($course->description); ?>" id="description" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-info btn-md" value="Update">
            </div>
        </form>
    </div>

    <?php echo $__env->make('shared.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


</body>

</html><?php /**PATH H:\BreakingGrad\Works\1_SchoolManagementLaravel\xampp\htdocs\NightSchool\resources\views/admin/home/editCourse.blade.php ENDPATH**/ ?>