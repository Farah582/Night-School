<!DOCTYPE html>
<html lang="en">

<head>
    <title>Attendance Menu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <?php echo $__env->make('shared.teacher-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container">
        <h2>Attendance Menu</h2>
        <table class="table table-bordered table-sm">
            <thead>
                <th>Course Name</th>
                <th>Actions</th>
            </thead>
            <tbody>
                <?php $__currentLoopData = $teacher_courses_filtered; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($c['course_title']); ?></td>
                    <td>
                        <a href="<?php echo e(url('teacher/add-attendance/'.$c['course_id'])); ?>" class="btn btn-secondary">Add Attendance</a>
                        <a href="<?php echo e(url('teacher/manage-attendance/'.$c['course_id'])); ?>" class="btn btn-info">Manage Attendance</a>
                    </td>
                </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

        <?php echo $__env->make('shared.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <br><br><br><br>

</body>

</html><?php /**PATH H:\BreakingGrad\Works\1_SchoolManagementLaravel\xampp\htdocs\NightSchool\resources\views/teacher/home/attendanceMenu.blade.php ENDPATH**/ ?>