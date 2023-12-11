<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Class Schedules</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>

<body>
    <?php echo $__env->make('shared.teacher-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container">


        <?php if(Session::has('success')): ?>
        <div class="alert alert-success">
            <strong><?php echo e(Session::get('success')); ?></strong>
        </div>
        <?php endif; ?>
        <?php if(Session::has('error')): ?>
        <div class="alert alert-danger">
            <strong><?php echo e(Session::get('error')); ?></strong>
        </div>
        <?php endif; ?>
        <h2>Manage Attendance</h2>



        <table class="table table-bordered table-sm">
            <thead>
                <th>Date</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php $__currentLoopData = $teacher_courses_filtered; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($c['date']); ?></td>
                    <td>
                        <a href="<?php echo e(url('teacher/give-attendance/'.$c['id'])); ?>">Manage</a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>

        </table>

        <h2>View Attendance</h2>
        <table class="table table-bordered table-sm">
            <thead>
                <th>Date</th>
                <th>Student ID</th>
                <th>Student Name</th>
                <th>Course Name</th>
                <th>Attendance</th>
            </thead>
            <tbody>
                <?php $__currentLoopData = $attendanceSheet; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($a->date); ?></td>
                    <td><?php echo e($a->student_id); ?></td>
                    <td><?php echo e($a->student_name); ?></td>
                    <td><?php echo e($a->course_name); ?></td>
                    <td><?php echo e($a->attendance); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

        <br><br><br><br>

        <?php echo $__env->make('shared.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html><?php /**PATH H:\BreakingGrad\Works\1_SchoolManagementLaravel\xampp\htdocs\NightSchool\resources\views/teacher/home/manageAttendance.blade.php ENDPATH**/ ?>