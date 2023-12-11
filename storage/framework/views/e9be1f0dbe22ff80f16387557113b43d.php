<!DOCTYPE html>
<html lang="en">

<head>
    <title>Assignments</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <?php echo $__env->make('shared.student-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container">
        <div class="card">
            <div class="card-header"><?php echo e(__('Assignments')); ?></div>
            <div class="card-body">
                <table class="table table-bordered table-sm">
                    <thead>
                        <th>Course</th>
                        <th>Teacher</th>
                        <th>File</th>
                        <th>Submission date</th>
                        <th>Actions</th>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $student_assignments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($c['course_name']); ?></td>
                            <td><?php echo e($c['teacher_name']); ?></td>
                            <td>
                                <a href="<?php echo e(url('student/download-assignment/'.$c['id'])); ?>">Download</a>
                            </td>
                            <td><?php echo e($c['submission']); ?></td>
                            <td>
                                <a href="<?php echo e(url('student/upload-assignment/'.$c['id'])); ?>" class="btn btn-primary">Submit</a>
                                <a href="<?php echo e(url('student/assignment-details/'.$c['id'])); ?>" class="btn btn-info">Details</a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>

                </table>
            </div>

        </div>
    </div>

    <br><br><br><br>

    <?php echo $__env->make('shared.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


</body>

</html><?php /**PATH H:\BreakingGrad\Works\1_SchoolManagementLaravel\xampp\htdocs\NightSchool\resources\views/student/home/assignments.blade.php ENDPATH**/ ?>