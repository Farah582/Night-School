<!DOCTYPE html>
<html lang="en">

<head>
    <title>Student - Home</title>
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
        <div class="row">
            <div class="col-sm-4">
                <h3><a href="<?php echo e(url('student/assignments')); ?>">Assignments</a></h3>
                <p>Manage assignments</p>
            </div>
            <div class="col-sm-4">
                <h3><a href="<?php echo e(url('student/exam-schedule')); ?>">Exam Schedule</a></h3>
                <p>Manage exam schedule</p>
            </div>
            <div class="col-sm-4">
                <h3><a href="<?php echo e(url('student/class-schedule')); ?>">Class Routine</a></h3>
                <p>Manage routines</p>
            </div>
        </div>

        <br><br><br><br>

        <div class="card">
            <div class="card-header"><?php echo e(__('Enrollments')); ?></div>
            <div class="card-body">
                <table class="table table-bordered table-sm">
                    <thead>
                        <th>Course Title</th>
                        <th>Course Description</th>
                        <th>Actions</th>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $studentCourses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($c->title); ?></td>
                            <td><?php echo e($c->description); ?></td>
                            <td>
                                <a href="<?php echo e(url('student/delete-course/'.$c->id)); ?>" class="btn btn-danger" data-toggle="modal" data-target="#myModal<?php echo e($c->id); ?>">Remove</a>

                                <div class="modal" id="myModal<?php echo e($c->id); ?>">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <h4 class="modal-title">Delete Confirmation</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>

                                            <div class="modal-body">
                                                Are you sure you want to delete <b><?php echo e($c->title); ?> </b> ?
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <a href="<?php echo e(url('student/delete-course/'.$c->id)); ?>" class="btn btn-danger">Yes</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
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

</html><?php /**PATH C:\xampp\htdocs\NightSchool\resources\views/student/home/studentHome.blade.php ENDPATH**/ ?>