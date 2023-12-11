<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

    <div class="jumbotron text-center">
        <h1>School Management System</h1>
        <p>Use our app to easily manage class and exam schedules!</p>
    </div>

</body>

</html><?php /**PATH H:\BreakingGrad\Works\1_SchoolManagementLaravel\xampp\htdocs\NightSchool\resources\views/home/studentHome.blade.php ENDPATH**/ ?>