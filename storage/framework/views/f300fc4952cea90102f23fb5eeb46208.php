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
        <h2>All Class Schedules</h2>
        <table class="table table-bordered table-sm">
            <thead>
                <th>Course Name</th>
                <th>Day</th>
                <th>Start</th>
                <th>End</th>
                <th>Actions</th>
            </thead>
            <tbody>
                <?php $__currentLoopData = $class_schedules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($map_schedules[$c->course_id]); ?></td>
                    <td><?php echo e($c->day_of_week); ?></td>
                    <td><?php echo e($c->start_time); ?></td>
                    <td><?php echo e($c->end_time); ?></td>
                    <td>
                        <a href="<?php echo e(url('teacher/edit-routine/'.$c->id)); ?>" class="btn btn-secondary">Update Routine</a>
                        <a href="<?php echo e(url('teacher/delete-routine/'.$c->id)); ?>" class="btn btn-danger" data-toggle="modal" data-target="#myModal<?php echo e($c->id); ?>">Delete Routine</a>

                        <div class="modal" id="myModal<?php echo e($c->id); ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <h4 class="modal-title">Delete Confirmation</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <div class="modal-body">
                                        Are you sure you want to delete
                                        <b><?php echo e($map_schedules[$c->course_id]); ?>

                                            <?php echo e($c->day_of_week); ?> <?php echo e($c->start_time); ?> <?php echo e($c->end_time); ?>

                                        </b> ?
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <a href="<?php echo e(url('teacher/delete-routine/'.$c->id)); ?>" class="btn btn-danger">Yes</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </td>
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

</html><?php /**PATH H:\BreakingGrad\Works\1_SchoolManagementLaravel\xampp\htdocs\NightSchool\resources\views/teacher/home/manageClassSchedule.blade.php ENDPATH**/ ?>