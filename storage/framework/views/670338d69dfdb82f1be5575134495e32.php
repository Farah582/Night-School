<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Routine</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- Brand/logo -->
        <a class="navbar-brand" href="#">Night School</a>

        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('student/enroll')); ?>">Enroll</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('student/class-schedule')); ?>">Class Schedule</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('student/exam-schedule')); ?>">Exam Timetable</a>
            </li>
        </ul>
    </nav>

    <div class="container-fluid">
        <h3>Brand / Logo</h3>
        <p>The .navbar-brand class is used to highlight the brand/logo/project name of your page.</p>
    </div>

    <div class="container">
        <h2>Class Routine</h2>

        <?php $__currentLoopData = $routine; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th><?php echo e($key); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($v['courseName']); ?></td>
                    <td><?php echo e($v['startTime']); ?></td>
                    <td><?php echo e($v['endTime']); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>

</html><?php /**PATH H:\BreakingGrad\Works\1_SchoolManagementLaravel\xampp\htdocs\NightSchool\resources\views/home/studentRoutine.blade.php ENDPATH**/ ?>