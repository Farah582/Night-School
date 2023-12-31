<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand/logo -->
    <a class="navbar-brand" href="<?php echo e(url('/')); ?>">Night School</a>

    <!-- Links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(url('teacher/add-course')); ?>">Courses</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(url('teacher/class-routine')); ?>">Class Routine</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(url('teacher/exam-schedule')); ?>">Exam Schedule</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(url('teacher/assignments')); ?>">Assignments</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(url('teacher/attendance-menu')); ?>">Attendance</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="logoutDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php echo e(Session::get('t_name')); ?>

            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="logoutDropdown">
                <a class="dropdown-item" href="<?php echo e(url('logout')); ?>" onclick="logout()">Logout</a>
                <!-- Add more dropdown items if needed -->
            </div>
        </li>
    </ul>
</nav>

<div class="jumbotron text-center">
    <h1>Teacher Panel</h1>
    <h3><?php echo e(Session::get('t_name')); ?></h3>
    <p>Choose courses to teach and manage schedules</p>
</div>

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Include Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        $('.dropdown-toggle').dropdown();
    });
</script><?php /**PATH C:\xampp\htdocs\NightSchool\resources\views/shared/teacher-nav.blade.php ENDPATH**/ ?>