<!DOCTYPE html>
<html lang="en">

<head>
    <title>Update Routine</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <?php echo $__env->make('shared.teacher-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="jumbotron">
        <form action="<?php echo e(url('teacher/update-routine/'.$course->id)); ?>" method="post">
            <?php echo csrf_field(); ?>
            <h2>Update Routine - <?php echo e($courseTitle); ?></h2>
            <div class="form-group">
                <label for="day" class="text-info">Day:</label><br>
                <input type="text" name="day" value="<?php echo e($course->day_of_week); ?>" id="day" class="form-control">
            </div>
            <div class="form-group">
                <label for="start_time" class="text-info">Start Time:</label><br>
                <input type="text" name="start_time" value="<?php echo e($course->start_time); ?>" id="start_time" class="form-control">
            </div>
            <div class="form-group">
                <label for="end_time" class="text-info">End Time:</label><br>
                <input type="text" name="end_time" value="<?php echo e($course->end_time); ?>" id="end_time" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-info btn-md" value="Update">
            </div>
        </form>
    </div>

    <?php echo $__env->make('shared.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html><?php /**PATH H:\BreakingGrad\Works\1_SchoolManagementLaravel\xampp\htdocs\NightSchool\resources\views/teacher/home/updateClassRoutine.blade.php ENDPATH**/ ?>