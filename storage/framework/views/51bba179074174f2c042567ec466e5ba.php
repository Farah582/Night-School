<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Student</title>
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
        <a class="navbar-brand" href="/admin/home">Night School</a>

        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('admin/add-courses')); ?>">Add Courses</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('admin/manage-courses')); ?>">Manage Courses</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('admin/users')); ?>">Manage Users</a>
            </li>
        </ul>
    </nav>

    <div class="jumbotron text-center">
        <h1>Admin Panel</h1>
        <p>Manage courses and users</p>
    </div>

    <div class="jumbotron">
        <form action="<?php echo e(url('admin/update-student/'.$student->id)); ?>" method="post">
            <?php echo csrf_field(); ?>
            <h2>Edit Student</h2>
            <div class="form-group">
                <label for="name" class="text-info">Name:</label><br>
                <input type="text" name="name" value="<?php echo e($student->name); ?>" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="email" class="text-info">Email:</label><br>
                <input type="text" name="email" value="<?php echo e($student->email); ?>" id="email" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-info btn-md" value="Update">
            </div>
        </form>
    </div>

</body>

</html><?php /**PATH H:\BreakingGrad\Works\1_SchoolManagementLaravel\xampp\htdocs\NightSchool\resources\views/admin/home/editStudent.blade.php ENDPATH**/ ?>