<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam Schedule</title>
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
                <a class="nav-link" href="<?php echo e(url('teacher/add-course')); ?>">Courses</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('teacher/class-routine')); ?>">Class Routine</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('teacher/exam-schedule')); ?>">Exam Schedule</a>
            </li>
        </ul>
    </nav>

    <div class="container-fluid">
        <h3>Brand / Logo</h3>
        <p>The .navbar-brand class is used to highlight the brand/logo/project name of your page.</p>
    </div>

    <div class="container">
        <h2>Create Exam Schedule</h2>
        <form action="<?php echo e(url('/teacher/exam-store')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="selectedCourse">Select Course</label>
                <select name="selectedCourse">
                    <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($course->id); ?>"><?php echo e($course->title); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>

                <label for="examType">Select Exam Type</label>
                <select name="examType">
                    <option value="CT">CT</option>
                    <option value="Mid">Mid</option>
                    <option value="Final">Final</option>
                </select>
            </div>

            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" class="form-control" name="date" id="">
            </div>

            <div class="form-group">
                <label for="startTime">Start Time</label>
                <input type="time" class="form-control" name="startTime" id="">
            </div>

            <div class="form-group">
                <label for="endTime">End Time</label>
                <input type="time" class="form-control" name="endTime" id="">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>

        </form>
    </div>

</body>

</html><?php /**PATH H:\BreakingGrad\Works\1_SchoolManagementLaravel\xampp\htdocs\NightSchool\resources\views/home/teacherExamSchedule.blade.php ENDPATH**/ ?>