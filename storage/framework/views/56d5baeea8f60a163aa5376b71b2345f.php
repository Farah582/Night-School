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

    <?php echo $__env->make('shared.teacher-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container">
        <?php if(Session::has('error')): ?>
        <div class="alert alert-danger">
            <span><?php echo e(Session::get('error')); ?></span>
        </div>
        <?php endif; ?>
        <div class="card">
            <div class="card-header"><?php echo e(__('Assignment Details')); ?></div>
            <div class="card-body">
                <table class="table table-bordered table-sm">
                    <thead>
                        <th>Student ID</th>
                        <th>Student Name</th>
                        <th>File</th>
                        <th>Remarks</th>
                        <th>Feedback</th>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $assignmentFiltered; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($a['student_id']); ?></td>
                            <td><?php echo e($a['student_name']); ?></td>
                            <td>
                                <a href="<?php echo e(url('teacher/download-assignment-solution/'.$a['id'])); ?>">Download</a>
                            </td>
                            <td>
                                <?php if($a['remarks']): ?>
                                <?php echo e($a['remarks']); ?>

                                <?php else: ?>
                                <a href="<?php echo e(url('teacher/mark-assignment/'.$a['id'])); ?>" data-toggle="modal" data-target="#myModal<?php echo e($a['id']); ?>">Give Marks</a>
                                <!-- The Modal -->
                                <div class="modal" id="myModal<?php echo e($a['id']); ?>">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Mark Assignment </h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <form action="<?php echo e(url('teacher/mark-assignment/'.$a['id'])); ?>" method="post">
                                                    <?php echo csrf_field(); ?>
                                                    <div class="form-group">
                                                        <label for="remarks" class="text-info">Remarks:</label><br>
                                                        <input type="number" name="remarks" id="remarks" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="submit" name="submit" class="btn btn-info btn-md" value="Save">
                                                    </div>
                                                </form>
                                            </div>

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <!-- <a href="<?php echo e(url('teacher/mark-assignment/'.$a['id'])); ?>" class="btn btn-success">Save</a> -->
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php if($a['feedback']): ?>
                                <?php echo e($a['feedback']); ?>

                                <?php else: ?>
                                <a href="<?php echo e(url('teacher/give-feedback/'.$a['id'])); ?>" data-toggle="modal" data-target="#myModalF<?php echo e($a['id']); ?>">Give Feedback</a>
                                <!-- The Modal -->
                                <div class="modal" id="myModalF<?php echo e($a['id']); ?>">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Give Feedback </h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <form action="<?php echo e(url('teacher/give-feedback/'.$a['id'])); ?>" method="post">
                                                    <?php echo csrf_field(); ?>
                                                    <div class="form-group">
                                                        <label for="feedback" class="text-info">Feedback:</label><br>
                                                        <input type="text" name="feedback" id="feedback" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="submit" name="submit" class="btn btn-info btn-md" value="Save">
                                                    </div>
                                                </form>
                                            </div>

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>

                </table>
            </div>

        </div>
    </div>

    <?php echo $__env->make('shared.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html><?php /**PATH H:\BreakingGrad\Works\1_SchoolManagementLaravel\xampp\htdocs\NightSchool\resources\views/teacher/home/assignmentDetails.blade.php ENDPATH**/ ?>