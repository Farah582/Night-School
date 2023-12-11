<!DOCTYPE html>
<html lang="en">

<head>
    <title>Assignments Details</title>
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
            <div class="card-header"><?php echo e(__('Assignment Details')); ?></div>
            <div class="card-body">
                <table class="table table-bordered table-sm">
                    <thead>
                        <th>Course</th>
                        <th>Teacher</th>
                        <th>File</th>
                        <th>Remarks</th>
                        <th>Feedback</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo e($course_name); ?></td>
                            <td><?php echo e($teacher_name); ?></td>
                            <?php if($student_assignment): ?>
                            <td>
                                <a href="<?php echo e(url('student/download-assignment-solution/'.$student_assignment->id)); ?>">Download</a>
                            </td>
                            <td><?php echo e($student_assignment->remarks); ?></td>
                            <td><?php echo e($student_assignment->feedback); ?></td>
                            <?php endif; ?>
                        </tr>
                    </tbody>

                </table>
            </div>

        </div>
    </div>

    <br><br><br><br>

    <?php echo $__env->make('shared.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html><?php /**PATH H:\BreakingGrad\Works\1_SchoolManagementLaravel\xampp\htdocs\NightSchool\resources\views/student/home/assignmentDetails.blade.php ENDPATH**/ ?>